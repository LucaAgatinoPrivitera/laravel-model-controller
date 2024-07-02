@extends('layouts.app')

@section('content')
<h1>Dati da "config/data.php": {{ $store['home'] }}</h1> {{-- Prima solamente home dava errore perché appunto adesso home è contenuto nell'array associativo store --}}
<p>This is my paragraph content.</p>
<button class="btn btn-primary">Cliccami</button>

@foreach ($movie as $singoloMovie)
    <p>Ciao</p>
@endforeach
@endsection
