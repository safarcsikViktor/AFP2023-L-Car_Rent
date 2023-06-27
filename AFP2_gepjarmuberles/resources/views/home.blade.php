@extends('layouts.app')

@section('content')
   <h1>Autóbérlés</h1>
    <p>
    Cégünk 10 éve foglalkozik autóbérléssel. A jelenleg elérhető autóinkat megtekintheti
    az fenti menükön.
    </p>

    <h2>Autóink különleges ajánlatai</h2>
    <p>
        Ismerje meg autóink különleges ajánlatait és találja meg az ideális autót utazásához vagy üzleti célokra.
    </p>

    <div class="row">
        <div class="col-md-6">
            <div class="card car-card">
                <div class="ratio ratio-16x9">
                    <img src="{{ asset('kepek/audia4.png') }}" alt="Audi A4" class="card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Audi A4</h5>
                    <p class="card-text">
                        Az Audi A4 elegáns autó, amely garantálja az exkluzív vezetési élményt.
                        Kifinomult belső térrel és modern technológiával rendelkezik.
                        Élvezze a dinamikus vezetést és a luxus érzését!
                    </p>
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
                    <p class="card-text">
                        A Mercedes-Benz luxusautója egyedülállóan kombinálja az eleganciát és a teljesítményt.
                        Bérelje ki most és élvezze a vezetés élményét a magas színvonalú kényelemmel!
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
