<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('vaccine.index')}}">Vakcinák</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('shipment.index')}}">Szállítmányok</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.registrations')}}">Regisztrációk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-logout" href="#">Kilépés</a>
            </li>
        </ul>
    </div>
</nav>
