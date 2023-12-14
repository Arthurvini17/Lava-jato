<div class="container-edit">
    <link rel="stylesheet" href="{{ asset('css/edit_veic.css') }}">
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

    <div class="box-form">
        <form action="{{ route('update.veic', $veiculo->id) }}" method="POST">
            @csrf
            <div class="container-input">
                <div class="form-input">
                    <label for="name">Nome</label>
                    <input type="text" name="name" value="{{ $veiculo->name }}">
                </div>

                <div class="form-input">
                    <label for="placa">Placa</label>
                    <input type="text" name="placa" value="{{ $veiculo->placa }}">
                </div>

                <div class="form-input">
                    <label for="modelo">Modelo</label>
                    <input type="text" name="modelo" value="{{ $veiculo->modelo }}">
                </div>

                <div class="form-input">
                    <label for="chassi">Chassi</label>
                    <input type="text" name="chassi" value="{{ $veiculo->chassi }}">
                </div>
            </div>

            <div class="form-input">
                <button class="submit-button" type="submit">Agendar</button>
            </div>
    </div>
</div>
