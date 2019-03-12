@extends('layouts.app')

@section('title')
    Dokter | {{ config ('app.name', 'RS Borobudur')}}
@endsection

@section('content')
    <div id="dokter">
        <div class="container">
            <h1 class="text-center">DOKTER</h1>
            <div class="row">
                <div class="col-lg-3">
                    <button type="button" class="btn btn-light btn-lg btn-block btn-dokter" data-dokter="all">
                        Semua <span class="fas fa-angle-right float-right" aria-hidden="true"></span>
                    </button>
                    @foreach($dataspecialist as $specialist)
                        <button type="button" class="btn btn-light btn-lg btn-block btn-dokter" data-dokter="{{$specialist['id']}}">
                            {{$specialist['specialist']}} <span class="fas fa-angle-right float-right" aria-hidden="true"></span>
                        </button>
                    @endforeach
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        @foreach($datadokter as $dokter)
                            <div class="col-lg-4 dokter dokter{{$dokter['specialist']}}" >
                                <img src="{{ asset('img/Female doctor.jpg')}}" class="rounded-circle dokter-img" alt="dokter">
                                <p>{{$dokter['nama']}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection