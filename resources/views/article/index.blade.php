@extends('layouts.app')

@section('content')


@foreach ($articles as $article)

<h2>
    <a href="{{ route('article.show', $article->id) }}" target="_blank">{{ $article->titre }}</a>
    <p>
            {{ Str::limit($article->contenu, $limit = 100, $end = '...') }}
    </p>
</h2>
@endforeach

@endsection