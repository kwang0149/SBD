<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BimitsController extends Controller
{
    //
    public function index()
    {
    	// mengambil data dari table pegawai
        $pembina = DB::table('table_pembina')->get();
    	$pengurus = DB::table('table_pengurus')->get();
        $anggota = DB::table('table_anggota')->get();
        $mahasiswa= DB::table('table_mahasiswa')->get();
        $proker=DB::table('table_proker')->get();
        $pengurus_oprec=DB::table('table_pengurus_oprec')->get();
        $peserta_oprec=DB::table('table_peserta_oprec')->get();
    	// mengirim data pegawai ke view index
    	return view('ketua',['table_pengurus' => $pengurus,
        'table_anggota'=>$anggota,
        'table_mahasiswa'=>$mahasiswa,
        'table_proker'=>$proker, 
        'table_pengurus_oprec'=>$pengurus_oprec,
        'table_peserta_oprec'=>$peserta_oprec,
        'table_pembina'=>$pembina]
    );

    }

        public function pengurus()
    {
    	// mengambil data dari table pegawai
        // $pembina = DB::table('table_pembina')->get();
    	$pengurus = DB::table('table_pengurus')->get();
        $anggota = DB::table('table_anggota')->get();
        $mahasiswa= DB::table('table_mahasiswa')->get();
        $proker=DB::table('table_proker')->get();
        $pengurus_oprec=DB::table('table_pengurus_oprec')->get();
        $peserta_oprec=DB::table('table_peserta_oprec')->get();
    	// mengirim data pegawai ke view index
    	return view('pengurus',['table_pengurus' => $pengurus,
        'table_anggota'=>$anggota,
        'table_mahasiswa'=>$mahasiswa,
        'table_proker'=>$proker, 
        'table_pengurus_oprec'=>$pengurus_oprec,
        'table_peserta_oprec'=>$peserta_oprec]
    );
    }

            public function mahasiswa()
    {
    	// mengambil data dari table pegawai

        $mahasiswa= DB::table('table_mahasiswa')->get();
    	// mengirim data pegawai ke view index
    	return view('mahasiswa',['table_mahasiswa'=>$mahasiswa]
   
    );
    }

    public function pembina()
    {
    	// mengambil data dari table pembina
        $pembina = DB::table('table_pembina')->get();
    	$pengurus = DB::table('table_pengurus')->get();
        $anggota = DB::table('table_anggota')->get();
        $mahasiswa= DB::table('table_mahasiswa')->get();
        $proker=DB::table('table_proker')->get();
        $pengurus_oprec=DB::table('table_pengurus_oprec')->get();
        $peserta_oprec=DB::table('table_peserta_oprec')->get();
    	// mengirim data pegawai ke view index
    	return view('pembina',['table_pengurus' => $pengurus,
        'table_anggota'=>$anggota,
        'table_mahasiswa'=>$mahasiswa,
        'table_proker'=>$proker, 
        'table_pengurus_oprec'=>$pengurus_oprec,
        'table_peserta_oprec'=>$peserta_oprec,
        'table_pembina'=>$pembina]
    );
    }

    public function tambahPengurus(){
        return view ("pengurus.tambah");
    }

     public function storePengurus(Request $request)
    {
        DB::table('table_pengurus')->insert([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'jabatan' => $request->jabatan
        ]);
        return redirect('/bimits/ketua');
    }

        public function editPengurus($nrp)
    {
        $pengurus = DB::table('table_pengurus')->where('nrp', $nrp)->get();
        return view('pengurus.edit', ['table_pengurus' => $pengurus]);
    }
    
     public function updatePengurus(Request $request)
    {
        DB::table('table_pengurus')->where('nrp', $request->nrp)->update([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'jabatan' => $request->jabatan
        ]);
        return redirect('/bimits/ketua');
    }


    public function hapusPengurus($nrp)
    {

        DB::table('table_pengurus')->where('nrp', $nrp)->delete();

        return redirect('/bimits/ketua');
    }
}
