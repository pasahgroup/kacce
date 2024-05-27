<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssigneesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignees', function (Blueprint $table) {
                        $table->bigIncrements('id');  

$table->integer('student_id')->nullable();
$table->string('lodge')->nullable();
$table->string('designation')->nullable();

             $table->string('date')->nullable();
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
        Schema::dropIfExists('assignees');
    }
}
