<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerozn_contact_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('object');
            $table->string('email');
            $table->string('company')->nullable();
            $table->string('phone')->nullable();
            $table->text('message');
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
        Schema::dropIfExists('kerozn_contact_requests');
    }
}
