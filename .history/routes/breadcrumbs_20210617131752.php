<?php

// Home
Breadcrumbs::for(trans("escritorio.name"), function ($trail) {
    $trail->push(trans("escritorio.name"), route('escritorio'));
});

// Home > inscripcion
Breadcrumbs::for(trans("inscripcion.name"), function ($trail) {
    $trail->parent(trans("escritorio.name"));
    $trail->push(trans("inscripcion.name"), route('inscripcion.index'));
});

// Home > cargadodocumentos
Breadcrumbs::for('cargadocumentos', function ($trail) {
    $trail->parent(trans("escritorio.name"));
    $trail->push('cargadocumentos', route('cargadocumentos.index'));
});

// Home > pagos
Breadcrumbs::for('trans("pagos.name")', function ($trail) {
    $trail->parent(trans("escritorio.name"));
    $trail->push('pagos', route('pagos.index'));
});

// Home > listadogeneral
Breadcrumbs::for('listadogeneral', function ($trail) {
    $trail->parent(trans("escritorio.name"));
    $trail->push('listadogeneral', route('listadogeneral.index'));
});

// Home > gestionhojadevida
Breadcrumbs::for('gestionhojadevida', function ($trail) {
    $trail->parent(trans("escritorio.name"));
    $trail->push('gestionhojadevida', route('gestionhojadevida.index'));
});

// Home > gestionoportunidad
Breadcrumbs::for('gestionoportunidad', function ($trail) {
    $trail->parent(trans("escritorio.name"));
    $trail->push('gestionoportunidad', route('gestionoportunidad.index'));
});

// Home > vermigestion
Breadcrumbs::for('vermigestion', function ($trail) {
    $trail->parent(trans("escritorio.name"));
    $trail->push('vermigestion', route('vermigestion.index'));
});

// Home > reportematriculas
Breadcrumbs::for('reportematriculas', function ($trail) {
    $trail->parent(trans("escritorio.name"));
    $trail->push('reportematriculas', route('reportematriculas.index'));
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