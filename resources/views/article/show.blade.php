@extends('layouts.app')
@section('content')
    <h1>
        {{$article->titre}}
    </h1>

    <p>
        {{$article->contenu}}
    </p>
@endsection

