<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->boolean('sale');
            $table->boolean('rent');
            $table->string('status')->nullable();
            $table->unsignedBigInteger('owner');
            $table->unsignedBigInteger('owner_company')->nullable();
            $table->unsignedBigInteger('acquirer');
            $table->unsignedBigInteger('acquirer_company')->nullable();
            $table->unsignedBigInteger('property');
            $table->double('price');
            $table->double('tribute');
            $table->double('condominium');
            $table->unsignedInteger('due_date');
            $table->unsignedInteger('deadline');
            $table->date('start_at');

            $table->timestamps();

            $table->foreign('owner')->references('id')->on('clients')->onDelete('CASCADE');
            $table->foreign('owner_company')->references('id')->on('companies')->onDelete('CASCADE');
            $table->foreign('acquirer')->references('id')->on('clients')->onDelete('CASCADE');
            $table->foreign('acquirer_company')->references('id')->on('companies')->onDelete('CASCADE');
            $table->foreign('property')->references('id')->on('properties')->onDelete('CASCADE');
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
        Schema::dropIfExists('contracts');
    }
}
