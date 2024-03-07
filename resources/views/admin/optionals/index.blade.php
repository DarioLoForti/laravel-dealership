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
                                            <a class="nav-link align-middle px-0" href="{{ url('/') }}">{{ __('Home') }}
                                                
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
                                        <li class="w-100">
                                            <a href="{{ route('admin.optionals.index') }}" class="nav-link px-0">
                                                <span class="d-none d-sm-inline">Elenco Optionals</span></a>
                                        </li>
                                        <li class="w-100">
                                            <a href="{{ route('admin.optionals.create') }}" class="nav-link px-0">
                                                <span class="d-none d-sm-inline">Aggiungi nuovo Optional</span></a>
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
                                                <th>NOME</th>
                                                <th>DESCRIZIONE</th>
                                                <th>PREZZO</th>
                                                <th>TOOLS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($optionals as $optional)
                                                <tr>
                                                    <td>{{ $optional->id }}</td>
                                                    <td>{{ $optional->nome }}</td>
                                                    <td> {{ Str::limit($optional->descrizione, 40, '...') }}</td>
                                                    <td>&euro;{{ $optional->prezzo }}</td>
                                                
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="{{ route('admin.optionals.edit', ['optional' => $optional->id]) }}"
                                                                class="mx-1">
                                                                <button class="btn btn-sm btn-square btn-warning"><i
                                                                        class="fa-regular fa-pen-to-square"
                                                                        style="color: #ffffff;"></i></button></a>
                                                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                                data-bs-target="#modal_delete_{{ $optional->id }}"><i
                                                                    class="fa-solid fa-trash"
                                                                    style="color:#ffffff;"></i></button>
                                                            @include('admin.optionals.modal')
                                                        </div>

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
