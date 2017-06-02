<?php

use Illuminate\Database\Seeder;

class PersonSheetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Agenda\Person::class,10)->create()->each(function($p) {
        	foreach (range(1,3) as $i) {
        		$p->sheets()->save(factory(Agenda\Sheet::class)->make());
        	}
        });
    }
}
