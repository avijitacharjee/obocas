<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Country;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Country::class)->nullable();
            $table->integer('number_of_hotels')->nullable();
            $table->string('extra_beds_available',10)->nullable();
            $table->integer('max_extra_beds')->nullable();
            $table->float('cot_price')->nullable();
            $table->float('extra_bed_adult_price')->nullable();
            $table->string('top_room_all_11')->nullable();
            $table->string('property_images')->nullable();
            $table->string('policy_data')->nullable();
            $table->string('cancel_free_days_prior')->nullable();
            $table->string('cancel_guest_payment')->nullable();
            $table->string('nr_grace_period_opt_in')->nullable();
            $table->string('checkin_start_preset')->nullable();
            $table->string('checkin_end_preset')->nullable();
            $table->string('checkout_end_preset')->nullable();
            $table->string('children_allowed')->nullable();
            $table->string('pets_allowed')->nullable();
            $table->string('pets_fee')->nullable();
            $table->string('cc_accepted',10)->nullable();
            $table->string('invoice_recipient')->nullable();
            $table->string('company_name')->nullable();
            $table->string('invoice_same_address')->nullable();
            $table->string('invoice_cc1')->nullable();
            $table->string('invoice_city_name')->nullable();
            $table->string('invoice_address')->nullable();
            $table->string('invoice_zipcode')->nullable();
            $table->string('certified_legality')->nullable();
            $table->string('accept_box')->nullable();
            $table->string('proceed-open')->nullable();
            $table->string('property_type')->nullable();
            $table->integer('property_number_of_hotels')->nullable();
            $table->string('property_name')->nullable();
            $table->integer('stars')->nullable();
            $table->string('location_contact_name')->nullable();
            $table->string('phone',20)->nullable();
            $table->string('phone2',20)->nullable();
            $table->string('part_of_chain',10)->nullable();
            $table->string('chain_text')->nullable();
            $table->string('is_xml_property',10)->nullable();
            $table->string('channel_manager_name')->nullable();
            $table->string('address')->nullable();
            $table->string('address_supplement')->nullable();
            $table->string('cc1')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('roomtype_id',10)->nullable();
            $table->string('room_name_id',10)->nullable();
            $table->string('custom_room_name',30)->nullable();
            $table->string('no_smoking')->nullable();
            $table->integer('num_rooms')->nullable();
            $table->string('bedtype_id_SINGLE_1',20)->nullable();
            $table->string('bed_number_SINGLE_1',20)->nullable();
            $table->integer('num_guests')->nullable();
            $table->string('room_size',100)->nullable();
            $table->string('room_measunit')->nullable();
            $table->string('room_price_x_persons')->nullable();
            $table->string('discount_avail')->nullable();
            $table->string('parking_available')->nullable();
            $table->string('parking_space')->nullable();
            $table->string('parking_location')->nullable();
            $table->string('parking_res')->nullable();
            $table->string('parking_price')->nullable();
            $table->string('breakfast_included')->nullable();
            $table->string('breakfast_price')->nullable();
            $table->string('breakfast_type')->nullable();
            $table->string('staff_language')->nullable();
            $table->string('facility_wifi')->nullable();
            $table->string('facility_restaurant')->nullable();
            $table->string('facility_room_service',10)->nullable();
            $table->string('facility_front_desk',10)->nullable();
            $table->string('facility_garden',10)->nullable();
            $table->string('facility_non_smoking_rooms',10)->nullable();
            $table->string('facility_family_rooms',10)->nulllable();
            $table->string('facility_swimming_pool',10)->nulllable();
            $table->string('cot_allowed',10)->nulllable();
            $table->string('extra_bed_adult_allowed',10)->nulllable();
            $table->string('top_room_all_5',10)->nulllable();
            $table->string('top_room_all_81',10)->nulllable();
            $table->string('room_all_138',10)->nulllable();
            $table->string('room_all_140',10)->nulllable();
            $table->string('room_all_139',10)->nulllable();
            $table->string('room_all_146',10)->nulllable();
            $table->string('room_all_141',10)->nulllable();
            $table->string('room_all_5',10)->nulllable();
            $table->string('room_all_100',10)->nulllable();
            $table->string('room_all_69',10)->nulllable();
            $table->string('checkin_start')->nullable();
            $table->string('cc_id')->nulllable();
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
        Schema::dropIfExists('properties');
    }
};
