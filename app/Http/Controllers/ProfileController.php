<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{

    public function insert(Request $request)
    {
        // insert data ke table pegawai
        DB::table('profile')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/profile');
     



}
public function pemesanan()
{
    // mengambil data dari table pegawai
    $profile = DB::table('profile')->get();

    // mengirim data pegawai ke view index
    return view('pemesanan.pemesanan',['profile' => $profile]);

}
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('profile')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/pemesanan');
}

public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$profile = DB::table('profile')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('pemesanan.edit',['profile' => $profile]);
 
}


public function update(Request $request)
{
	DB::table('profile')->where('id',$request->id)->update([
        'nama' => $request->nama,
        'email' => $request->email,
        'no_hp' => $request->no_hp,
        'alamat' => $request->alamat,
        
	]);
	// alihkan halaman ke halaman 
	return redirect('/pemesanan');
}
};
