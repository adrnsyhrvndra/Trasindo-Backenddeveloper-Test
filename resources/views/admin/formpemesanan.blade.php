<!doctype html>

<html lang="en" dir="ltr">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Trasindo Test Backend</title>

    <!-- Library / Plugin Css Build -->

    <link rel="stylesheet" href="{{ asset('template/assets/css/core/libs.min.css') }}" />

    <!-- Hope Ui Design System Css -->

    <link rel="stylesheet" href="{{ asset('template/assets/css/hope-ui.min.css?v=1.2.0') }}" />

    <!-- Custom Css -->

    <link rel="stylesheet" href="{{ asset('template/assets/css/custom.min.css?v=1.2.0') }}" />

    <!-- Dark Css -->

    <link rel="stylesheet" href="{{ asset('template/assets/css/dark.min.css') }}" />

    <!-- Customizer Css -->

    <link rel="stylesheet" href="{{ asset('template/assets/css/customizer.min.css') }}" />

    <!-- RTL Css -->

    <link rel="stylesheet" href="{{ asset('template/assets/css/rtl.min.css') }}" />

    <!-- Jquery -->

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

    <!-- Toastr CSS -->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

</head>

<body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">

    <!-- loader Start -->

    <div id="loading">

        <div class="loader simple-loader">

            <div class="loader-body"></div>

        </div>

    </div>

    <div class="wrapper">

        @yield('formpemesanan')

    </div>

    <!-- Library Bundle Script -->
    <script src="{{ asset('template/assets/js/core/libs.min.js') }}"></script>

    <!-- External Library Bundle Script -->
    <script src="{{ asset('template/assets/js/core/external.min.js') }}"></script>

    <!-- Widgetchart Script -->
    <script src="{{ asset('template/assets/js/charts/widgetcharts.js') }}"></script>

    <!-- mapchart Script -->
    <script src="{{ asset('template/assets/js/charts/vectore-chart.js') }}"></script>
    <script src="{{ asset('template/assets/js/charts/dashboard.js') }}"></script>

    <!-- fslightbox Script -->
    <script src="{{ asset('template/assets/js/plugins/fslightbox.js') }}"></script>

    <!-- Settings Script -->
    <script src="{{ asset('template/assets/js/plugins/setting.js') }}"></script>

    <!-- Slider-tab Script -->
    <script src="{{ asset('template/assets/js/plugins/slider-tabs.js') }}"></script>

    <!-- Form Wizard Script -->
    <script src="{{ asset('template/assets/js/plugins/form-wizard.js') }}"></script>

    <!-- AOS Animation Plugin-->

    <!-- App Script -->
    <script src="{{ asset('template/assets/js/hope-ui.js') }}" defer></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Toastr js-->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>

        @if(Session::has('message'))

        var type = "{{ Session::get('alert-type','info') }}"

        switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
        }

        @endif

    </script>

</body>

</html>
