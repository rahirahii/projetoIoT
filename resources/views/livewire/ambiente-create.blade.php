<div class="container">
    <div class="mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h4 style="text-align:center">Cadastro de Ambiente</h4>
                    </div>

                    <div class="card-body">
                        <form wire:submit.prevent="store">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome do ambiente</label>
                                <input type="text" class="form-control" id="nome" name="nome"
                                    placeholder="Nome do ambiente" wire:model.defer="nome"
                                    style="border-radius: 100px; border-inline-color: black; border-block-color:black">
                            </div>

                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição</label>
                                <input type="descricao" class="form-control" id="descricao" name="descricao"
                                    placeholder="Descrição" wire:model.defer="descricao"
                                    style="border-radius: 100px; border-inline-color: black; border-block-color:black">
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name= "status" wire:model.defer="status"
                                    style="border-radius: 100px; background-color:#fffeed">
                                    <option hidden>Selecione o status da sala</option>

                                    <option value="Livre">Livre</option>
                                    <option value="Ocupada">Ocupada</option>
                                    <select>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
