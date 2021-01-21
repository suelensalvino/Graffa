<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){

         \App\Models\User::factory(1)->create([
            'email' => 'usuario' . $i . '@email.com'
         ]);
        }
    }
}
