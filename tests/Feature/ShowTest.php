<?php

use App\Models\User;
use App\Models\City;
use App\Models\Evenement;
use App\Models\Location;
use App\Models\ShowType;

it('show user', function(){
    //Créer un user
    $user = User::factory()->create();

    //Lancer la requête GET sur cette route en passant l'id du user créé précédemment dans les paramètres de la route
    $response = $this->get('/users/' . $user->id);
    $response->assertOk()
            ->assertJson([
                'name' => $user->name,
                'email' => $user->email
            ]);
});

it('show city' , function(){
        //Créer une ville
        $city = City::factory()->create();

        $response = $this->get('/cities/' . $city->id);
        $response->assertOk()
            ->assertJson([
                'name' => $city->name
        ]);
});

it('show evenement' , function(){
    //Créer un évenement
    $evenement = Evenement::factory()->create();

    $response = $this->get('/evenements/' . $evenement->id);
    $response->assertOk()
        ->assertJson([
            'name' => $evenement->name
    ]);
});

it('show location' , function(){
    //Créer une salle  de spectacle
    $location = Location::factory()->create();

    $response = $this->get('/locations/' . $location->id);
    $response->assertOk()
        ->assertJson([
            'name' => $location->name
    ]);
});

it('show showType', function(){
    //Créer un type de spectacle
    $showtype = ShowType::factory()->create();

    $response = $this->get('/showtypes/'  . $showtype->id);
    $response->assertOk()
        ->assertJson(['name' => $showtype->name]);
});
