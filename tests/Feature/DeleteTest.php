<?php

use App\Models\City;
use App\Models\Evenement;
use App\Models\Location;
use App\Models\User;
use function Pest\Laravel\withoutExceptionHandling;


it('delete user per id' , function(){
    $this->withoutExceptionHandling();
    $user = User::factory()->create();

    $response = $this->delete('users/'. $user->id . '/delete');
    $response->assertRedirect();
});

it('delete city per id' , function(){
    $this->withoutExceptionHandling();
    $city = City::factory()->create();

    $response = $this->delete('cities/'. $city->id . '/delete');
    $response->assertRedirect();
});

it('delete evenement per id' , function(){
    $this->withoutExceptionHandling();
    $evenement = Evenement::factory()->create();

    $response = $this->delete('evenements/'. $evenement->id . '/delete');
    $response->assertRedirect();
});

it('delete location per id' , function(){
    $this->withoutExceptionHandling();
    $location = Location::factory()->create();

    $response = $this->delete('locations/'. $location->id . '/delete');
    $response->assertRedirect();
});
