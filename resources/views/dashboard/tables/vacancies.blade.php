<table class="table" cellpadding="10" cellspacing="10">
    {{-- Head start --}}
    <thead>
        <tr>
            {{-- Empty space for checkbox --}}
            <th width="20"></th>

            <th>
                @include('dashboard.table-components.thead-link', ['orderBy' => 'name', 'title' => 'Название'])
            </th>

            <th>Зарплата</th>

            <th>
                @include('dashboard.table-components.thead-link', ['orderBy' => 'resumes_count', 'title' => 'Количество анкет'])
            </th>

            <th>
                @include('dashboard.table-components.thead-link', ['orderBy' => 'created_at', 'title' => 'Дата создания'])
            </th>

            <th width="140">Действие</th>
        </tr>
    </thead> {{-- Head end --}}

    {{-- Body start --}}
    <tbody>
        @foreach ($items as $item)
            <tr>
                <td>@include('dashboard.table-components.checkbox')</td>

                <td>{{ $item->name }}</td>

                <td>{{ $item->salary }}</td>

                <td>{{ $item->resumes_count }}</td>

                <td>
                    @include('dashboard.table-components.td-date', ['attribute' => 'created_at'])
                </td>

                <td class="table__actions">
                    @include('dashboard.table-components.destroy-button')
                    @include('dashboard.table-components.edit-button')
                </td>
            </tr>
        @endforeach
    </tbody> {{-- Body end --}}
</table>

{{ $items->links('dashboard.layouts.pagination') }}
