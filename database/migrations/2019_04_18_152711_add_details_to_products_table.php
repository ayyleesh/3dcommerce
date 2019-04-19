<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetailsToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
          $table->string('cpu');
          $table->string('memory');
          $table->string('screen');
          $table->string('size');
          $table->string('weight');
          $table->string('power');
          $table->string('batterylife');
          $table->text('history');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['cpu', 'memory', 'screen', 'size', 'weight', 'power', 'batterylife', 'history']);
        });
    }
}
