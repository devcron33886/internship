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
                'name' => 'Early Childhood Program',
                'created_at' => now(),
            ],
            [
                'name' => 'TVET',
                'created_at' => now(),
            ],
            [
                'name' => 'Microcredit',
                'created_at' => now(),
            ],
            [
                'name' => 'Basic Education and Dropout Control',
                'created_at' => now(),
            ],
        ];
        Department::insert($projects);
    }
}
