@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel panel-heading">
                <h3 class="panel-title">
                    <span class="badge"></span>
                    TechRepublic Post
                </h3>
            </div>
            <div class="panel panel-body">
                @include('table')
            </div>
        </div>
        @include('form')
    </div>
@endsection