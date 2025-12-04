<div class="d-flex align-items-center justify-content-center vh-100 bg-ligth">
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">Login</div>
            @if (session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <div class="card-body">
                <form wire:submit.prevent="login">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" wire:model="email" class="form-control"
                            placeholder="Insira o seu email">
                        @error('email')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" id="password" wire:model="password" class="form-control"
                            placeholder="Insira a sua senha">
                        @error('password')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn w-100" style="background-color: blue">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
