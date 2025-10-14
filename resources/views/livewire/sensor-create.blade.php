<div class="container">
    <div class="mt-5">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h4 style="text-align:center">Cadastro de Sensor</h4>
                    </div>

                    <div class="card-body">
                        <form wire:submit.prevent="store">
                            <div class="mb-3">
                                <label for="codigo" class="form-label">Codigo do sensor</label>
                                <input type="text" class="form-control" id="codigo" name="codigo"
                                    placeholder="Código do sensor" wire:model.defer="codigo"
                                    style="border-radius: 100px; border-inline-color: black; border-block-color:black">
                            </div>

                            <div class="mb-3">
                                <label for="tipo" class="form-label">Tipo</label>
                                <input type="text" class="form-control" id="tipo" name="tipo"
                                    placeholder="Tipo" wire:model.defer="tipo"
                                    style="border-radius: 100px; border-inline-color: black; border-block-color:black">
                            </div>

                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição</label>
                                <input type="text" class="form-control" id="descricao" name= "descricao"
                                    placeholder="Descrição" wire:model.defer="descricao"
                                    style="border-radius: 100px; border-inline-color: black; border-block-color:black">
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
                            <div class="mb-3">
                                <label for="ambiente_id" class="form-label">Ambiente</label>
                                <select class="form-select" id="ambiente_id" wire:model.defer="ambiente_id"
                                    style="border-radius: 100px; border-inline-color: black; border-block-color:black">
                                    <option hidden>Selecione o ambiente</option>
                                    @foreach ($ambientes as $ambiente)
                                        <option value={{ $ambiente->id }}>{{ $ambiente->nome }}></option>
                                    @endforeach
                                </select>
                                @error('ambiente_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary w-100"
                                    style=" border-radius: 100px; color:#fff ">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
