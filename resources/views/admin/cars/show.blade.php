@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-white">{{ ucwords($car->modello) }}</h1>
            </div>
            <div class="col-12 d-flex">
                <img width="400
                px" src=" {{ $car->immagine }} ">
                <div>
                    <h5 class="text-white mx-2">Marca: {{ $car->marca }}</h5>
                </div>
                <div>
                    @php
                        $prezzo_totale = $car->prezzo * 100;
                        foreach ($car->optionals as $optional) {
                            $prezzo_totale += $optional->prezzo;
                        }
                    @endphp
                    <h5 class="text-white mx-2">Prezzo: {{ $prezzo_totale }} €</h5>
                </div>
                <div>
                    <h5 class="text-white mx-2">Alimentazione: {{ $car->alimentazione }}</h5>
                </div>
                <div>
                    <h5 class="text-white mx-2">Cilindrata: {{ $car->cilindrata }}</h5>
                </div>
                @if ($car->tipologia)
                    <div>
                        <h5 class="text-white mx-2">Tipologia: {{ $car->tipologia }}</h5>
                    </div>
                @endif
                <div>
                    <h5 class="text-white mx-2">Stato: {{ $car->stato }}</h5>
                </div>
                @if ($car->stato == 'usato')
                    <div>
                        <h5 class="text-white mx-2">Kilometraggio: {{ $car->km }}</h5>
                    </div>
                    <div>
                        <h5 class="text-white mx-2">Immatricolazione: {{ $car->anno_immatricolazione }}</h5>
                    </div>
                @endif
                <div>
                    <h5 class="text-white mx-2">Cambio: {{ $car->cambio }}</h5>
                </div>
                @if ($car->porte)
                    <div>
                        <h5 class="text-white mx-2">Porte: {{ $car->porte }}</h5>
                    </div>
                @endif
                @if ($car->posti)
                    <div>
                        <h5 class="text-white mx-2">Posti: {{ $car->posti }}</h5>
                    </div>
                @endif
                @if ($car->optionals)
                    <div>

                        <h5 class="text-white mx-2">Optional:
                            <br>
                            @forelse ($car->optionals as $optional)
                                {{ $optional->nome }} <br>
                            @empty
                                Nessun optional
                            @endforelse
                        </h5>
                    </div>
                @endif

            </div>
            <a href="{{ route('admin.cars.index') }}" class="btn btn-primary float-end">Torna alle auto</a>
        </div>
    </div>
@endsection
