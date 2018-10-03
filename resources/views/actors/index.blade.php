@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Actors</h1>
            @foreach ($actors as $actor)
              <div class="card">
                  <div class="card-header">
                    <a href=" {{ route('actors.show', $actor) }}">{{ $actor->name }}</a>
                  </div>
                  <div class="card-body">
                    {{ $actor->country }}
                    <p><i>
                    @foreach($actor->movies as $movie)
                      {{ $movie->name }},
                    @endforeach
                    </i></p>
                  </div>
              </div>
            @endforeach
        </div>
    </div>
</div>
{{ $actors->links() }}
@endsection
