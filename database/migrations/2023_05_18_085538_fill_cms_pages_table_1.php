<?php

use App\Models\CMSPagesModel;
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
            ['slug' => 'current-jobs', 'name' => 'Current Job Openings','description' => '']
        ];


        foreach ($data as $key => $value) {
            CMSPagesModel::create($value);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $data = [
            ['slug' => 'current-jobs']
        ];
        
        foreach ($data as $key => $value) {
            CMSPagesModel::where('slug',$value['slug'])->delete();
        }
    }
};
