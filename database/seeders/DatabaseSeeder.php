<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    //Commit init
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //$this->createClients(5);
    }
    private function createClients($amount){
        for($amount; $amount!=0; $amount--)
            app('App\Http\Controllers\firebaseLogic')->_create("clients", \App\Models\client::factory()->definition());
    }
}
