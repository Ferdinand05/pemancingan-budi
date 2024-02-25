<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.

use App\Models\Category;
use App\Models\Post;
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
    $trail->push('Blog', route('blog'));
});
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard'));
});

// Blog > Post
Breadcrumbs::for('post.show', function (BreadcrumbTrail $trail, Post $post) {
    $trail->parent('blog');
    $trail->push($post->title, route('posts.show', $post));
});

// Blog > Category Post
Breadcrumbs::for('category.post', function (BreadcrumbTrail $trail, Category $category) {
    $trail->parent('blog');
    $trail->push($category->name, route('posts.show', $category));
});


// parent
// Dashboard / Categories 
Breadcrumbs::for('categories', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Categories', route('category.index'));
});

// Dashboard / Categories / Create
Breadcrumbs::for('categories.create', function (BreadcrumbTrail $trail) {
    $trail->parent('categories');
    $trail->push('Create', route('category.create'));
});
// Dashboard / Categories / Edit
Breadcrumbs::for('categories.edit', function (BreadcrumbTrail $trail, Category $category) {
    $trail->parent('categories');
    $trail->push('Edit', route('category.edit', $category));
});







// parent
// Dashboard / Posts 
Breadcrumbs::for('posts', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Posts', route('posts.index'));
});

// Dashboard / Posts / Create
Breadcrumbs::for('posts.create', function (BreadcrumbTrail $trail) {
    $trail->parent('posts');
    $trail->push('Create', route('posts.create'));
});
// Dashboard / Posts / Edit
Breadcrumbs::for('posts.edit', function (BreadcrumbTrail $trail, Post $post) {
    $trail->parent('posts');
    $trail->push('Edit', route('posts.edit', $post));
});
