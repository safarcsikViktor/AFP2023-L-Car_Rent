@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Autóbérlés</h1>
                <p class="lead">Cégünk 10 éve foglalkozik autóbérléssel. A jelenleg elérhető autóinkat megtekintheti az fenti menükön.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card car-card">

                    <div class="ratio ratio-16x9">
                        <img src="{{ asset('kepek/audia4.png') }}" alt="Audi A4" class="card-img-top">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Audi A4</h5>
                        <p class="card-text">Az Audi A4 elegáns autó, amely garantálja az exkluzív vezetési élményt. Kifinomult belső térrel és modern technológiával rendelkezik. Élvezze a dinamikus vezetést és a luxus érzését!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card car-card">

                    <div class="ratio ratio-16x9">
                        <img src="{{ asset('kepek/merci.png') }}" alt="Mercedes-Benz C-Class" class="card-img-top">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Mercedes-Benz C-Class</h5>
                        <p class="card-text">A Mercedes-Benz luxusautója egyedülállóan kombinálja az eleganciát és a teljesítményt. Bérelje ki most és élvezze a vezetés élményét a magas színvonalú kényelemmel!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature text-left">   <h2>Amit kínálunk</h2></div>
        <div class="row">
            <div class="col-md-4">
                <div class="card feature-card text-center">
                    <div class="card-body">
                        <i class="fas fa-car fa-3x"></i>
                        <h4 class="card-title">Széles választék</h4>
                        <p class="card-text">Többféle autóból választhat az ízlésének és preferenciáinak megfelelően.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card text-center">
                    <div class="card-body">
                        <i class="fas fa-check fa-3x"></i>
                        <h4 class="card-title">Gyors és egyszerű foglalás</h4>
                        <p class="card-text">Pár kattintással könnyedén lefoglalhatja az autót.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card text-center">
                    <div class="card-body">
                        <i class="fas fa-star fa-3x"></i>
                        <h4 class="card-title">Kiváló minőség</h4>
                        <p class="card-text">Magas színvonalú autóinkkal garantáljuk a megfelelő élményt.</p>
                    </div>
                </div>
            </div>
        </div>

   <div class="feature text-left">   <h2>Vélemények</h2></div>
        <div class="row">
            <div class="col-md-6">
                <div class="testimonial text-center">
                    <img width="80px" src="{{ asset('kepek/user1.png') }}" alt="Vásárlói vélemény">
                    <p class="testimonial-text">"Nagyon elégedett voltam az autóval és a szolgáltatással. Biztosan újra bérelnék!"</p>
                    <h4>Anna K.</h4>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonial text-center">
                    <img width="80px" src="{{ asset('kepek/user2.png') }}" alt="Vásárlói vélemény">
                    <p class="testimonial-text">"Kiváló választék, kedvező árak és barátságos személyzet. Csak ajánlani tudom!"</p>
                    <h4>Péter N.</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
