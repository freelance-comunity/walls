<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBarbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('barbers', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name');
$table->string('last_name');
$table->string('photo');
$table->string('phone');
$table->string('address');
$table->date('birthday');
$table->integer('status');

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
        Schema::drop('barbers');
    }

}
