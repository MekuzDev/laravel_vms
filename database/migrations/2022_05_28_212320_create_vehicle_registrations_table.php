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
        Schema::create('vehicle_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vuser_id')->constrained('vehicle_users','id')->onDelete('cascade');
            $table->foreignId('vmodel_id')->constrained('vehicle_types','id')->onDelete('cascade');
            $table->foreignId('vstatus_id')->constrained('vehicle_statuses','id')->onDelete('cascade');
            $table->string('regno',20)->unique();
            $table->unsignedDouble('purchase_amount');
            $table->date('purchase_date');
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
        Schema::dropIfExists('vehicle_registrations');
    }
};
