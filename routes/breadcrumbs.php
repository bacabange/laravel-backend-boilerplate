<?php

// dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push(__('Dashboard'), route('dashboard'));
});

Breadcrumbs::for('users', function ($trail) {
    $trail->parent('dashboard');
    $trail->push(__('Users'), route('users.index'));
});

Breadcrumbs::for('users.create', function ($trail) {
    $trail->parent('users');
    $trail->push(__('Create'), route('users.create'));
});
