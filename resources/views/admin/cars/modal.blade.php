<div class="modal fade" id="modal_delete_{{ $car->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Conferma Eliminazione</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3> Sei sicuro di voler eliminare questa auto: <br><br>{{ $car->modello }}? </h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Indietro</button>
                <form action="{{ route('admin.cars.destroy', ['car' => $car->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Elimina</button>
                </form>
            </div>
        </div>
    </div>
</div>
