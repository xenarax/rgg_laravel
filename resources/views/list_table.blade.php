{{--results table for all items--}}

<table class="table-responsive">
    <thead>
        <tr>
            <td>id</td>
            <td>title</td>
            <td>description</td>
            <td>status</td>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->description}}</td>
                <td>
                    @if ($item->status == "Done")
                        <input type="checkbox" name="isChecked" id="{{$item->id}}" class="checkBox" value="{{$item->id}}" checked>
                    @else
                        <input type="checkbox" name="isChecked" id="{{$item->id}}" class="checkBox" value="{{$item->id}}">
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


<script>
    $(".checkBox").click(function(){
        
    });
</script>