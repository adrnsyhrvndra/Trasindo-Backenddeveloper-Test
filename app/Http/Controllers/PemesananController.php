<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller{

    public function index(){

        $q = DB::table('users')->select(DB::raw('MAX(RIGHT("no_id",4)) as noid',FALSE));

        $kd = "";

        if( $q->count() != 0){

            $data = $q->count();

            $autokode = intval($data)+1;

        }
        else{

            $autokode = 1;

        }

        $kode_inv_max = str_pad($autokode,4,"0",STR_PAD_LEFT);

		$kode_inv_jadi = "INV" .$kode_inv_max;

        return view('admin.pemesanan.pendaftaran',compact('kode_inv_jadi','q'));

    }

    public function login(){

        return view('admin.pemesanan.pendaftaran');

    }

    public function HalamanPemesananDaftar(){

        return view('user.index');

    }

    public function HalamanDataPemesanan(){

        $userData = User::where('role','user')->get();

        return view('admin.pemesanan.datapemesanan',compact('userData'));

    }

    public function HalamanFormPengecekanId(){

        return view('admin.pemesanan.formpengecekannoid');

    }

    public function HalamanPenonton(){

        $userData = User::where('role','user')->get();

        return view('admin.pemesanan.datapenonton',compact('userData'));

    }

    public function logout(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(

            'message' => 'Logout Successfuly',

            'alert-type' => 'info'

        );

        return redirect()->route('login')->with($notification);

    }

    public function SearchNoId(Request $request){

        $item = $request->no_id;

        $noid_search = User::where('status', 'inactive')->where('no_id',$item)->first();

        // Jika tiket tidak ditemukan, tampilkan pesan kesalahan

        if (!$noid_search) {

            $notification = array(

                'message' => 'No Id Tidak Ditemukan',

                'alert-type' => 'danger'

            );

            return redirect()->route('data.formpengecekannoid')->with($notification);

        }

        return view('admin.pemesanan.tampilpengecekannoid',compact('item','noid_search'));

    }

    public function ActivatedPenonton($id){

        User::findOrFail($id)->update([

            'status' => 'active',

        ]);

        $notification = array(

            'message' => 'Activated Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->route('data.formpengecekannoid')->with($notification);

    }

    public function EditDataPemesanan($id){

        $pemesanan = User::findOrFail($id);

        return view('admin.pemesanan.editdatapemesanan',compact('pemesanan'));

    }

    public function UpdatePemesanan(Request $request){

        $id_user = $request->id;

        User::findOrFail($id_user)->update([

            'name' => $request->name,
            'alamat' => $request->alamat,
            'no_id' => $request->no_id,
            'email' => $request->email,
            'no_telp' => $request->no_telp,

        ]);

        $notification = array(

            'message' => 'Data Pemesanan Updated Successful',

            'alert-type' => 'success'

        );

        return redirect()->route('data.pemesanan')->with($notification);

    }

    public function DeleteDataPemesanan($id){

        User::findOrFail($id)->delete();

        $notification = array(

            'pesanNotif' => 'User Deleted Successful',

            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);

    }

}
