<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTransactionsToPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('property', function (Blueprint $table) {
            // $table->increments('id');
            // $table->string('name');
            $table->string('transaction')->after('name');
            $table->integer('category_id')->unsigned()->change();
            $table->foreign('category_id')->references('id')->on('categories');
            // $table->string('location');
            // $table->decimal('latitude', 10, 7);
            // $table->decimal('longitude', 10, 7);
            // $table->integer('price');
            // $table->string('status');
            // $table->longText('details');
            // $table->string('images');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('property', function (Blueprint $table) {
            //
        });
    }
}
