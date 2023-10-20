<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Portal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phoneNumber')->unique()->comment('Phone Number')->nullable();
            $table->enum('status',['WhiteListed','BlackListed'])->index()->default('WhiteListed')->comment('Status')->nullable();
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
        Schema::dropIfExists('Portal');
    }
}
