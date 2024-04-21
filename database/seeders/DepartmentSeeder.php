<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'name' => 'Masonry',
                'created_at' => now(),
            ],
            [
                'name' => 'Hairdressing',
                'created_at' => now(),
            ],
            [
                'name' => 'Tailoring',
                'created_at' => now(),
            ],
            [
                'name' => 'Welding',
                'created_at' => now(),
            ],
            [
                'name' => 'Autoengine Repair',
                'created_at' => now(),
            ],
            [
                'name' => 'Multimedia',
                'created_at' => now(),
            ],
            [
                'name' => 'Plumbing',
                'created_at' => now(),
            ],
            [
                'name' => 'Carpentry',
                'created_at' => now(),
            ],
            [
                'name' => 'Electricity',
                'created_at' => now(),
            ],
            [
                'name' => 'Culnary Art',
                'created_at' => now(),
            ],
            [
                'name' => 'Leather Processing',
                'created_at' => now(),
            ],

        ];
        Department::insert($projects);
    }
}
