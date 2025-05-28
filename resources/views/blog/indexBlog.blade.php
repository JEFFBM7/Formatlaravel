@extends('base')
@section('title', $title ?? 'Mon Blog')
@section('content')
<br>
<h1 class="text-center text-white">Mes Articles</h1>
<br>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 auto-rows-fr px-4  ">
@foreach ($posts as $post)
    <article class="space-y-4 p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
        <h2 class="text-xl font-bold text-gray-900 dark:text-gray-100">{{ $post->titre }}</h2>
        <p class="text-gray-600 dark:text-gray-300 line-clamp-3">{{ $post->content }}</p>
    </article>
@endforeach
</div>
@endsection