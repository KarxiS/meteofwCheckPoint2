<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('station_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('station_id')->constrained('stanice');
            $table->float('temperature');
            $table->float('humidity');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('station_data');
    }
};
