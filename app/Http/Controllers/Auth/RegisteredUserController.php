<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller{

    public function create(): View{

        return view('admin.pemesanan.pendaftaran');

    }

    public function store(Request $request): RedirectResponse{

        $user = User::create([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'no_id' => $request->no_id,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'password' => Hash::make($request->password)
        ]);

        event(new Registered($user));

        Auth::login($user);

        $notification = array(

            'message' => 'Pendafataran Added Successful',

            'alert-type' => 'success'

        );

        return redirect(RouteServiceProvider::HOME)->with($notification);

    }

}
