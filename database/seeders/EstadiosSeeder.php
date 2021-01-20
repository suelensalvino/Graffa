<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Estadios;
use Illuminate\Database\Seeder;

class EstadiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (User::all() as $user) {
        	Estadios::factory(2)->create([
        		'user_id' => $user->id
        	]);
        	
        }
    }
}
