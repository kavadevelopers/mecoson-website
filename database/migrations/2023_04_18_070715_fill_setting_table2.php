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
            ['item' => 'web_mobile', 'value' => ''],
            ['item' => 'web_email', 'value' => ''],
            ['item' => 'web_address', 'value' => ''],
            ['item' => 'web_google_map_url', 'value' => ''],
            ['item' => 'so_facebook_url', 'value' => ''],
            ['item' => 'so_instagram_url', 'value' => ''],
            ['item' => 'so_twitter_url', 'value' => ''],
            ['item' => 'so_linkedin_url', 'value' => ''],
            ['item' => 'so_youtube_url', 'value' => ''],
            ['item' => 'so_skype_url', 'value' => ''],
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
        $data = [
            ['item' => 'web_mobile', 'value' => ''],
            ['item' => 'web_email', 'value' => ''],
            ['item' => 'web_address', 'value' => ''],
            ['item' => 'web_google_map_url', 'value' => ''],
            ['item' => 'so_facebook_url', 'value' => ''],
            ['item' => 'so_instagram_url', 'value' => ''],
            ['item' => 'so_twitter_url', 'value' => ''],
            ['item' => 'so_linkedin_url', 'value' => ''],
            ['item' => 'so_youtube_url', 'value' => ''],
            ['item' => 'so_skype_url', 'value' => ''],
        ];


        foreach ($data as $key => $value) {
            SettingModel::where('item',$value['item'])->delete();
        }
    }
};
