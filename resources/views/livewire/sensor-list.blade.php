<div>
    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" wire:model.lazy="search" class="form-control" placeholder="Buscar Ambiente...">
            </div>
            <div class="col-md-3">
                <select wire:model.live="perPage" class="form-select">
                    <option value="10">10 por pagina</option>
                    <option value="20">20 por pagina</option>
                    <option value="30">30 por pagina</option>
                    <option value="40">40 por pagina</option>
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
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    @foreach ($ambientes as $a)
                        <tr>
                            <td>{{ $a->id }}</td>
                            <td>{{ $a->nome }}</td>
                            <td>{{ $a->descricao }}</td>
                            <td>{{ $a->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>