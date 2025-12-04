<div>
    <div class="container mt-5">
         @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" wire:model.lazy="search" class="form-control" placeholder="Buscar Sensor...">
            </div>
            <div class="col-md-3">
                <select wire:model.live="perPage" class="form-select">
                    <option value="10">10 por pagina</option>
                    <option value="20">20 por pagina</option>
                    <option value="30">30 por pagina</option>
                    <option value="40">40 por pagina</option>
                </select>
            </div>
             <div class="col-md-3">
                <a class='btn btn-sm' href="{{ route('ambiente.create') }}" style="background-color:blue"><i class="bi bi-plus-circle"></i> Criar novos
                    sensores</a>
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
                    <th>Ambiente ID</th>
                    <th>Código</th>
                    <th>Tipo</th>
                    <th>Descrição</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    @foreach ($sensores as $s)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->ambiente->id }}</td>
                            <td>{{ $s->codigo }}</td>
                            <td>{{ $s->tipo }}</td>
                            <td>{{ $s->descricao }}</td>
                            <td>{{ $s->status }}</td>
                            <td><button wire:click="alternarStatus({{$s->id}})">
                                {{$s->status ? 'Desligar':'Ligar'}}
                                <i class="bi bi-power"></i>
                            </button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
