@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Add an actor</h1>
            {!! Form::open(['route' => 'actors.store']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name of the actor') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('country', 'Country') !!}
                {!! Form::text('country', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('image', 'Image') !!}
                {!! Form::url('image', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Add this actor', ['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
