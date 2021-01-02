<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();

            /** perfil */
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->boolean('lessor')->nullable();
            $table->boolean('lessee')->nullable();
  
            /** data */
            $table->string('genre')->nullable();
            $table->string('document')->unique();
            $table->string('document_secondary', 20)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('civil_status')->nullable();
  
            /** income */
            $table->string('occupation')->nullable();
            $table->double('income', 10, 2)->nullable();
            $table->string('company_work')->nullable();
  
            /** address */
            $table->string('zipcode')->nullable();
            $table->string('street')->nullable();
            $table->string('number')->nullable();
            $table->string('complement')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
  
            /** contact */
            $table->string('cell')->nullable();
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
