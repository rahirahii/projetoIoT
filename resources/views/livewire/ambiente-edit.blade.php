<div class="container mt-5">
    <div class="bg-transparent border-0 d-flex justify-content-between align-items-center mb-4 pt-3">
        <h2><i class="bi bi-person-circle"></i> Editar Ambiente</h2>
    </div>

    <div class="card">
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form wire:submit.prevent="update">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" wire:model="nome" id="nome" class="form-control">
                        @error('nome')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <input type="text" wire:model="descricao" id="descricao" class="form-control">
                        @error('descricao')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name= "status" wire:model.defer="status"
                            style="border-radius: 100px; border-inline-color: black; border-block-color:black">
                            <option hidden>Selecione o status da sala</option>
                            <option value="1">Ativo</option>
                            <option value="Desativado">Desativado</option>
                            <select>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> Salvar Alterações
                        </button>
                    </div>
            </form>
        </div>
    </div>
</div>
