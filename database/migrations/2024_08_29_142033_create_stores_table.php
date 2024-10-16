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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('adress', 100);
            $table->string('opening_hours', 100);
            $table->string('closed', 100);
            $table->float('latitude', 50);
            $table->float('longitude', 50);
            $table->string('call_option', 100);
            $table->string('ticket_system', 50);
            $table->string('comment', 1000);
            $table->integer('rating_total')->default(1);
            $table->integer('rating_count')->default(1);
            $table->string('photo_id')->default('https://res.cloudinary.com/duyuwjhzj/image/upload/v1727690797/sjtl7cfiwnifssdjnfub.jpg');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
