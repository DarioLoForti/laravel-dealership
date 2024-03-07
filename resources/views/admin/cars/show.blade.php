@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-4">
                <h1 class="text-white">{{ ucwords($car->modello) }}</h1>
            </div>
            <div>
                <img width="400px" src="{{ asset('storage/' . $car->immagine) }}">
            </div>
            <div class="mt-4 col-6  justify-content-center ">
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
                    <span class="text-white mx-2">Marca: {{ $car->brand->nome }}</span>
                </div>
                <div>
                    <span class="text-white mx-2">Alimentazione: {{ $car->alimentazione }}</span>
                </div>
                <div>
                    <span class="text-white mx-2">Cilindrata: {{ $car->cilindrata }}</span>
                </div>
                @if ($car->tipologia)
                    <div>
                        <span class="text-white mx-2">Tipologia: {{ $car->tipologia }}</span>
                    </div>
                @endif
                <div>
                    <span class="text-white mx-2">Stato: {{ $car->stato }}</span>
                </div>
                @if ($car->stato == 'usato')
                    <div>
                        <span class="text-white mx-2">Kilometraggio: {{ $car->km }}</span>
                    </div>
                    <div>
                        <span class="text-white mx-2">Immatricolazione: {{ $car->anno_immatricolazione }}</span>
                    </div>
                @endif
                <div>
                    <span class="text-white mx-2">Cambio: {{ $car->cambio }}</span>
                </div>
                @if ($car->porte)
                    <div>
                        <span class="text-white mx-2">Porte: {{ $car->porte }}</span>
                    </div>
                @endif
                @if ($car->posti)
                    <div>
                        <span class="text-white mx-2">Posti: {{ $car->posti }}</span>
                    </div>
                @endif
                @if ($car->optionals)
                    <div>

                        <span class="text-white mx-2">Optional:

                            @forelse ($car->optionals as $optional)
                                {{ $optional->nome }} <br>
                            @empty

                                Nessun optional
                            @endforelse
                        </span>
                    </div>
                @endif
            </div>
            <div class="row mt-4">

                <div class=" col-6">
                    <button class="btn btn-primary"><a href="{{ route('admin.cars.index') }}"></a>Torna alle auto</button>
                </div>
                <div class=" text-end col-6">
                    <a href="{{ route('admin.cars.edit', ['car' => $car->id]) }}" class="mx-1">
                        <button class="btn btn-sm btn-square btn-warning">Modifica</button></a>
                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                        data-bs-target="#modal_delete_{{ $car->id }}">Elimina</button>
                    @include('admin.cars.modal')
                </div>
            </div>
        </div>
    </div>
@endsection
