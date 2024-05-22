<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLodgetraineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lodgetrainees', function (Blueprint $table) {
               
               $table->bigIncrements('id');  

$table->integer('pin')->nullable();
$table->string('class')->nullable();
$table->string('session')->nullable();

             $table->string('first_name')->nullable();
             $table->string('middle_name')->nullable();
              $table->string('last_name')->nullable();

          $table->string('gender')->nullable();
          $table->string('no_topic')->nullable();
          $table->string('trained_topic')->nullable();

               $table->string('mobile_no')->nullable();
                $table->string('email')->nullable();            
           
               $table->string('photo')->nullable();
                   $table->string('lodge',64)->nullable();
                   $table->string('designation',64)->nullable();
                    $table->string('status')->nullable();
                    $table->integer('user_id')->unsigned();
                 
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
        Schema::dropIfExists('lodgetrainees');
    }
}
