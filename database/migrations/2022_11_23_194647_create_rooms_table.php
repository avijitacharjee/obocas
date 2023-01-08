<?php

use App\Models\Property;
use App\Models\User;
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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Property::class)->nullable();
            $table->foreignIdFor(User::class)->nullable();
            $table->integer('room_type_id')->nullable();
            $table->string('room_name')->nullable();
            $table->boolean('smoking')->nullable();
            $table->integer('number_of_rooms')->nullable();
            $table->integer('bed_type_id')->nullable();
            $table->integer('number_of_beds')->nullable();
            $table->integer('number_of_guests')->nullable();
            $table->integer('room_size')->nullable();
            $table->string('room_measure_unit')->nullable();
            $table->string('room_price')->nullable();
            $table->boolean('discount_available')->nullable();
            $table->longText('images')->nullable();
            $table->boolean('is_booked')->nullable();
            $table->dateTime('booked_from')->nullable();
            $table->dateTime('booked_till')->nullable();
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
        Schema::dropIfExists('rooms');
    }
};
