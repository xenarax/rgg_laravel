{{--{!! Form::open(array('url' => 'createItem', 'id' => 'formCreate', 'name' => 'formCreate', 'method' => 'post')) !!}--}}
{!! Form::open(array('url' => '#', 'id' => 'formCreate', 'name' => 'formCreate', 'method' => 'post')) !!}

<div class="form-group">
    {!! Form::Label('title', 'Title: ') !!}
    {!! Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Title')) !!}
</div>

<div class="form-group">
    {!! Form::Label('Description: ') !!}
    {!! Form::text('description', null, array('class' => 'form-control', 'placeholder' => 'Description')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Add to To-Do List', array('id' => 'btnSubmit', 'class' => 'btn btn-primary')) !!}
</div>

{!! Form::close() !!}

<script>
    $('#formCreate').submit(function(e) {
        e.preventDefault();

        $data = $('#formCreate').serialize();
        console.log($data);
    });
</script>