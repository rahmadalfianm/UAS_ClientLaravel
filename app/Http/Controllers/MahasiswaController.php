<?php

namespace App\Http\Controllers;
use GuzzleHttp;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function construct(){
        $this->middleware('auth'); 
    }

    public function show_mhs(){
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'http://localhost/matakuliah/api/mengampu', [
        'auth' => ['admin', '1234']
    ]);
    $mahasiswa = json_decode((string) $res->getBody(),true);
    return view('indexmhs')->with('mahasiswa',$mahasiswa);
    }

    public function tambahmhs()
    {
        $client = new Client();
        $request = $client->get('http://localhost/matakuliah/api/mahasiswa');
        $response = $request->getBody();

        $mahasiswa = json_decode($response, true);
        return view('tambahmhs', ['mahasiswa' => $mahasiswa]);
    }

    public function simpanmhs(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $client->request('POST', 'http://localhost/matakuliah/api/mahasiswa', [
            'form_params' => [
                'nama' => $request->nama,
                'nim' => $request->nim,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ]
        ]);
        return redirect('/home/dftrmhs')->with(['success' => 'Data Mahasiswa Berhasil Ditambahkan']);
    }

    public function detailmhs($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/matakuliah/api/mahasiswa?id='.$id);
        $response = $request->getBody();
        $mahasiswa['mahasiswa'] = json_decode($response, true);

        return view('detailmhs', ['mahasiswa' => $mahasiswa]);
    }

    public function editmhs($id)
    {
        $client = new Client();
        $request1 = $client->get('http://localhost/matakuliah/api/mahasiswa');
        $response1 = $request1->getBody();
        $request2 = $client->get('http://localhost/matakuliah/api/mahasiswa?id='.$id);
        $response2 = $request2->getBody();
        $mahasiswa = json_decode($response2, true);
        return view('editmhs', ['mahasiswa' => $mahasiswa, 'mahasiswa' => $mahasiswa]);
    }

    public function updatemhs(Request $request)
    {
        $client = new Client();
        $client->request('PUT', 'http://localhost/matakuliah/api/mahasiswa', [
            'form_params' => [
                'id' => $request->id,
                'nama' => $request->nama,
                'nim' => $request->nim,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ]
        ]);
        return redirect('/home/detailmhs/' . $request->id)->with(['success' => 'Data Mahasiswa Berhasil Diedit']);
    }

    public function deletemhs($id)
    {
        $client = new \GuzzleHttp\Client();
        $client->delete('http://localhost/matakuliah/api/mahasiswa', [
            'form_params' => [
                'id' => $id
            ]
        ]);

        return redirect('/home/dftrmhs')->with(['error' => 'Data Berhasil Dihapus']);
    }
}
