@extends('layouts.gues')
@section('content')

<h2>Résultats pour : "{{ $query }}"</h2>

@if($results->isEmpty())
    <p>Aucun service trouvé.</p>
@else
    <ul>
        @foreach($results as $service)
            <li>
                <strong>{{ $service->name }}</strong> - {{ $service->description }}
            </li>
        @endforeach
    </ul>
@endif

@endsection
