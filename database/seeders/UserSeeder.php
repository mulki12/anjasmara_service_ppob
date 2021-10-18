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
            'name'      => 'Administrator Service PPOB',
            'email'     => 'admin-ppob@anjasmara.id',
            'password'  => bcrypt('4njasmara')
        ]);
    }
}
