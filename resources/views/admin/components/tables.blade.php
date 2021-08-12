<table id="datatablesSimple">
    <thead>
        <tr>
            @foreach ($col_name as $colName)
                <th>{{ $colName }}</th>
            @endforeach
        </tr>
    </thead>
    <tfoot>
        <tr>
            @foreach ($col_name as $colName)
                <th>{{ $colName }}</th>
            @endforeach
        </tr>
    </tfoot>
    <tbody>
        @foreach ($types as $type)
            <tr>
                <th>{{ $type['name'] }}</th>
                <th>{{ $type['created_at'] }}</th>
                <td>
                    <a href="{{ route('admin.types.update', $type->id) }}">
                        <div class="custom-edit-button">Edit</div>
                    </a>
                    <form action="{{ route('admin.types.destroy', $type->id) }}" method="POST"
                        onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>



        @endforeach

    </tbody>
</table>
