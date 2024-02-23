@extends('layout.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ ucwords($car->modello) }}</h1>
            </div>
            <div class="col-12 d-flex">
                <img src=" {{ $car->immagine }} ">
                <div>
                    Marca:  {{ $car->marca }}
                </div>
                <div>
                    Prezzo:  {{ $car->prezzo*1000 }} $ 
                </div>
                <div>
                    Alimentazione:  {{ $car->alimentazione }}
                </div>
                <div>
                    Cilindrata:  {{ $car->cilindrata }}
                </div>
                @if($car->tipologia)
                <div>
                    Tipologia:  {{ $car->tipologia }}
                </div>
                @endif
                <div>
                    Stato:  {{ $car->stato }}
                </div>
                @if($car->stato=='usato')
                <div>
                    Kilometraggio:  {{ $car->km }}
                </div>
                <div>
                    Immatricolazione:  {{ $car->anno_immatricolazione }}
                </div>
                @endif
                <div>
                    Cambio:  {{ $car->cambio }}
                </div>
                @if($car->porte)
                <div>
                    Porte:  {{ $car->porte }}
                </div>
                @endif
                @if($car->posti)
                <div>
                    Posti:  {{ $car->posti }}
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection