<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::truncate();

        Department::create([
            'depart_id' => '1',
            'department' => 'IT',
        ]);

        Department::create([
            'depart_id' => '2',
            'department' => 'IELTS',
        ]);
        Department::create([
            'depart_id' => '3',
            'department' => 'Spoken',
        ]);
        Department::create([
            'depart_id' => '4',
            'department' => 'Employee',
        ]);
    }
}
