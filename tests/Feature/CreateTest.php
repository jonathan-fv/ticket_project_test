<?php

use App\Models\City;
use App\Models\Evenement;
use App\Models\Location;
use App\Models\ShowType;
use App\Models\User;

it('create user', function(){
    $user = User::create([
        'name' => 'Drogon',
        'email' => 'drogon@gmail.com',
        'password' =>  bcrypt('123456')
    ]);
    expect($user->name)->toBe('Drogon');
});


it('create city', function(){
    $city = City::create([
        'name' => 'Paris',
    ]);
    expect($city->name)->toBe('Paris');
});

it('create evenement', function(){
    $evenement = Evenement::create([
        'name' => 'Nevermore',
    ]);
    expect($evenement->name)->toBe('Nevermore');
});

it('create location', function(){
    $location = Location::create([
        'name' => 'Stade de France',
    ]);
    expect($location->name)->toBe('Stade de France');
});

it('create showType', function(){
    $showType = ShowType::create([
        'name' => 'Concert',
    ]);
    expect($showType->name)->toBe('Concert');
});
