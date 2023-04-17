<?php

use App\Models\SettingModel;
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
        $data = [
            ['item' => 'app_name', 'value' => 'Mecoson Labs'],
            ['item' => 'smtp_host', 'value' => ''],
            ['item' => 'smtp_user', 'value' => ''],
            ['item' => 'smtp_password', 'value' => ''],
            ['item' => 'smtp_port', 'value' => ''],
            ['item' => 'smtp_from_email', 'value' => ''],
            ['item' => 'smtp_from_name', 'value' => ''],
            ['item' => 'is_maintanance', 'value' => '0']
        ];


        foreach ($data as $key => $value) {
            SettingModel::create($value);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        SettingModel::truncate();
    }
};
