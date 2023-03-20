@extends('admin.index')

@section('content')

@php

$id = Auth::user()->id;

$userid = App\Models\User::find($id);

$name = $userid->name;

@endphp

    <div class="position-relative iq-banner">

        <!--Nav Start-->

        <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">

            <div class="container-fluid navbar-inner">

                <a href="../dashboard/index.html" class="navbar-brand">

                    <h4 class="logo-title">Form Invoice</h4>

                </a>

                <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">

                    <i class="icon">

                        <svg width="20px" height="20px" viewBox="0 0 24 24">

                            <path fill="currentColor"

                                d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />

                        </svg>

                    </i>

                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <span class="mt-2 navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">

                        <li class="nav-item dropdown">

                            <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                <div class="caption ms-3 d-none d-md-block ">

                                    <h6 class="mb-0 caption-title">Settings</h6>

                                </div>

                            </a>

                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                <li>

                                    <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>

                                </li>

                                <li>

                                    <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>

                                </li>

                            </ul>

                        </li>

                    </ul>

                </div>

            </div>

        </nav> <!-- Nav Header Component Start -->

        <div class="iq-navbar-header" style="height: 105px;">
            <div class="container-fluid iq-container">
                <div class="row">

            </div>
            <div class="iq-header-img">
                <img src="../assets/images/dashboard/top-header.png" alt="header"
                    class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
                <img src="../assets/images/dashboard/top-header1.png" alt="header"
                    class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
                <img src="../assets/images/dashboard/top-header2.png" alt="header"
                    class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
                <img src="../assets/images/dashboard/top-header3.png" alt="header"
                    class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
                <img src="../assets/images/dashboard/top-header4.png" alt="header"
                    class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
                <img src="../assets/images/dashboard/top-header5.png" alt="header"
                    class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
            </div>
        </div> <!-- Nav Header Component End -->
        <!--Nav End-->
    </div>

    <div class="conatiner-fluid content-inner mt-n5 py-0">

        <div class="row">

            <div class="col-lg-12">

                <div class="card rounded">

                    <div class="card-body">

                        <div class="row">

                            <div class="col-sm-12">

                                <h4 class="mb-2">Invoice of {{ $name }} - Harap Di Screenshot</h4>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-12 mt-4">

                                <div class="table-responsive-lg">

                                    <table class="table">

                                        <thead>

                                            <tr>

                                                <th scope="col">Item</th>

                                                <th class="text-center" scope="col">Price</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            <tr>
                                                <td>

                                                    <h6 class="mb-0">Funfest</h6>

                                                    <p class="mb-0">Festifal

                                                    </p>

                                                </td>

                                                <td class="text-center">900000</td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
