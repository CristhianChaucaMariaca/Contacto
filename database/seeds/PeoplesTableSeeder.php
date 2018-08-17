<?php

use Illuminate\Database\Seeder;

class PeoplesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\People::class,100)->create()->each(function(App\People $people){
        	$people->tags()->attach([
        		rand(1,15),
        		rand(16,32),
        		rand(33,44),
        		rand(45,50),
        	]);
        });
    }
}
