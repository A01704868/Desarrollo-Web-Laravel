<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->createAdmin();

        $this->call([
            RolSeeder::class,
            CategoriaSeeder::class
        ]);
    }
    public function createAdmin()
    {
        $user = new User;
        $user->name = 'Administrador';
        $user->email = 'admin@test.com';
        $user->password = 'admin';
        $user->role = 'admin';
        $user->save();
    }
}
