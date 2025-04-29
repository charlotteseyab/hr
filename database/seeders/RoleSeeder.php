<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        Role::create(['name' => 'employer']);
        Role::create(['name' => 'job_seeker']);
        Role::create(['name' => 'hr']);
        Role::create(['name' => 'superuser']);
    }
} 