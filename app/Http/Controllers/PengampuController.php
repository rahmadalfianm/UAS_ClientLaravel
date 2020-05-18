<?php

namespace App\Http\Controllers;
use GuzzleHttp;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PengampuController extends Controller
{
    public function show_pengampu(){
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'http://localhost/matakuliah/api/mengampu', [
        'auth' => ['admin', '1234']
    ]);
    $pengampu = json_decode((string) $res->getBody(),true);
    return view('pengampu.indexpengampu')->with('pengampu',$pengampu);
    }

    public function tambahpengampu()
    {
        $client = new Client();
        $request = $client->get('http://localhost/matakuliah/api/mengampu');
        $response = $request->getBody();

        $mengampu = json_decode($response, true);
        return view('pengampu.tambahpengampu', ['mengampu' => $mengampu]);
    }

    public function simpanpgm(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $client->request('POST', 'http://localhost/matakuliah/api/mengampu', [
            'form_params' => [
                'nip' => $request->nip,
                'nama_dosen' => $request->nama_dosen,
                'id' => $request->id,
                'id_matkul' => $request->id_matkul,
                'id_kelas' => $request->id_kelas
            ]
        ]);
        //return redirect('/home/dftrpengampu')->with(['success' => 'Data Mahasiswa Berhasil Ditambahkan']);
        return view('pengampu.simpanpengampu', ['pengampu' => $request])->with(['success' => 'Data Pengampu Berhasil Ditambahkan']);
    }

    public function detailpengampu($id_mengampu)
    {
        $client = new Client();
        $request = $client->get('http://localhost/matakuliah/api/mengampu?id_mengampu='.$id_mengampu);
        $response = $request->getBody();
        $mengampu['mengampu'] = json_decode($response, true);

        return view('pengampu.detailpengampu', ['mengampu' => $mengampu]);
    }

    public function editpgm($id_mengampu)
    {
        $client = new Client();
        $request1 = $client->get('http://localhost/matakuliah/api/mengampu');
        $response1 = $request1->getBody();
        $request2 = $client->get('http://localhost/matakuliah/api/mengampu?id_mengampu='.$id_mengampu);
        $response2 = $request2->getBody();
        $pengampu = json_decode($response2, true);
        return view('pengampu.editpengampu', ['pengampu' => $pengampu, 'pengampu' => $pengampu]);
    }

    public function updatepgm(Request $request)
    {
        $client = new Client();
        $client->request('PUT', 'http://localhost/matakuliah/api/mengampu', [
            'form_params' => [
                'id_mengampu' => $request->id_mengampu,
                'nip' => $request->nip,
                'nama_dosen' => $request->nama_dosen,
                'id' => $request->id,
                'id_matkul' => $request->id_matkul,
                'id_kelas' => $request->id_kelas
            ]
        ]);
        return redirect('/home/detailpengampu/' . $request->id_mengampu)->with(['success' => 'Data Mengampu Berhasil Diedit']);
    }
    public function deletepgm($id_mengampu)
    {
        $client = new \GuzzleHttp\Client();
        $client->delete('http://localhost/matakuliah/api/mengampu', [
            'form_params' => [
                'id_mengampu' => $id_mengampu
            ]
        ]);

        return redirect('/home/dftrpengampu')->with(['error' => 'Data Berhasil Dihapus']);
    }
}
