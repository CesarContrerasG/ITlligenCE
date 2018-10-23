<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rfc')->unique();
            $table->string('razonsoc');
            $table->boolean('enabled')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });

        //Domicilios
        Schema::create('companies_address', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned();
            $table->string('address_type'); //1->Fiscal, 2->Planta Productiva, 3->Almacen, 4->Corporativo, 5->Otro
            $table->text('address');
            $table->string('outdoor',10);
            $table->string('interior',10)->nullable();
            $table->string('colony',200);
            $table->string('location',200)->nullable();
            $table->string('town',200)->nullable();
            $table->string('state',200);
            $table->string('pcode',10);
            $table->string('country',3);
            $table->string('contact',20)->nullable();
            $table->date('register');
            $table->integer('status')->default(1);
            $table->foreign('company_id')->references('id')->on('companies')->onUpdate('cascade')->onDelete('cascade');
        });        

        // Representatntes Legales
        Schema::create('companies_legal_representative', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned();
            $table->string('mane');
            $table->string('last_mane');
            $table->string('mother_last_mane');
            $table->string('rfc',13);
            $table->string('curp',18)->nullable();
            $table->string('email');
            $table->date('initial_date');
            $table->date('final_date')->nullable();
            $table->integer('status')->default(1);
            $table->foreign('company_id')->references('id')->on('companies')->onUpdate('cascade')->onDelete('cascade');          
        });


        //Permisos (IMMEX,PROSEC,...)

        Schema::create('companies_permits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned();
            $table->string('permit_mane');
            $table->string('permit_description');
            $table->string('permit_number');
            $table->date('initial_date');
            $table->date('final_date')->nullable();
            $table->integer('status')->default(1);
            $table->foreign('company_id')->references('id')->on('companies')->onUpdate('cascade')->onDelete('cascade');                        
        });

            // Create table for associating companies to users (Many To Many Polymorphic)
        Schema::create('companies_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('company_id')->unsigned();
            $table->string('user_type');
            $table->foreign('company_id')->references('id')->on('companies')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['user_id', 'company_id', 'user_type']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies_address');
        Schema::dropIfExists('companies_legal_representative');
        Schema::dropIfExists('companies_permits');
        Schema::dropIfExists('companies_user');
        Schema::drop('companies');
    }
}
