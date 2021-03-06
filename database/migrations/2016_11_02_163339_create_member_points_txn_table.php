<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberPointsTxnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_points_txn', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('member_id');
            $table->integer('loyalty_config_id');
            $table->integer('member_points_id');
            $table->integer('points');
            $table->datetime('expiry');
            $table->string('remarks')->nullable();

            $table->bigInteger('created_by');
            $table->bigInteger('last_updated_by')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('member_points_txn');
    }
}
