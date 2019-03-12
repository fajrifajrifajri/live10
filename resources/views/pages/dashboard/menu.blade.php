<div id="menu">
    <a href="{{ route('dashboard') }}"><span class="fas fa-tachometer-alt" aria-hidden="true"></span> DASHBOARD</a>
    <a id="accordionExample" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <span class="fas fa-cube" aria-hidden="true"></span> APLIKASI
    </a>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <a href="{{ route('dashboard-janji') }}">JANJI DOKTER</a>
        <a href="{{ route('dashboard-jadwal') }}">JADWAL MINGGUAN</a>
        <a href="{{ route('dashboard-dokter') }}">NAMA DOKTER</a>
    </div>
    <a href="{{url('/logout')}}"><span class="fas fa-sign-out-alt" aria-hidden="true"></span> LOGOUT</a>
</div>