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
        User::create([
            'name'=>'Bejo',
            'email'=>'bejo@gmail.com',
            'password'=>bcrypt('namakubejo')
        ]);
    }
}
