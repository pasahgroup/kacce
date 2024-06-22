<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
             
             $table->bigIncrements('id'); 
$table->string('asset_name')->nullable();
$table->string('category')->nullable();
$table->string('subcategory')->nullable();
$table->string('model')->nullable();
$table->string('serial_no')->nullable();

$table->string('tag_no')->nullable();
$table->string('barcode')->nullable();
$table->string('photo')->nullable();

             $table->string('assign_date')->nullable();
             $table->string('location')->nullable();
               $table->string('owned_by')->nullable();
             $table->string('assigned_to')->nullable();

             $table->string('supply')->nullable();
             $table->decimal('bprice',10,2)->nullable();
             $table->string('warranty')->nullable();

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
        Schema::dropIfExists('assets');
    }
}
