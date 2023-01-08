<?php

use App\Models\Property;
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
        Schema::create('property_paths', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Property::class);
            $table->string('airport_name')->nullable();
            $table->string('transport_type')->nullable();
            $table->string('to')->nullable();
            $table->integer('departs_every')->nullable();
            $table->string('journey_time')->nullable();
            $table->integer('fare')->nullable();
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
        Schema::dropIfExists('property_paths');
    }
};
