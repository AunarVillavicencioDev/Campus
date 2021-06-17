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
Breadcrumbs::for(trans("documentos.name"), function ($trail) {
    $trail->parent(trans("escritorio.name"));
    $trail->push(trans("documentos.name"), route('cargadocumentos.index'));
});

// Home > pagos
Breadcrumbs::for(trans("pagos.name"), function ($trail) {
    $trail->parent(trans("escritorio.name"));
    $trail->push(trans("pagos.name"), route('pagos.index'));
});

// Home > listadogeneral
Breadcrumbs::for(trans("gestionlistadogeneral.name"), function ($trail) {
    $trail->parent(trans("escritorio.name"));
    $trail->push(trans("gestionlistadogeneral.name"), route('listadogeneral.index'));
});

// Home > gestionhojadevida
Breadcrumbs::for(trans("gestionhojadevida.name"), function ($trail) {
    $trail->parent(trans("escritorio.name"));
    $trail->push(trans("gestionhojadevida.name"), route('hojadevida.index'));
});

// Home > gestionoportunidad
Breadcrumbs::for(trans("gestionoportunidad.name"), function ($trail) {
    $trail->parent(trans("escritorio.name"));
    $trail->push(trans("gestionoportunidad.name"), route('oportunidad.index'));
});

// Home > vermigestion
Breadcrumbs::for(trans("vermigestion.name"), function ($trail) {
    $trail->parent(trans("escritorio.name"));
    $trail->push(trans("vermigestion.name"), route('vermigestion.index'));
});

// Home > reportematriculas
Breadcrumbs::for(trans("reportematriculas.name"), function ($trail) {
    $trail->parent(trans("escritorio.name"));
    $trail->push(trans("reportematriculas.name"), route('reportematriculas.index'));
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