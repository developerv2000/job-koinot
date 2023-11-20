<table class="table" cellpadding="10" cellspacing="10">
    {{-- Head start --}}
    <thead>
        <tr>
            {{-- Empty space for checkbox --}}
            <th width="20"></th>

            <th>
                @include('dashboard.table-components.thead-link', ['orderBy' => 'created_at', 'title' => 'Дата загрузки'])
            </th>

            <th>Скачать файл</th>

            <th>
                @include('dashboard.table-components.thead-link', ['orderBy' => 'new', 'title' => 'Статус'])
            </th>

            <th width="140">Действие</th>
        </tr>
    </thead> {{-- Head end --}}

    {{-- Body start --}}
    <tbody>
        @foreach ($items as $item)
            <tr>
                <td>@include('dashboard.table-components.checkbox')</td>

                <td>
                    @include('dashboard.table-components.td-date', ['attribute' => 'created_at'])
                </td>

                <td>
                    <form class="resume-download" action="{{ route('resumes.download', $item->id) }}" method="POST">
                        @csrf

                        <button class="button button--transparent td__download">
                            <span class="material-symbols-outlined">download</span>
                            <span class="td__download-text">Скачать</span>
                        </button>
                    </form>
                </td>

                <td>{!! $item->new ? '<span class="td__new">НОВЫЙ</span>' : 'Скачано' !!}</td>

                <td class="table__actions">
                    @include('dashboard.table-components.destroy-button')
                </td>
            </tr>
        @endforeach
    </tbody> {{-- Body end --}}
</table>

{{ $items->links('dashboard.layouts.pagination') }}
