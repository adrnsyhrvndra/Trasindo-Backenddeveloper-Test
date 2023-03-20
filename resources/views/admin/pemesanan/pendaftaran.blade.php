@extends('admin.formpemesanan')

@section('formpemesanan')

    <section class="login-content">

        <div class="row m-0 align-items-center bg-white vh-100">

            <div class="col-md-12">

                <div class="row justify-content-center">

                    <div class="col-md-10">

                        <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">

                            <div class="card-body">

                                <h2 class="mb-2 text-center">Halaman Pendaftaran</h2>

                                <p class="text-center">Silahkan untuk mendaftar.</p>

                                <form method="POST" action="{{ route('daftar') }}">

                                    @csrf

                                    <div class="row justify-content-center">

                                        <div class="col-lg-10">
                                            <div class="form-group">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    aria-describedby="name" placeholder=" ">
                                            </div>
                                        </div>

                                        <div class="col-lg-10">
                                            <div class="form-group">
                                                <label class="form-label" for="alamat">Alamat</label>
                                                <textarea class="form-control" name="alamat" id="alamat" rows="2"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label for="text" class="form-label">NomorID</label>
                                                <input type="no_id" class="form-control" name="no_id" id="no_id"
                                                    aria-describedby="no_id" placeholder="" value="{{ $kode_inv_jadi }}" readonly>
                                            </div>
                                        </div>

                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    aria-describedby="email" placeholder=" ">
                                            </div>
                                        </div>

                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" name="password" id="password"
                                                    aria-describedby="password" placeholder=" ">
                                            </div>
                                        </div>

                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label for="no_telp" class="form-label">No Telepon</label>
                                                <input type="text" class="form-control" name="no_telp" id="no_telp"
                                                    aria-describedby="no_telp" placeholder=" ">
                                            </div>
                                        </div>

                                        <div class="col-lg-10 d-flex justify-content-between">

                                            <div class="form-check mb-3">

                                                <input name="remember" type="checkbox" class="form-check-input" id="customCheck1">

                                                <label class="form-check-label" for="customCheck1">Remember Me</label>

                                            </div>

                                            <a href="{{ route('login') }}">Sudah Punya Akun?</a>

                                        </div>

                                    </div>

                                    <div class="d-flex justify-content-center">

                                        <input type="submit" class="btn btn-primary" value="Daftar"/>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
