@extends('layouts.app')

@section('title')
    Jadwal Mingguan | {{ config ('app.name', 'RS Borobudur')}}
@endsection

@section('content')
    <div id="jadwal">
        <div class="container">
            <h1 class="text-center">JADWAL</h1>
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <div id="banner">
                        <h4>RS BOROBUDUR</h4>
                        <p>Jl. Ampera No.37 Pontianak</p>
                        <p>Call Centre : 1500-908</p>
                        <p>IGD & Ambulans Direct Line : 1500-907</p>
                        <p>Business Support : 62-21 2800888 | Fax : 62-21 2800 755</p>
                        <p>Email : administrator@borobudur.hospital</p>
                        <p>Web : rs-borobudur.com</p>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <h4>Find your doctor</h4>
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Specialty
                        </button>
                        <div class="dropdown-menu" id="a" aria-labelledby="dropdownMenuButton">
                            <a href="#a" class="dropdown-item filterdokter">All</a>
                            @foreach($specialist as $data)
                                <a href="#a" class="dropdown-item filterdokter">{{$data['specialist']}}</a>
                            @endforeach
                        </div>
                    </div>
                    <table class="table table-striped table-responsive text-center" id="tbljadwaldokter">
                        <thead>
                            <tr>
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">Specialist</th>
                                <th scope="col">Senin</th>
                                <th scope="col">Selasa</th>
                                <th scope="col">Rabu</th>
                                <th scope="col">Kamis</th>
                                <th scope="col">Jumat</th>
                                <th scope="col">Sabtu</th>
                                <th scope="col">Minggu</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection