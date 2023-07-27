<?php

use App\Models\Subdistrict;
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
        Schema::create('harvest_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('year');
            $table->unsignedFloat('land_area', 9, 1);
            $table->unsignedFloat('harvested_area', 9, 1);
            $table->unsignedFloat('productivity', 9, 2);
            $table->unsignedFloat('yield', 18, 4);
            $table->timestamps();

            $table->foreignIdFor(Subdistrict::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('harvest_data');
    }
};
