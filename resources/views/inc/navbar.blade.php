<nav id="navbar-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <ul>
                    <li>
                        <a href="#" aria-label="facebook">
                            <span class="fab fa-facebook text-white" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" aria-label="twitter">
                            <span class="fab fa-twitter text-white" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" aria-label="linkedin">
                            <span class="fab fa-linkedin text-white" aria-hidden="true"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul>
                    <li>
                        <span class="fas fa-phone" aria-hidden="true"></span>
                        <span><span class="clr-pnk">+0561</span>-744959 5</span>
                    </li>
                    <li>
                        <span class="fas fa-mail-bulk"></span>
                        <span>administrator@borobudur.hospital</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<nav id="navbar-bottom" class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('img/Borobudur logo full.png') }}" class="navbar-img" alt="logo"/></a>
            
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li>
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('jadwal') }}">Jadwal</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('dokter') }}">Dokter</a>
                </li>
                <li>
                    <div id="paralleogram"></div>
                    <a class="nav-link" href="{{ route('janji') }}">Buat Janji</a>
                </li>
            </ul>
        </div>
    </div>
</nav>