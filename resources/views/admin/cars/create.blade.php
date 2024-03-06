@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                <h2 class="text-center text-white my-4">Aggiungi una nuova auto</h2>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.cars.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="text-white" for="marca">Marca d'auto</label>
                        <input type="text" class="form-control" name="marca" id="marca" placeholder="Marca d'auto"
                            value="{{ old('marca') }}">
                        @error('marca')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-white" for="modello">Modello</label>
                        <input type="text" class="form-control" name="modello" id="modello" placeholder="Modello"
                            value="{{ old('modello') }}">
                        @error('modello')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label class="text-white" for="prezzo">Prezzo</label>
                        <input type="text" class="form-control" name="prezzo" id="prezzo" placeholder="Prezzo"
                            value="{{ old('prezzo') }}">
                        @error('prezzo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-white" for="alimentazione">Alimentazione</label>
                        <select name="alimentazione" class="form-select" aria-label="Default select example">
                            <option>Scegli alimentazione</option>
                            <option value="Benzina">Benzina</option>
                            <option value="Metano">Metano</option>
                            <option value="Diesel">Diesel</option>
                            <option value="GPL">GPL</option>
                            <option value="Elettrica">Elettrica</option>
                        </select>
                        @error('alimentazione')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-white" for="cilindrata">Cilindrata</label>
                        <input type="text" class="form-control" name="cilindrata" id="cilindrata"
                            placeholder="Cilindrata" value="{{ old('cilindrata') }}">
                        @error('cilindrata')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-white" for="cambio">Cambio</label>
                        <input type="text" class="form-control" name="cambio" id="cambio" placeholder="Cambio"
                            value="{{ old('cambio') }}">
                        @error('cambio')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-white" for="porte">Porte</label>
                        <input type="number" class="form-control" name="porte" id="porte" placeholder="Porte"
                            value="{{ old('porte') }}">
                        @error('porte')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-white" for="posti">Posti</label>
                        <input type="number" class="form-control" name="posti" id="posti" placeholder="Posti"
                            value="{{ old('posti') }}">
                        @error('posti')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-white" for="tipologia">Tipologia</label>
                        <input type="text" class="form-control" name="tipologia" id="tipologia" placeholder="Tipologia"
                            value="{{ old('tipologia') }}">
                        @error('tipologia')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <p class="text-white">Stato</p>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="stato" id="stato1" value="nuovo"
                                @checked(old('stato'))>
                            <label for="stato1" class="form-check-label text-white">Nuova</label><br>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="stato" id="stato2" value="usato"
                                @checked(old('stato'))>
                            <label for="stato2" class="form-check-label text-white">Usata</label><br>
                        </div>
                        @error('stato')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-white" for="anno_immatricolazione">Immatricolazione</label>
                        <input type="date" class="form-control" name="anno_immatricolazione"
                            id="anno_immatricolazione" placeholder="Immatricolazione"
                            value="{{ old('anno_immatricolazione') }}">
                        @error('anno_immatricolazione')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-white" for="km">Chilometri</label>
                        <input type="text" class="form-control" name="km" id="km"
                            placeholder="Chilometri" value="{{ old('km') }}">
                        @error('km')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        {{-- <label class="text-white" for="immagine">Url immagine</label>

                        <input type="text" class="form-control" name="immagine" id="immagine"
                            placeholder="Url immagine" value="{{ old('immagine') }}"> --}}
                        
                        <label for="immagine">Immagine Auto:</label>
                        <input type="file" name="immagine" id="immagine" class="form-control">
                        
                        @error('immagine')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="control-label text-white ">Seleziona optional</label>
                        <div>
                            @foreach ($optionals as $optional)
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="optionals[]"
                                        id="optional-{{ $optional->id }}" value="{{ $optional->id }}"
                                        @checked(is_array(old('optionals')) && in_array($optional->id, old('optionals')))>
                                    <label for=""
                                        class="form-check-label text-white">{{ $optional->nome }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group my-3">
                        <button class="btn btn-success" type="submit">Salva</button>
                    </div>
                </form>
                <a href="{{ route('admin.cars.index') }}" class="btn btn-primary float-end">Torna alle auto</a>
            </div>
        </div>
    </div>
@endsection
