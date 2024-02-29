@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                <h2 class="text-center text-white my-4">Aggiungi un nuovo brand</h2>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.brands.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="text-white" for="nome">Nome Brand</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="nome d'auto"
                            value="{{ old('nome') }}" required>
                        @error('nome')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-white" for="indirizzo">indirizzo</label>
                        <input type="text" class="form-control" name="indirizzo" id="indirizzo" placeholder="indirizzo"
                            value="{{ old('indirizzo') }}" required>
                        @error('indirizzo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label class="text-white" for="mail">mail</label>
                        <input type="text" class="form-control" name="mail" id="mail" placeholder="mail"
                            value="{{ old('mail') }}" required>
                        @error('mail')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label class="text-white" for="sito_web">sito_web</label>
                        <input type="text" class="form-control" name="sito_web" id="sito_web" placeholder="sito_web"
                            value="{{ old('sito_web') }}" required>
                        @error('sito_web')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-white" for="telefono">telefono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="telefono"
                            value="{{ old('telefono') }}" required>
                        @error('telefono')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-white" for="tipologia">tipologia</label>
                        <input type="text" class="form-control" name="tipologia" id="tipologia" placeholder="tipologia"
                            value="{{ old('tipologia') }}" required>
                        @error('tipologia')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-white" for="nazione">nazione</label>
                        <input type="text" class="form-control" name="nazione" id="nazione" placeholder="nazione"
                            value="{{ old('nazione') }}" required>
                        @error('nazione')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <button class="btn btn-success" type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
