@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                <h2 class="text-center text-white my-4">Aggiungi un nuovo optional</h2>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.optionals.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="text-white" for="nome">Nome Optional</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="nome"
                            value="{{ old('nome') }}" >
                        @error('nome')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-white" for="descrizione">Descrizione</label>
                        <textarea class="form-control" name="descrizione" id="descrizione" cols="30" rows="10" placeholder="Descrizione">{{ old('descrizione') }}</textarea>

                        @error('descrizione')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label class="text-white" for="prezzo">Prezzo</label>
                        <input type="text" class="form-control" name="prezzo" id="prezzo" placeholder="prezzo"
                            value="{{ old('prezzo') }}" >
                        @error('prezzo')
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
