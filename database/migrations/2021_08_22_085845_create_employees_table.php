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
            $table->id();
           
            // $table->integer('id_employee');
             $table->string('name');
            
             $table->string('gender');
             $table->date('date_of_birth');
             $table->date('hire_date');
             $table->string('education');
             $table->string('degree');
             $table->string('address');
             $table->string('email');
             $table->integer('phon_number');
            
            // $table->integer('section_id');
             $table->integer('jop_id');
             $table->integer('section_id')  ;
            
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
