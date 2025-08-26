<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
</div>
<div class="row mb-3">
    <div class="col-md-6">
        <input type="text" wire:model.lazy="search" class="form-control" placeholder="Buscar Sensor...">
    </div>
    <div class="col-md-3">
        <select wire:model.live="perPage" class="form-select">
            <option value="10">10 por pagina</option>
            <option value="25">25 por pagina</option>
            <option value="50">50 por pagina</option>
            <option value="100">100 por pagina</option>
        </select>
    </div>
</div>

<div class="card">
    <div class="shadow rounded-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Sensores</h5>
        </div>
        <div class="card-body p-0">
            <table class="table table-hover">
                <thead class="table-light">
                    <th>ID</th>
                    <th>Código</th>
                    <th>Tipo</th>
                    <th>descrição</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    @foreach ($sensores as $s)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->codigo }}</td>
                            <td>{{ $s->tipo }}</td>
                            <td>{{ $s->descricao }}</td>
                            <td>{{ $s->status }}</td>


                            <td>
                                <a href="{{ route('sensor.edit', $ad->id) }}" class="btn btn-info btn-sm">
                                    <i class="bi bi-person-fill-gear"></i> Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </div>
    </div>
</div>
