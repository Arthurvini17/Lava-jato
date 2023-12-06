<div class="container-all">
    <link rel="stylesheet" href="{{ asset('css/agendamento.css') }}">

    <div class="container-table">
        @if ($search)
            <p>Buscando por:{{ $search }}</p>
        @endif
        <input type="search" name="search" wire:model.live="search" placeholder="Buscar...">

        <select name="numberRows" wire:model.live="numberRows" id="">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="25">25</option>
        </select>
        <table>
            <thead class="cabecalho">
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Placa</th>
                    <th>Modelo</th>
                    <th>Chassi</th>
                </tr>
            </thead>
            <tbody class="corpo-tabela">
                @foreach ($veiculos as $veiculo)
                    <tr>
                        <td>{{ $veiculo->id }}</td>
                        <td>{{ $veiculo->name }}</td>
                        <td>{{ $veiculo->placa }}</td>
                        <td>{{ $veiculo->modelo }}</td>
                        <td>{{ $veiculo->chassi }}</td>
                    </tr>
                @endforeach

                {{ $veiculos->links() }}
            </tbody>
        </table>
    </div>
</div>
