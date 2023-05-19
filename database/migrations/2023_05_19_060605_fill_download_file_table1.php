<?php

use App\Models\DownloadsModel;
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
            ['item' => 'company_profile', 'value' => ''],
            ['item' => 'product_list', 'value' => ''],
            ['item' => 'product_brochure', 'value' => '']
        ];

        foreach ($data as $key => $value) {
            DownloadsModel::create($value);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $data = [
            ['item' => 'company_profile', 'value' => ''],
            ['item' => 'product_list', 'value' => ''],
            ['item' => 'product_brochure', 'value' => '']
        ];
        
        foreach ($data as $key => $value) {
            DownloadsModel::where('item',$value['item'])->delete();
        }
    }
};
