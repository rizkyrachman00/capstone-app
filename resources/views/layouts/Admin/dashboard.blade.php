<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('css\Admin\styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    {{-- navbar start --}}
    @include('partials.Admin.navbar')
    {{-- navbar end --}}

    <div id="layoutSidenav">
        {{-- sidenav start --}}
        @include('partials.Admin.sidenav')
        {{-- sidenav end --}}
        <div id="layoutSidenav_content">
            {{-- main start --}}
            <main>
                <div class="container-fluid px-4">
                    <div class="h1 mt-4">@yield('title')</div>
                    <ol class="breadcrumb">
                        @yield('breadcrumbs')
                    </ol>
                    @yield('content')
                </div>
            </main>
            {{-- main end --}}
            @include('partials.Admin.footer')
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
        </script>
        <script src="{{ asset('Js\Admin\scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
            crossorigin="anonymous"></script>

</body>
