<?php

use App\Models\AdminUsers;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        AdminUsers::create([
            'name'      => 'Super Admin',
            'username'  => 'superadmin',
            'password'  => Hash::make('Admin@123'),
            'email'     => 'admin@mecoson.com',
            'mobile'    => NULL,
            'gender'    => 'Male',
            'rights'    => '',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
