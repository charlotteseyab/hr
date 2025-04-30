<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Add new roles to existing users table
        DB::statement("ALTER TABLE users MODIFY COLUMN role ENUM('job_seeker', 'employer', 'hr', 'superuser') DEFAULT 'job_seeker'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Revert back to original roles
        DB::statement("ALTER TABLE users MODIFY COLUMN role ENUM('job_seeker', 'employer') DEFAULT 'job_seeker'");
    }
};
