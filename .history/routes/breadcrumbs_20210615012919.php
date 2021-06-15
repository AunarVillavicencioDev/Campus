<?php

// Home
Breadcrumbs::for('escritorio', function ($trail) {
    $trail->push('escritorio', route('escritorio'));
});

// Home > About
Breadcrumbs::for('inscripcion', function ($trail) {
    $trail->parent('escritorio');
    $trail->push('inscripcion', route('inscripcion'));
});

// Home > Blog
Breadcrumbs::for('blog', function ($trail) {
    $trail->parent('home');
    $trail->push('Blog', route('blog'));
});

// Home > Blog > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('category', $post->category);
    $trail->push($post->title, route('post', $post->id));
});