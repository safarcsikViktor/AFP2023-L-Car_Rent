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
                <img src="/kepek/audia4.png" alt="Audi A4" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Audi A4</h5>
                    <p class="card-text">
                        Az Audi A4 egy elegáns és stílusos autó, amely tökéletes választás minden alkalomra.
                        Bérelje ki most és élvezze a vezetés élményét!
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card car-card">
                <img src="/kepek/merci.png" alt="Mercedes-Benz C-Class" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Mercedes-Benz C-Class</h5>
                    <p class="card-text">
                        A Mercedes-Benz C-Class luxusautója egyedülállóan kombinálja az eleganciát és a teljesítményt.
                        Ne hagyja ki ezt a kivételes autót!
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
