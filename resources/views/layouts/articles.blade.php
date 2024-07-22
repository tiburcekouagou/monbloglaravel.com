@extends('layouts.master')

@section('title')
    Articles
@endsection

@section('contenu')
    <h2>Articles</h2>

    @forelse ($articles as $article)
        @include('articles.index')
    @empty
        @include('articles.no-articles')
    @endforelse
@endsection