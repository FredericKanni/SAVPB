<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('echanges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('commentaire')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_client');
            $table->unsignedBigInteger('id_echange_type');

           $table->timestamps();
        });

        Schema::table('echanges', function($table) {
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_client')->references('id')->on('clients');
            $table->foreign('id_echange_type')->references('id')->on('echange_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {


        Schema::table('echanges', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
           // $table->dropForeign(['user_id']);
            $table->dropIfExists('id_user');
            $table->dropIfExists('id_client');
            $table->dropIfExists('id_type');

           Schema::enableForeignKeyConstraints();
       });



        Schema::dropIfExists('echanges');
    }
}
