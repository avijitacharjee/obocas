<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Property;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Property::class);
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email',100)->nullable();
            $table->string('is_stayer',10)->nullable();
            $table->string('travel_purpose',100)->nullable();
            $table->string('smoking_preference',10)->nullable();
            $table->string('guest_fullname')->nullable();
            $table->string('guest_email')->nullable();
            $table->mediumText('special requests')->nullable();
            $table->string('free_parking_request')->nullable();
            $table->string('want_invoice')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('card_name')->nullable();
            $table->string('card_type')->nullable();
            $table->string('card_number')->nullable();
            $table->string('card_expiry_date')->nullable();
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
        Schema::dropIfExists('bookings');
    }
};
