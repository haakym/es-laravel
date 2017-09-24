<?php

Route::get('/', function () {
    return view('articles.index', [
        'articles' => App\Article::all(),
    ]);
});

use App\Articles\ArticlesRepository;

Route::get('/search', function (ArticlesRepository $repository) {
    $articles = $repository->search((string) request('q'));

    return view('articles.index', [
    	'articles' => $articles,
    ]);
});