@extends('layouts.app')

@section('title')
    Selamat Datang di {{ config ('app.name', 'RS Borobudur')}}
@endsection

@section('content')
    <header class="jumbotron">
    </header>

    <main id="about">
        <div class="container">
            <div>
                <h2 class="text-center">Selamat datang di RS Borobudur</h2>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <h5>Borobudur Medical Service</h5>
                    <p>We are a provider of professional Occupational Health Services and Specialist Medicals.</p>
                    <p>
                        We aim to offer a bespoke and highly personalised service to all of our clients irrespective 
                        of whether they are an individual or a large multinational corporation. 
                    </p>
                    <p>
                        Based adjacent to 
                        Heathrow Airport, our team have built a  reputation of excellence in providing a comprehensive 
                        range of occupational health services and specialist  medicals – for aircrew, airport and oil 
                        and gas employees and immigration.
                    </p>
                </div>
                <div class="offset-lg-1 col-lg-6">
                    <img src="{{ asset('img/Female doctor.jpg') }}" alt="dokter perempuan">
                </div>
            </div>
        </div>
    </main>

    <section id="sponsors">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset('img/Bpjs.jpg') }}" alt="bpjs">
                </div>
                <div class="col-lg-2">
                    <img src="{{ asset('img/Jkn.jpg') }}" alt="jkn">
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('img/Jamsostek.jpg') }}" alt="jamsostek">
                </div>
            </div>
        </div>
    </section>

    <section id="line">
        <h4> BUTUH PEMERIKSAAN DOKTER? </h4>
        <h1> DAFTAR SEKARANG UNTUK BEROBAT DI RS. BOROBUDUR </h1>
        <a href="{{ route('nomor')}}" class="btn"> AMBIL NOMOR </a>
    </section>

    <section id="review">
        <h3> Apa kata mereka tentang Rumah Sakit Borobudur? </h3>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="{{ asset('img/Female doctor.jpg') }}" class="rounded-circle review-img" alt="dokter">
                <p>
                    Tempatnya bagus bersih dengan lokasi yang strategis membuat saya langsung memutuskan mutase faskes saya ke 
                    Rumah Sakit Borobudur. Ketika saya periksa ke poli giginya pun ternyata  perbedaan hasilnya jauh jika 
                    dibandingkan dengan  Rumah Sakit sebelumnya, Rumah Sakit Borobudur lebih bagus fasilitas dan layanannya.
                </p>
                <p>
                    - Mamak Kau
                </p>
            </div>
            <div class="item">
                <img src="{{ asset('img/Female doctor.jpg') }}" class="rounded-circle review-img" alt="dokter">
                <p>
                    Tempatnya bagus bersih dengan lokasi yang strategis membuat saya langsung memutuskan mutase faskes saya ke 
                    Rumah Sakit Borobudur. Ketika saya periksa ke poli giginya pun ternyata  perbedaan hasilnya jauh jika 
                    dibandingkan dengan  Rumah Sakit sebelumnya, Rumah Sakit Borobudur lebih bagus fasilitas dan layanannya.
                </p>
                <p>
                    - Mamak Kau
                </p>
            </div>
        </div>
    </section>
@endsection