<?php

$factory->define(Agenda\Person::class,function(Faker\Generator $faker){
	return [
		'firstname'=>$faker->firstName,
		'lastname'=>$faker->lastName,
		'nickname'=>$faker->name,
		'birthdate'=>$faker->date,
		'email'=>$faker->email,
		'home'=>rand(1,100),
		'mobile'=>rand(1,100),
		'work'=>rand(1,100),
	];
});