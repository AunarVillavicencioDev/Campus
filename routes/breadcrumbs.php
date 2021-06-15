<?php

// Home
Breadcrumbs::for('escritorio', function ($trail) {
    $trail->push('escritorio', route('escritorio'));
});

// Home > inscripcion
Breadcrumbs::for('inscripcion', function ($trail) {
    $trail->parent('escritorio');
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
    $trail->parent('gestionhojadevida');
    $trail->push('gestionhojadevida', route('gestionhojadevida'));
});

// Home > gestionoportunidad
Breadcrumbs::for('gestionoportunidad', function ($trail) {
    $trail->parent('gestionoportunidad');
    $trail->push('gestionoportunidad', route('gestionoportunidad'));
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