<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BimitsController extends Controller
{
    //2r

    public function login(){
        return view('login');
    }

    public function login_dua(){
        return view('login2');
    }

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


// manipulasi data pembina
        public function tambahPembina(){
        return view ("pembina.tambah");
    }

     public function storePembina(Request $request)
    {
        DB::table('table_pembina')->insert([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan
        ]);
        return redirect('/bimits/ketua');
    }
        public function editPembina($nip)
    {
        $pembina= DB::table('table_pembina')->where('nip', $nip)->get();
        return view('pembina.edit', ['table_pembina' => $pembina]);
    }
    
     public function updatePembina(Request $request)
    {
        DB::table('table_pembina')->where('nip', $request->nip)->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan
        ]);
        return redirect('/bimits/ketua');
    }


    public function hapusPembina($nip)
    {

        DB::table('table_pembina')->where('nip', $nip)->delete();

        return redirect('/bimits/ketua');
    }


    // manipulasi data pembina oleh pembina
           public function tambahPembinaOlehPembina(){
        return view ("pembina.tambah");
    }

     public function storePembinaOlehPembina(Request $request)
    {
        DB::table('table_pembina')->insert([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan
        ]);
        return redirect('/bimits/pembina');
    }
        public function editPembinaOlehPembina($nip)
    {
        $pembina= DB::table('table_pembina')->where('nip', $nip)->get();
        return view('pembina.edit', ['table_pembina' => $pembina]);
    }
    
     public function updatePembinaOlehPembina(Request $request)
    {
        DB::table('table_pembina')->where('nip', $request->nip)->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan
        ]);
        return redirect('/bimits/pembina');
    }


    public function hapusPembinaOlehPembina($nip)
    {

        DB::table('table_pembina')->where('nip', $nip)->delete();

        return redirect('/bimits/pembina');
    }
    


    // manipulasi data mahasiswa
        public function tambahMahasiswaOlehKetua(){
        return view ("mahasiswa.tambahOlehKetua");
    }

     public function storeMahasiswaOlehKetua(Request $request)
    {
        DB::table('table_mahasiswa')->insert([
            'nrp' => $request->nrp,
            'nomor_wa' => $request->nomor_wa,
            'nama' => $request->nama,
            'id_line' => $request->id_line,
            'tempat_tanggal_lahir' => $request->tempat_tanggal_lahir,
            'alamat_lengkap' => $request->alamat_lengkap,
            'departemen' => $request->departemen
        ]);
        return redirect('/bimits/ketua');
    }
        public function editMahasiswaOlehKetua($nrp)
    {
        $mahasiswa= DB::table('table_mahasiswa')->where('nrp', $nrp)->get();
        return view('mahasiswa.editOlehKetua', ['table_mahasiswa' => $mahasiswa]);
    }
    
     public function updateMahasiswaOlehKetua(Request $request)
    {
        DB::table('table_mahasiswa')->where('nrp', $request->nrp)->update([
            'nrp' => $request->nrp,
            'nomor_wa' => $request->nomor_wa,
            'nama' => $request->nama,
            'id_line' => $request->id_line,
            'tempat_tanggal_lahir' => $request->tempat_tanggal_lahir,
            'alamat_lengkap' => $request->alamat_lengkap,
            'departemen' => $request->departemen
        ]);
        return redirect('/bimits/ketua');
    }


    public function hapusMahasiswaOlehKetua($nrp)
    {
        DB::table('table_mahasiswa')->where('nrp', $nrp)->delete();
        return redirect('/bimits/ketua');
    }

    public function tambahMahasiswaOlehPengurus(){
        return view ("mahasiswa.tambahOlehPengurus");
    }

    public function updateMahasiswaOlehPengurus(Request $request)
    {
        DB::table('table_mahasiswa')->where('nrp', $request->nrp)->update([
            'nrp' => $request->nrp,
            'nomor_wa' => $request->nomor_wa,
            'nama' => $request->nama,
            'id_line' => $request->id_line,
            'tempat_tanggal_lahir' => $request->tempat_tanggal_lahir,
            'alamat_lengkap' => $request->alamat_lengkap,
            'departemen' => $request->departemen
        ]);
        return redirect('/bimits/pengurus');
    }

     public function storeMahasiswaOlehPengurus(Request $request)
    {

        DB::table('table_mahasiswa')->insert([
            'nrp' => $request->nrp,
            'nomor_wa' => $request->nomor_wa,
            'nama' => $request->nama,
            'id_line' => $request->id_line,
            'tempat_tanggal_lahir' => $request->tempat_tanggal_lahir,
            'alamat_lengkap' => $request->alamat_lengkap,
            'departemen' => $request->departemen

        ]);
        return redirect('/bimits/pengurus');
    }
        public function editMahasiswaOlehPengurus($nrp)
    {
        $mahasiswa= DB::table('table_mahasiswa')->where('nrp', $nrp)->get();
        return view('mahasiswa.editOlehPengurus', ['table_mahasiswa' => $mahasiswa]);
    }
    


    public function hapusMahasiswaOlehPengurus($nrp)
    {

        DB::table('table_mahasiswa')->where('nrp', $nrp)->delete();
        return redirect('/bimits/pengurus');
    }


    // fungsi untuk proker


       // fungsi untuk proker oleh ketua

        public function tambahProkerOlehKetua(){
        return view ("proker.tambahOlehKetua");
    }


    public function updateProkerOlehKetua(Request $request)
    {
        DB::table('table_proker')->where('id_proker', $request->id_proker)->update([
            'id_proker' => $request->id_proker,
            'nama_pengurus' => $request->nama_pengurus,
            'nrp_pengurus' => $request->nrp_pengurus,
            'nip' => $request->nip,
            'durasi_dalam_jam' => $request->durasi_dalam_jam,
        ]);
        return redirect('/bimits/ketua');
    }

     public function storeProkerOlehKetua(Request $request)
    {

        DB::table('table_proker')->insert([
            'id_proker' => $request->id_proker,
            'nama_pengurus' => $request->nama_pengurus,
            'nrp_pengurus' => $request->nrp_pengurus,
            'nip' => $request->nip,
            'durasi_dalam_jam' => $request->durasi_dalam_jam,
        ]);
        return redirect('/bimits/ketua');
    }
        public function editProkerOlehKetua($id_proker)
    {
        $proker= DB::table('table_proker')->where('id_proker', $id_proker)->get();
        return view('proker.editOlehKetua', ['table_proker' => $proker]);
    }
    


    public function hapusProkerOlehKetua($id_proker)
    {

        DB::table('table_proker')->where('id_proker', $id_proker)->delete();
        return redirect('/bimits/ketua');
    }



        public function tambahProkerOlehPengurus(){
        return view ("proker.tambahOlehPengurus");
    }

    public function updateProkerOlehPengurus(Request $request)
    {
         DB::table('table_proker')->where('id_proker', $request->id_proker)->update([
            'id_proker' => $request->id_proker,
            'nama_pengurus' => $request->nama_pengurus,
            'nrp_pengurus' => $request->nrp_pengurus,
            'nip' => $request->nip,
            'durasi_dalam_jam' => $request->durasi_dalam_jam,
        ]);
        return redirect('/bimits/pengurus');
    }

     public function storeProkerOlehPengurus(Request $request)
    {

        DB::table('table_mahasiswa')->insert([
            'id_proker' => $request->id_proker,
            'nama_pengurus' => $request->nama_pengurus,
            'nrp_pengurus' => $request->nrp_pengurus,
            'nip' => $request->nip,
            'durasi_dalam_jam' => $request->durasi_dalam_jam,

        ]);
        return redirect('/bimits/pengurus');
    }
        public function editProkerOlehPengurus($id_proker)
    {
       $proker= DB::table('table_proker')->where('id_proker', $id_proker)->get();
        return view('proker.editOlehPengurus', ['table_proker' => $proker]);
    }
    


    public function hapusProkerOlehPengurus($id_proker)
    {

        DB::table('table_proker')->where('id_proker', $id_proker)->delete();
        return redirect('/bimits/pengurus');
    }

}
