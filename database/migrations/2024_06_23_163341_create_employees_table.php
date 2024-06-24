<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
                      
             $table->bigIncrements('id'); 
$table->string('full_name')->nullable();
$table->string('phone')->nullable();
$table->string('email')->nullable();
$table->string('designation')->nullable();
$table->string('department')->nullable();
$table->string('location')->nullable();
$table->string('photo')->nullable();

             $table->string('reg_date')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
