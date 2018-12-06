<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeGeininsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('geinins', function (Blueprint $table) {
            $table->string('member_1')->nullable()->change();
            $table->string('member_2')->nullable()->change();
            $table->string('member_3')->nullable()->change();
            $table->string('member_4')->nullable()->change();
            $table->string('member_5')->nullable()->change();
            $table->string('image')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('geinins', function (Blueprint $table) {
            //
        });
    }
}
