{{--
<x-data-table :headers="['ID', 'Nome', 'Email', 'Ruolo']" :rows="$users" :fields="['id', 'name', 'email', 'role']"
    striped="true" hoverable="true" bordered="true" class="custom-class" :actions="[
            ['label' => 'Modifica', 'route' => 'users.edit', 'class' => 'btn-primary'],
            ['label' => 'Elimina', 'route' => 'users.destroy', 'class' => 'btn-danger', 'method' => 'delete']
        ]" :empty-message="'Nessun dato disponibile'" /> --}}


@props([
'headers' => [], // Array di intestazioni colonna
'rows' => [], // Collection o array di dati
'fields' => [], // Array dei campi da mostrare (chiavi dell'oggetto/array)
'striped' => false, // Righe alternate colorate
'hoverable' => false, // Effetto hover sulle righe
'bordered' => true, // Bordi della tabella
'actions' => [], // Array di azioni (modifica, elimina, etc.)
'emptyMessage' => 'Nessun dato disponibile', // Messaggio quando non ci sono dati
'class' => '', // Classi CSS aggiuntive
'responsive' => true, // Tabella responsive
'sortable' => [], // Array dei campi ordinabili
'searchable' => false, // Abilita ricerca
'paginate' => null, // Oggetto paginazione Laravel
])

@php
$tableClasses = 'table';
if ($striped) $tableClasses .= ' table-striped';
if ($hoverable) $tableClasses .= ' table-hover';
if ($bordered) $tableClasses .= ' table-bordered';
if ($class) $tableClasses .= ' ' . $class;
@endphp

<div class="table-container">
    {{-- Barra di ricerca opzionale --}}
    @if($searchable)
    <div class="table-search mb-3">
        <input type="text" class="form-control" id="table-search-{{ uniqid() }}" placeholder="Cerca..."
            onkeyup="searchTable(this)">
    </div>
    @endif

    {{-- Wrapper responsive --}}
    <div class="{{ $responsive ? 'table-responsive text-white' : '' }}">
        <table class="{{ $tableClasses }}" id="data-table-{{ uniqid() }}">
            {{-- Intestazioni --}}
            <thead>
                <tr>
                    @foreach($headers as $index => $header)
                    <th scope="col" class="{{ in_array($fields[$index] ?? '', $sortable) ? 'sortable' : '' }}">
                        @if(in_array($fields[$index] ?? '', $sortable))
                        <a href="#" onclick="sortTable({{ $index }}, this); return false;"
                            class="text-decoration-none text-dark">
                            {{ $header }}
                            <span class="sort-icon">
                                <i class="fas fa-sort"></i>
                            </span>
                        </a>
                        @else
                        {{ $header }}
                        @endif
                    </th>
                    @endforeach

                    @if(count($actions) > 0)
                    <th scope="col" class="text-center">Azioni</th>
                    @endif
                </tr>
            </thead>

            {{-- Corpo della tabella --}}
            <tbody>
                {{-- @forelse($rows as $row)
                <tr>
                    @foreach($fields as $field)
                    <td>
                        @php
                        $value = data_get($row, $field);
                        @endphp

                        @if(is_bool($value))
                        <span class="badge {{ $value ? 'bg-success' : 'bg-danger' }}">
                            {{ $value ? 'Sì' : 'No' }}
                        </span>
                        @elseif($value instanceof \Carbon\Carbon)
                        {{ $value->format('d/m/Y H:i') }}
                        @elseif(is_array($value))
                        {{ implode(', ', $value) }}
                        @else
                        {{ $value }}
                        @endif
                    </td>
                    @endforeach

                    @if(count($actions) > 0)
                    <td class="text-center">
                        <div class="btn-group" role="group">
                            @foreach($actions as $action)
                            @if(isset($action['method']) && strtolower($action['method']) === 'delete')
                            <form action="{{ route($action['route'], $row->id ?? $row['id']) }}" method="POST"
                                class="d-inline"
                                onsubmit="return confirm('Sei sicuro di voler eliminare questo elemento?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm {{ $action['class'] ?? 'btn-danger' }}">
                                    @if(isset($action['icon']))
                                    <i class="{{ $action['icon'] }}"></i>
                                    @endif
                                    {{ $action['label'] ?? 'Elimina' }}
                                </button>
                            </form>
                            @else
                            <a href="{{ route($action['route'], $row->id ?? $row['id']) }}"
                                class="btn btn-sm {{ $action['class'] ?? 'btn-primary' }}">
                                @if(isset($action['icon']))
                                <i class="{{ $action['icon'] }}"></i>
                                @endif
                                {{ $action['label'] ?? 'Azione' }}
                            </a>
                            @endif
                            @endforeach
                        </div>
                    </td>
                    @endif
                </tr>
                @empty
                <tr>
                    <td colspan="{{ count($headers) + (count($actions) > 0 ? 1 : 0) }}" class="text-center py-4">
                        <div class="text-muted">
                            <i class="fas fa-inbox fa-3x mb-3"></i>
                            <p>{{ $emptyMessage }}</p>
                        </div>
                    </td>
                </tr>
                @endforelse --}}
            </tbody>
        </table>
    </div>

    {{-- Paginazione --}}
    @if($paginate)
    <div class="d-flex justify-content-between align-items-center mt-3">
        <div class="text-muted">
            Mostrando {{ $paginate->firstItem() ?? 0 }} - {{ $paginate->lastItem() ?? 0 }}
            di {{ $paginate->total() }} risultati
        </div>
        <div>
            {{ $paginate->links() }}
        </div>
    </div>
    @endif
</div>