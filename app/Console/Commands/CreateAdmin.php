<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateAdmin extends Command
{
    protected $signature = 'admin:create {email} {name} {--role=} {--password=}';
    protected $description = 'Create an admin user (HR or superuser)';

    public function handle()
    {
        $email = $this->argument('email');
        $name = $this->argument('name');
        $role = $this->option('role') ?? 'superuser';
        $password = $this->option('password') ?? Str::random(12);

        if (!in_array($role, ['hr', 'superuser'])) {
            $this->error('Role must be either "hr" or "superuser"');
            return 1;
        }

        if (User::where('email', $email)->exists()) {
            $this->error('User with this email already exists');
            return 1;
        }

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'role' => $role,
        ]);

        $this->info("{$role} user created successfully!");
        $this->info("Email: {$email}");
        $this->info("Password: {$password}");

        return 0;
    }
} 