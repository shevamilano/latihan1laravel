<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return 'Welcome to the Home Page!';
});

Route::get('/signin', function () {
    return 'Signin Form Page';
});


Route::get('/signup', function () {
    return 'Signup Form Page';
});


Route::post('/signin', function () {
    return 'Signin Processed';
});


Route::post('/signup', function () {
    return 'Signup Processed';
});

Route::get('/', function () {
    return 'Home Page';
});

Route::get('/blog', function () {
    return 'Blog List Page';
});

Route::get('/blog/{slug}', function ($slug) {
    return 'Blog Detail for Slug: ' . $slug;
});

Route::get('/category/{slug}', function ($slug) {
    return 'Category Page for Slug: ' . $slug;
});

Route::get('/author/{username}', function ($username) {
    return 'Articles by Author: ' . $username;
});

Route::get('/privacy-policy', function () {
    return 'Privacy Policy Page';
});

Route::get('/blog/{blogId}', function ($blogId) {
    $title = request()->query('title', 'Default Title');  
    $content = request()->query('content', 'Default Content'); 
    return "Blog ID: $blogId, Title: $title, Content: $content";
});

