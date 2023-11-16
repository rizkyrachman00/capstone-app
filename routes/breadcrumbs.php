<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
  $trail->push('Dashboard', route('dashboard.index'));
});

// Home > Blog
Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
  $trail->parent('dashboard');
  $trail->push('Blog',);
});

// dashboard > kategori
Breadcrumbs::for('kategori', function (BreadcrumbTrail $trail) {
  $trail->parent('dashboard');
  $trail->push('Kategori', route('kategori.index'));
});

// // Home > Blog > [Category]
// Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
//   $trail->parent('blog');
//   $trail->push($category->title, route('category', $category));
// });
