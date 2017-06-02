<?php

$factory->define(Agenda\Sheet::class,function(Faker\Generator $faker){
	return [
		'name'=>$faker->sentence(1),
		'attr'=>$faker->sentence(rand(1,5)),
		'value'=>rand(1,100),
	];
});