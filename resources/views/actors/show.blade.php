@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ $actor->name }}</h1>
              <div class="card">
                  <div class="card-header">
                    A citizen of {{ $actor->country }}, more info can be found at <a href="{{ $actor->image }}">{{ $actor->image }}</a>
                  </div>
                  <div class="card-body">
                    <ul>
                    @foreach ($actor->movies as $movie)
                      <li>
                        <a href=" {{ route('movies.show', $movie) }}">{{ $movie->name }}</a>
                      </li>
                    @endforeach
                    </ul>
                  </div>
              </div>
        </div>
    </div>
</div>
@endsection
