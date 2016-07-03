@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{!! Form::open(array('url' => 'create', 'id' => 'formCreate', 'name' => 'formCreate', 'method' => 'post')) !!}

<div class="form-group">
    {!! Form::Label('title', 'Title: ') !!}
    {!! Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Title')) !!}
</div>

<div class="form-group">
    {!! Form::Label('Description: ') !!}
    {!! Form::textarea('description', null, array('class' => 'form-control', 'placeholder' => 'Description', 'rows' => '3')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Add Task', array('id' => 'btnSubmit', 'class' => 'btn btn-primary')) !!}
</div>

{!! Form::close() !!}