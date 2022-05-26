<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* Creating a table called vehicle_users with the following columns:
        - id
        - fullname
        - location_id
        - created_at
        - updated_at */
        Schema::create('vehicle_users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname',255);
           /* Creating a foreign key constraint on the location_id column. */
            $table->foreignId('location_id')->constrained('locations','id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_users');
    }
};
