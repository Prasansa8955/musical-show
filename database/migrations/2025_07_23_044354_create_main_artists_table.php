<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('main_artists', function (Blueprint $table) {
        $table->id();
        $table->string('artist_name');
        $table->string('email');
        $table->string('contact_number');
        $table->decimal('payment', 8, 2);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_artists');
    }
};
