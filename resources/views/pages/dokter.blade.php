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
                    @foreach($list_dokter as $listdokter)
                        <button type="button" class="btn btn-light btn-lg btn-block btn-dokter" data-dokter="{{$listdokter['id']}}">
                            {{$listdokter['spesialist']}} <span class="fas fa-angle-right float-right" aria-hidden="true"></span>
                        </button>
                    @endforeach
                </div>
                <div class="col-lg-9">
                    <span id="asd"> </span>
                    <div class="row">
                        @foreach($dokter as $list)
                            <div class="col-lg-4 dokter dokter{{$list['spesialis']}}" >
                                <img src="{{ $list['foto']}}" class="rounded-circle dokter-img" alt="dokter">
                                <p>{{$list['nama_dokter']}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection