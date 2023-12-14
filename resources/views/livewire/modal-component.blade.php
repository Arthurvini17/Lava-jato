<div class="container">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    <header class="container-header">
        <nav>
            <div class="text-prin">
                <h1>Lava-Jato</h1>
            </div>

            @auth
                <div class="navigation">
                    <button class="button-nav">Sair</button>
                </div>
            @else
                <div class="navigation">
                    <button class="button-nav" wire:click="open">Agendamento</button>

                    <button class="button-nav">Registrar</button>
                </div>
            @endauth

        </nav>
    </header>
    @if ($isOpen)
        <div class="container-modal" wire:transition>
            <header class="form-header">
                <div class="text-agen">
                    <h1>Agende seu veículo aqui</h1>
                </div>

                <div class="close">
                    <svg wire:click="closeModal" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                        fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>
            </header>
            <div class="box-form">
                <form wire:submit="addVeic">

                    <div class="container-input">
                        <div class="form-input">
                            <label for="name">Nome</label>
                            <input type="text" name="name" wire:model.live="name"
                                placeholder="Nome do cliente...">
                        </div>

                        <div class="form-input">
                            <label for="placa">Placa</label>
                            <input type="text" name="placa" wire:model.live="placa"
                                placeholder="Placa do veiculo...">
                        </div>

                        <div class="form-input">
                            <label for="modelo">Modelo</label>
                            <input type="text" name="modelo" wire:model.live="modelo"
                                placeholder="Modelo do veiculo...">
                        </div>

                        <div class="form-input">
                            <label for="chassi">Chassi</label>
                            <input type="text" name="chassi" wire:model.live="chassi"
                                placeholder="Chassi do veiculo...">
                        </div>

                    </div>
                    <button class="submit-button" wire:submit>Agendar</button>
                </form>
            </div>
        </div>
    @endif
</div>
