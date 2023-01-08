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
        Schema::table('partners', function (Blueprint $table) {
            $table->dateTime('email_confirmed_at')->nullable();
            $table->dateTime('tool_implemented_at')->nullable();
            $table->dateTime('profile_completed_at')->nullable();
            $table->dateTime('visitor_generated_at')->nullable();
            $table->dateTime('booking_generated_at')->nullable();
            $table->dateTime('payment_info_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partners', function (Blueprint $table) {
            //
        });
    }
};
