<?php

namespace App\Http\Controllers;
use GuzzleHttp;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function show_mtk(){
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'http://localhost/matakuliah/api/matkul', [
        'auth' => ['admin', '1234']
    ]);
    $matkul = json_decode((string) $res->getBody(),true);
    return view('matakuliah.indexmtk')->with('matkul',$matkul);
    }

    public function tambahmtk()
    {
        $client = new Client();
        $request = $client->get('http://localhost/matakuliah/api/matkul');
        $response = $request->getBody();

        $matkul= json_decode($response, true);
        return view('matakuliah.tambahmtk', ['matkul' => $matkul]);
    }

    public function simpanmtk(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $client->request('POST', 'http://localhost/matakuliah/api/matkul', [
            'form_params' => [
                'nama_matkul' => $request->nama_matkul,
                'tahun_ajaran' => $request->tahun_ajaran,
                'hari' => $request->hari,
                'jam' => $request->jam
            ]
        ]);
        return redirect('/home/dftrmatkul')->with(['success' => 'Data Matakuliah Berhasil Ditambahkan']);
    }

    public function detailmtk($id_matkul)
    {
        $client = new Client();
        $request = $client->get('http://localhost/matakuliah/api/matkul?id_matkul='.$id_matkul);
        $response = $request->getBody();
        $matakuliah['matakuliah'] = json_decode($response, true);

        return view('matakuliah.detailmtk', ['matakuliah' => $matakuliah]);
    }

    public function editmtk($id_matkul)
    {
        $client = new Client();
        $request1 = $client->get('http://localhost/matakuliah/api/matkul');
        $response1 = $request1->getBody();
        $request2 = $client->get('http://localhost/matakuliah/api/matkul?id_matkul='.$id_matkul);
        $response2 = $request2->getBody();
        $matakuliah = json_decode($response2, true);

        return view('matakuliah.editmtk', ['matakuliah' => $matakuliah, 'matakuliah' => $matakuliah]);
    }

    public function updatemtk(Request $request)
    {
        $client = new Client();
        $client->request('PUT', 'http://localhost/matakuliah/api/matkul', [
            'form_params' => [
                'id_matkul' => $request->id_matkul,
                'nama_matkul' => $request->nama_matkul,
                'tahun_ajaran' => $request->tahun_ajaran,
                'hari' => $request->hari,
                'jam' => $request->jam
            ]
        ]);
        return redirect('/home/detailmtk/' . $request->id_matkul)->with(['success' => 'Data Matakuliah Berhasil Diedit']);
    }

    public function deletemtk($id_matkul)
    {
        $client = new \GuzzleHttp\Client();
        $client->delete('http://localhost/matakuliah/api/matkul', [
            'form_params' => [
                'id_matkul' => $id_matkul
            ]
        ]);

        return redirect('/home/dftrmatkul')->with(['error' => 'Data Berhasil Dihapus']);
    }
}
