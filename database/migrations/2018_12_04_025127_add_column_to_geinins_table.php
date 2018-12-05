<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToGeininsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('geinins', function (Blueprint $table) {
            $table->string('member_1')->after('name');
            $table->string('member_2')->after('member_1');
            $table->string('member_3')->after('member_2');
            $table->string('member_4')->after('member_3');
            $table->string('member_5')->after('member_4');
            $table->string('image')->after('member_5');
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
