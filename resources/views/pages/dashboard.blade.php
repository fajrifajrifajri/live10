<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard | {{ config ('app.name', 'RS Borobudur')}}</title>
    @include('layouts.css')
</head>
<body id="dashboard">
    <nav>
        <img src="{{ asset('img/Borobudur logo.png') }}" alt="borobudur logo">
    </nav>
    <main class="row">
        <div class="col-lg-2">
            <div id="profile">
                <img src="{{ asset('img/Female doctor.jpg') }}" class="rounded-circle dokter-img" alt="dokter">
                <p>{{Session::get('user')}}</p>
            </div>
            <div id="menu">
                <a href="">DASHBOARD</a>
                <a href="">JANJI DOKTER</a>
                <a href="{{url('/logout')}}">LOGOUT</a>
            </div>
        </div>
        <div class="col-lg-10">
            <table class="table table-striped text-center table-responsive">
                <thead>
                    <tr>
                    <th scope="col">No. Telpon</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Nama Dokter</th>
                    <th scope="col">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">+62 8139521121</th>
                    <td>ria2@gmail.com</td>
                    <td>Ria Rahmawaati</td>
                    <td>05-12-19870</td>
                    <td>Agus Wicaksono</td>
                    <td>29-03-2019</td>
                    </tr>
                    <tr>
                    <th scope="row">+62 8139521121</th>
                    <td>ria2@gmail.com</td>
                    <td>Ria Rahmawaati</td>
                    <td>05-12-19870</td>
                    <td>Agus Wicaksono</td>
                    <td>29-03-2019</td>
                    </tr>
                    <tr>
                    <th scope="row">+62 8139521121</th>
                    <td>ria2@gmail.com</td>
                    <td>Ria Rahmawaati</td>
                    <td>05-12-19870</td>
                    <td>Agus Wicaksono</td>
                    <td>29-03-2019</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <footer id="footer-bottom">
        <div class="container">
            <div>Copyright 2019. All rights reserved | Rumah Sakit Borobudur</div>
            <div class="float-lg-right">Designed by <span>Jasbuweb.com</span></div>
        </div>
    </footer>
    @include('layouts.scripts')
</body>
</html>
    