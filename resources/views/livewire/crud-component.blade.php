<div class="container-all">
    <link rel="stylesheet" href="{{ asset('css/agendamento.css') }}">

    <div class="container-table">

        <div class="searchs">

            <div class="text-search">
                @if ($search)
                    <p>Buscando por:{{ $search }}</p>
                @endif

                @if ($veiculos->count() == 0)
                    <p>Sem veiculos para essa procura</p>
                @endif
            </div>


            <div class="inputs-search">
                <input type="search" name="search" wire:model.live.debounce.300ms="search" placeholder="Buscar...">

                <select name="numberRows" wire:model.live="numberRows" id="">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                </select>
            </div>

        </div>

        <table>
            <thead class="cabecalho">
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Placa</th>
                    <th>Modelo</th>
                    <th>Chassi</th>
                    <th class="th-action">Ações</th>
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
                        <td class="action-button"><button wire:confirm="Tem certeza que deseja excluir?"
                                wire:click="delete
                                ({{ $veiculo->id }})
"
                                class="delete-button">Deletar</button>

                       
                            <a href="{{ route('edit.veic', ['veiculo' => $veiculo->id]) }}">
                                <button class="edit-button">Editar</button>
                            </a>
                        </td>
                    </tr>
                @endforeach

                {{ $veiculos->links() }}
            </tbody>
        </table>
    </div>
</div>
