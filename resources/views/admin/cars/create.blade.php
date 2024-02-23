@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center my-4">Aggiungi una nuova auto</h2>
            </div>
            <div class="col-12">
                <form action="{{route('admin.cars.store')}}" method="POST">
                @csrf
                    <div class="form-group mb-3">
                        <label for="marca">Marca d'auto</label>
                        <input type="text" class="form-control" name="marca" id="marca" placeholder="Marca d'auto">
                        @error('marca')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="modello">Modello</label>
                        <input type="text" class="form-control" name="modello" id="modello" placeholder="Modello">
                        @error('modello')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="prezzo">Prezzo</label>
                        <input type="text" class="form-control" name="prezzo" id="prezzo" placeholder="Prezzo">
                        @error('prezzo')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="alimentazione">Alimentazione</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Scegli alimentazione</option>
                            <option value="1">Benzina</option>
                            <option value="2">Metano</option>
                            <option value="3">Diesel</option>
                            <option value="4">GPL</option>
                            <option value="5">Eletrica</option>
                          </select>
                        @error('alimentazione')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="cilindrata">Cilindrata</label>
                        <input type="number" class="form-control" name="cilindrata" id="cilindrata" placeholder="Cilindrata">
                        @error('cilindrata')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="cambio">Cambio</label>
                        <input type="number" class="form-control" name="cambio" id="cambio" placeholder="Cambio">
                        @error('cambio')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="porte">Porte</label>
                        <input type="number" class="form-control" name="porte" id="porte" placeholder="Porte">
                        @error('porte')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="posti">Posti</label>
                        <input type="number" class="form-control" name="posti" id="posti" placeholder="Posti">
                        @error('posti')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="tipologia">Tipologia</label>
                        <input type="text" class="form-control" name="tipologia" id="tipologia" placeholder="Tipologia">
                        @error('tipologia')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="stato">Stato</label>
                        <input type="text" class="form-control" name="stato" id="stato" placeholder="Stato">
                        @error('stato')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="anno_immatricolazione">Immatricolazione</label>
                        <input type="date" class="form-control" name="anno_immatricolazione" id="anno_immatricolazione" placeholder="Immatricolazione">
                        @error('anno_immatricolazione')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="km">Chilometri</label>
                        <input type="text" class="form-control" name="km" id="km" placeholder="Chilometri">
                        @error('km')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="immagine">Url immagine</label>
                        <input type="text" class="form-control" name="immagine" id="immagine" placeholder="Url immagine">
                        @error('immagine')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection