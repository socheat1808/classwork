<?php

use Illuminate\Support\Facades\Route;

// 1. Define the data at the TOP of the file so all routes can access it

Route::get('/', function () {
    $properties = [
        [
            'id' => 1,
            'title' => 'Cozy Cottage in the Woods',
            'location' => 'Asheville, NC',
            'price' => 120,
            'image' => 'https://picsum.photos/400/250?1'
        ],
        [
            'id' => 2,
            'title' => 'Modern Apartment Downtown',
            'location' => 'Chicago, IL',
            'price' => 150,
            'image' => 'https://picsum.photos/400/250?1'
        ],
        [
            'id' => 3,
            'title' => 'Beachfront Bungalow',
            'location' => 'Miami, FL',
            'price' => 200,
            'image' => 'https://picsum.photos/400/250?1'
        ],
        [
            'id' => 4,
            'title' => 'Beachfront Bungalow',
            'location' => 'Miami, FL',
            'price' => 200,
            'image' => 'https://picsum.photos/400/250?1'
        ],
    ];

    return view('index', compact('properties'));
})->name('home');

Route::get('/properties/{id}', function($id){
    return view('properties-details', compact('id'));
})->name('property.show');

