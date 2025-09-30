<div>
    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" wire:model.lazy="search" class="form-control" placeholder="Buscar Registro...">
            </div>
            <div class="col-md-3">
                <select wire:model.live="perPage" class="form-select">
                    <option value="2">2 por página</option>
                    <option value="5">5 por página</option>
                    <option value="10">10 por página</option>
                </select>
            </div>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="card-body p-0">
            <table class="table table-hover">
                <thead class="table-light">
                    <th>ID</th>
                    <th>Sensor ID</th>
                    <th>Valor</th>
                    <th>Unidade</th>
                    <th>Data e hora</th>
                </thead>
                <tbody>
                    @foreach ($registros as $r)
                        <tr>
                            <td>{{ $r->id }}</td>
                            <td>{{ $r->sensor_id }}</td>
                            <td>{{ $r->valor }}</td>
                            <td>{{ $r->unidade }}</td>
                            <td>{{ $r->data_hora }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
