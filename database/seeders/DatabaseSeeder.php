<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Alice KANKUYO',
            'email' => 'accountant@fmorwanda.org',
        ]);
        $this->call([
            DepartmentSeeder::class,
        ]);

        /* Application::factory(20)->create();*/
    }
}
