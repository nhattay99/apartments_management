<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomFeeCollectionHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_fee_collection_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_fee_collection_id');
            $table->dateTime('paid_date');
            $table->bigInteger('price');

            //FRK
            $table->foreign('room_fee_collection_id')->references('id')->on('room_fee_collections')->onDelete('cascade');

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
        Schema::dropIfExists('room_fee_collection_histories');
    }
}
