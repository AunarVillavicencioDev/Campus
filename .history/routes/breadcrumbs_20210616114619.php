<?php

// Home
Breadcrumbs::for(trans("escritorio.name"), function ($trail) {
    $trail->push(trans("escritorio.name"), route('escritorio'));
});

// Home > inscripcion
Breadcrumbs::for('inscripcion', function ($trail) {
    $trail->parent('Escritorio');
    $trail->push('inscripcion', route('inscripcion'));
});

// Home > cargadodocumentos
Breadcrumbs::for('cargadocumentos', function ($trail) {
    $trail->parent('escritorio');
    $trail->push('cargadocumentos', route('cargadocumentos'));
});

// Home > pagos
Breadcrumbs::for('pagos', function ($trail) {
    $trail->parent('escritorio');
    $trail->push('pagos', route('pagos'));
});

// Home > listadogeneral
Breadcrumbs::for('listadogeneral', function ($trail) {
    $trail->parent('escritorio');
    $trail->push('listadogeneral', route('listadogeneral'));
});

// Home > gestionhojadevida
Breadcrumbs::for('gestionhojadevida', function ($trail) {
    $trail->parent('escritorio');
    $trail->push('gestionhojadevida', route('gestionhojadevida'));
});

// Home > gestionoportunidad
Breadcrumbs::for('gestionoportunidad', function ($trail) {
    $trail->parent('escritorio');
    $trail->push('gestionoportunidad', route('gestionoportunidad'));
});

// Home > vermigestion
Breadcrumbs::for('vermigestion', function ($trail) {
    $trail->parent('escritorio');
    $trail->push('vermigestion', route('vermigestion'));
});

// Home > reportematriculas
Breadcrumbs::for('reportematriculas', function ($trail) {
    $trail->parent('escritorio');
    $trail->push('reportematriculas', route('reportematriculas'));
});






/* Home > Blog > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category->id));
});

 Home > Blog > [Category] > [Post]
Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('category', $post->category);
    $trail->push($post->title, route('post', $post->id));
});*/