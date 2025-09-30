<div>
    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" wire:model.lazy="search" class="form-control" placeholder="Buscar Ambiente...">
            </div>
            <div class="col-md-3">
                <select wire:model.live="perPage" class="form-select">
                    <option value="2">2 por pagina</option>
                    <option value="5">5 por pagina</option>
                    <option value="10">10 por pagina</option>
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
                    <th>Ações</th>
                </thead>
                <tbody>
                    @foreach ($ambientes as $a)
                        <tr>
                            <td>{{ $a->id }}</td>
                            <td>{{ $a->nome }}</td>
                            <td>{{ $a->descricao }}</td>
                            <td>{{ $a->status }}</td>

                            <td>
                                <a href="{{ route('ambiente.edit', $a->id) }}"
                                    class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <button wire:click="delete({{ $a->id }})"
                                    class="btn btn-sm btn-danger" onclick="return
                                    confirm('Tem certeza?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
