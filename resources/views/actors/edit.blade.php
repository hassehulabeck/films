@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Edit actor</h1>
            {!! Form::open(['route' => ['actors.update', $actor->id ]]) !!}
            {{method_field('PUT')}}
            {{ csrf_field() }}

            {!! Form::hidden('x-factor', 'x & y', ['class' => 'form-control']) !!}


            <div class="form-group">
                {!! Form::label('name', 'Name of the actor') !!}
                {!! Form::text('name', $actor->name, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('country', 'Country') !!}
                {!! Form::text('country', $actor->country, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('image', 'Image') !!}
                {!! Form::url('image', $actor->image, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Update actor', ['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
