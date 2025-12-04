<div class="container mt-5">
    <div class="bg-transparent border-0 d-flex justify-content-between align-items-center mb-4 pt-3">
        <h2><i class="bi bi-person-circle"></i> Editar Sensor</h2>
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
                        <label for="codigo" class="form-label">Código</label>
                        <input type="text" wire:model="codigo" id="codigo" class="form-control">
                       
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <input type="text" wire:model="tipo" id="tipo" class="form-control">
                        @error('tipo')
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
                            <option hidden>Selecione o status do sensor</option>
                            <option value="1">Ativo</option>
                            <option value="0">Desativado</option>
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