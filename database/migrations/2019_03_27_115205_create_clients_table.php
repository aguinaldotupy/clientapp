<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 70);
            $table->string('email', 70)->unique()->nullable();
            $table->string('ddd_phone',3)->nullable();
            $table->string('phone', 8)->nullable();
            $table->string('ddd_cel', 3)->nullable();
            $table->string('cel', 9)->nullable();
            $table->enum('prefer_contact', ['whatsapp', 'ligacao', 'email']);
            $table->text('description');
            $table->boolean('returno_client')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
