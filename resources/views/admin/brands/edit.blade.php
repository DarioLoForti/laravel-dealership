@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-white my-4">Modifica un brand:</h2>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.brands.update', $brand->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                
                    <div class="form-group mb-3">
                        <label class="text-white" for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome del Brand"
                            value="{{ $brand->nome }}">
                        @error('nome')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group mb-3">
                        <label class="text-white" for="indirizzo">Indirizzo:</label>
                        <input type="text" class="form-control" name="indirizzo" id="indirizzo" placeholder="Sede del Brand"
                            value="{{ $brand->indirizzo }}">
                        @error('indirizzo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label class="text-white" for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email del Brand"
                            value="{{ $brand->email }}">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label class="text-white" for="sito_web">Sito</label>
                        <input type="text" class="form-control" name="sito_web" id="sito_web" placeholder="Sito Web del Brand"
                            value="{{ $brand->sito_web }}">
                        @error('sito_web')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label class="text-white" for="telefono">telefono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Numero di Telefono del Brand"
                            value="{{ $brand->telefono }}">
                        @error('telefono')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label class="text-white" for="tipologia">Macchine</label>
                        <input type="text" class="form-control" name="tipologia" id="tipologia" placeholder="Tipologia di Macchine del Brand"
                            value="{{ $brand->tipologia }}">
                        @error('tipologia')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label class="text-white" for="nazione">Nazione</label>
                        <input type="text" class="form-control" name="nazione" id="nazione" placeholder="Nazione di Origine del Brand"
                            value="{{ $brand->nazione }}">
                        @error('nazione')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
