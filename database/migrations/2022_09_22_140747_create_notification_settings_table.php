<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->nullable();
            $table->boolean('get_email_notification')->nullable();
            $table->time('email_from_time')->nullable();
            $table->time('email_to_time')->nullable();
            $table->string('email')->nullable();
            $table->boolean('get_sms_notification')->nullable();
            $table->time('sms_from_time')->nullable();
            $table->time('sms_to_time')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('get_other_notifications')->nullable();
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
        Schema::dropIfExists('notification_settings');
    }
};
