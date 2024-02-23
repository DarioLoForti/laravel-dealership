@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if ($error->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($error->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    
                @endif
                <h2 class="text-center my-4">Aggiungi una nuova auto</h2>
            </div>
            <div class="col-12">
                <form action="{{route('admin.cars.store')}}" method="POST">
                @csrf
                    <div class="form-group mb-3">
                        <label for="marca">Marca d'auto</label>
                        <input type="text" class="form-control" name="marca" id="marca" placeholder="Marca d'auto" value="{{ old('marca')}}">
                        @error('marca')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="modello">Modello</label>
                        <input type="text" class="form-control" name="modello" id="modello" placeholder="Modello" value="{{ old('modello')}}">
                        @error('modello')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="prezzo">Prezzo</label>
                        <input type="text" class="form-control" name="prezzo" id="prezzo" placeholder="Prezzo" value="{{ old('prezzo')}}">
                        @error('prezzo')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="alimentazione">Alimentazione</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Scegli alimentazione</option>
                            <option value="benzina" @selected(old('alimentazione', $car->alimentazione) == 'benzina')>Benzina</option>
                            <option value="metano" @selected(old('alimentazione', $car->alimentazione) == 'metano')>Metano</option>
                            <option value="diesel" @selected(old('alimentazione', $car->alimentazione) == 'diesel')>Diesel</option>
                            <option value="gpl" @selected(old('alimentazione', $car->alimentazione) == 'gpl')>GPL</option>
                            <option value="elettrica" @selected(old('alimentazione', $car->alimentazione) == 'eletrica')>Eletrica</option>
                            <option value="ibrida" @selected(old('alimentazione', $car->alimentazione) == 'ibrida')>Ibrida</option>
                          </select>
                        @error('alimentazione')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="cilindrata">Cilindrata</label>
                        <input type="text" class="form-control" name="cilindrata" id="cilindrata" placeholder="Cilindrata" value="{{ old('cilindrata')}}">
                        @error('cilindrata')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="cambio">Cambio</label>
                        <input type="text" class="form-control" name="cambio" id="cambio" placeholder="Cambio" value="{{ old('cambio')}}">
                        @error('cambio')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="porte">Porte</label>
                        <input type="number" class="form-control" name="porte" id="porte" placeholder="Porte" value="{{ old('porte')}}">
                        @error('porte')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="posti">Posti</label>
                        <input type="number" class="form-control" name="posti" id="posti" placeholder="Posti" value="{{ old('posti')}}">
                        @error('posti')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="tipologia">Tipologia</label>
                        <input type="text" class="form-control" name="tipologia" id="tipologia" placeholder="Tipologia" value="{{ old('tipologia')}}">
                        @error('tipologia')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="stato">Stato</label>
                        <input type="text" class="form-control" name="stato" id="stato" placeholder="Stato" value="{{ old('stato')}}">
                        @error('stato')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="anno_immatricolazione">Immatricolazione</label>
                        <input type="date" class="form-control" name="anno_immatricolazione" id="anno_immatricolazione" placeholder="Immatricolazione" value="{{ old('anno_immatricolazione')}}">
                        @error('anno_immatricolazione')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="km">Chilometri</label>
                        <input type="text" class="form-control" name="km" id="km" placeholder="Chilometri" value="{{ old('km')}}">
                        @error('km')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="immagine">Url immagine</label>
                        <input type="text" class="form-control" name="immagine" id="immagine" placeholder="Url immagine" value="{{ old('immagine')}}">
                        @error('immagine')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection