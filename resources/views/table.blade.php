<table class="table table-responsive">
    <thead>
    <tr>
        <th>Done?</th>
        <th>Title</th>
        <th>Description</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
            <td>
                @if ($item->status == "Done")
                    <input type="checkbox" name="isChecked" value="{{ $item->id }}" checked>
                @else
                    <input type="checkbox" name="isChecked" value="{{ $item->id }}">
                @endif</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->description }}</td>
            <td></td>
        </tr>
    @endforeach
    </tbody>
</table>