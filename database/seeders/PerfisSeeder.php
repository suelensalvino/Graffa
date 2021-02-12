<?php

namespace Database\Seeders;
use App\Models\Perfis;
use App\Models\User;
use Illuminate\Database\Seeder;

class PerfisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        foreach ($users as $user) {

        	Perfis::factory(1)->create([
        		'user_id' => $user->id
        	]);

        }
    }
}