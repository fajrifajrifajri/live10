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
                    @foreach($dataspecialist as $specialist)
                        <button type="button" class="btn btn-light btn-lg btn-block btn-dokter" data-dokter="{{$specialist['id']}}">
                            {{$specialist['specialist']}} <span class="fas fa-angle-right float-right" aria-hidden="true"></span>
                        </button>
                    @endforeach
                </div>
                <div class="col-lg-9">
                    <div class="row" id="pagi-dokter">
                        @foreach($datadokter as $dokter)
                            <div class="col-lg-4">
                                <img src="{{ asset('img/Female doctor.jpg') }}" class="rounded-circle dokter-img" alt="dokter">
                                <p>{{$dokter['nama']}}</p>
                            </div>
                        @endforeach

                        {{--<div class="col-lg-4">--}}
                            {{--<img src="{{ asset('img/Female doctor.jpg') }}" class="rounded-circle dokter-img" alt="dokter">--}}
                            {{--<p>dr. Lia Damayanti, Sp.PA</p>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-4">--}}
                            {{--<img src="{{ asset('img/Female doctor.jpg') }}" class="rounded-circle dokter-img" alt="dokter">--}}
                            {{--<p>dr. Antonius Hocky Pudjiadi, Sp.A(K)</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-lg-4">--}}
                            {{--<img src="{{ asset('img/Female doctor.jpg') }}" class="rounded-circle dokter-img" alt="dokter">--}}
                            {{--<p>dr. Tessa Miranda Atmaja, Sp.BP-RE</p>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-4">--}}
                            {{--<img src="{{ asset('img/Female doctor.jpg') }}" class="rounded-circle dokter-img" alt="dokter">--}}
                            {{--<p>dr. Lia Damayanti, Sp.PA</p>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-4">--}}
                            {{--<img src="{{ asset('img/Female doctor.jpg') }}" class="rounded-circle dokter-img" alt="dokter">--}}
                            {{--<p>dr. Antonius Hocky Pudjiadi, Sp.A(K)</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection