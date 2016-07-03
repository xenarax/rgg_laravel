<table class="table table-striped">
    <thead>
    <tr>
        <th>Done?</th>
        <th>Title</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
            <td>
                @if ($item->status == 1)
                    <input type="checkbox" class="isChecked" name="isChecked" value="{{ $item->id }}" checked>
                @else
                    <input type="checkbox" class="isChecked" name="isChecked" value="{{ $item->id }}">
                @endif</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->description }}</td>
            <td>
                <a href="/edit/{{ $item->id }}" class="btn-xs btn-success">Edit</a>
                <a href="/delete/{{ $item->id }}" class="btn-xs btn-danger">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.isChecked').click(function (e) {
        var itemID = $(this).val();

        $.ajax({
            method: "POST",
            url: "toggleDone/" + itemID,
            success: function (jqXHR, textStatus, response) {
                if (textStatus == "success") {
                    window.location.reload();
                }
            },
            error: function (jqXHR, textStatus, error) {
                console.log(error);
            }
        });
    });
</script>