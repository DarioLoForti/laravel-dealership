@extends('layouts.admin')

@section('content')
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12 d-flex">
                <div class="col-2">
                    <div class="container-fluid">
                        <div class="row flex-nowrap">
                            <div class="mt-5 vh-100 col-12 px-sm-2 px-0 bg-dark">
                                <div
                                    class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                                    <a href="/"
                                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                                    </a>
                                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                                        id="menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link align-middle px-0">
                                                <i class="fs-4 bi-house"></i> <span
                                                    class="ms-1 d-none d-sm-inline">Home</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.dashboard') }}" class="nav-link px-0">
                                                <span class="d-none d-sm-inline">Dashboard</span></a>
                                        <li class="w-100">
                                            <a href="{{ route('admin.cars.index') }}" class="nav-link px-0">
                                                <span class="d-none d-sm-inline">Raccolta Automobili</span></a>
                                        </li>
                                        <li class="w-100">
                                            <a href="{{ route('admin.cars.create') }}" class="nav-link px-0">
                                                <span class="d-none d-sm-inline">Aggiungi nuova Automobile</span></a>
                                        </li>
                                        <li class="w-100">
                                            <a href="{{ route('admin.brands.index') }}" class="nav-link px-0">
                                                <span class="d-none d-sm-inline">Raccolta Brand</span></a>
                                        </li>
                                        <li class="w-100">
                                            <a href="{{ route('admin.brands.create') }}" class="nav-link px-0">
                                                <span class="d-none d-sm-inline">Aggiungi nuovo Brand</span></a>
                                        </li>
                                        </li>
                                    </ul>
                                    <hr>
                                    <div class="dropdown pb-4">
                                        <a href="#"
                                            class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30"
                                                height="30" class="rounded-circle">
                                            <span class="d-none d-sm-inline mx-1">loser</span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                            <li><a class="dropdown-item" href="#">New car...</a></li>
                                            <li><a class="dropdown-item" href="#">Settings</a></li>
                                            <li><a class="dropdown-item" href="#">Profile</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10">
                    <div class="container-fluid vh-100">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center text-white mt-3">Le Nostre Auto</h2>
                            </div>
                            <div class="row">
                                <div class="col-12 table-responsive ">
                                    <table class=" table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Marca</th>
                                                <th>Modello</th>
                                                <th>Prezzo</th>
                                                <th>Alimentazione</th>
                                                <th>Cilindrata</th>
                                                <th>Cambio</th>
                                                <th>Porte</th>
                                                <th>Posti</th>
                                                <th>Tipologia</th>
                                                <th>Stato</th>
                                                <th>Anno_immatricolazione</th>
                                                <th>Km</th>
                                                <th>Immagine</th>
                                                <th>Optional</th>
                                                <th>Tools</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cars as $car)
                                                <tr>
                                                    <td>{{ $car->id }}</td>
                                                    <td>{{ $car->marca }}</td>
                                                    <td>{{ $car->modello }}</td>
                                                    <td>
                                                        @php
                                                            $prezzo_totale = $car->prezzo;
                                                            foreach ($car->optionals as $optional) {
                                                                $prezzo_totale += $optional->prezzo;
                                                            }
                                                        @endphp
                                                        {{ $prezzo_totale }}
                                                    </td>
                                                    <td>{{ $car->alimentazione }}</td>
                                                    <td>{{ $car->cilindrata }}</td>
                                                    <td>{{ $car->cambio }}</td>
                                                    <td>{{ $car->porte }}</td>
                                                    <td>{{ $car->posti }}</td>
                                                    <td>{{ $car->tipologia }}</td>
                                                    <td>{{ $car->stato }}</td>
                                                    <td>{{ $car->anno_immatricolazione }}</td>
                                                    <td>{{ $car->km }}</td>
                                                    <td>{{ Str::limit($car->immagine, 20, '...') }}</td>
                                                    <td>
                                                        @forelse ($car->optionals as $optional)
                                                            #{{ $optional->nome }}
                                                        @empty
                                                            nessun optional
                                                        @endforelse
                                                    </td>
                                                    <td><a href="{{ route('admin.cars.show', ['car' => $car->id]) }}"
                                                            class="btn btn-sm btn-primary">dettagli</a>
                                                        <a href="{{ route('admin.cars.edit', ['car' => $car->id]) }}"
                                                            class="btn btn-sm btn-primary">modifica</a>

                                                        <button class="btn btn-sm btn-danger mt-3" data-bs-toggle="modal"
                                                            data-bs-target="#modal_delete_{{ $car->id }}">Elimina</button>
                                                        @include('admin.cars.modal')

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
