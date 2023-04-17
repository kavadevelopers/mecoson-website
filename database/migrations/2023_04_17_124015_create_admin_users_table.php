<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admin_users', function (Blueprint $table) {
            $table->id();
            $table->integer('admin_type')->default('0')->comment('0 Superadmin,1 admin');
            $table->text('name');
            $table->text('username');
            $table->text('password');
            $table->text('email');
            $table->text('mobile')->nullable();
            $table->text('gender');
            $table->text('rights')->nullable();
            $table->boolean('is_deleted')->default(false);
            $table->boolean('is_blocked')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_users');
    }
};
