<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        factory(App\Role::class, 10)->states('Program Manager')->create();
        factory(App\Role::class, 100)->states('Project Manager')->create();
        factory(App\Role::class, 1000)->states('Team Leader')->create();
        factory(App\Role::class, 10000)->states('Senior Developer')->create();
        factory(App\Role::class, 15000)->states('Python Developer')->create();
        factory(App\Role::class, 10000)->states('PHP Developer')->create();
        factory(App\Role::class, 15000)->states('JS Developer')->create();


}
}
