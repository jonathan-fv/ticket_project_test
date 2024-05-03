<?php

use Illuminate\Support\Facades\Route;

it('home', function () {
    $this->get('/')
    ->assertStatus(200);

});

it('login page' ,function(){
    $this->get('/login')
    ->assertStatus(200);
});

it('cities' ,function(){
    $this->get('/cities')
    ->assertStatus(200);
});

it('evenements' ,function(){
    $this->get('/evenements')
    ->assertStatus(200);
});

it('locations' ,function(){
    $this->get('/locations')
    ->assertStatus(200);
});

it('show type' ,function(){
    $this->get('/showtypes')
    ->assertStatus(200);
});
