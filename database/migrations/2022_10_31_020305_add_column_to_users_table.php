<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('kana')->after('name');
            $table->string('post_code')->after('email');
            $table->string('prefecture')->after('post_code');
            $table->string('city')->after('prefecture');
            $table->string('address')->after('city');
            $table->string('buil_name')->after('address');
            $table->boolean('role')->after('buil_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('kana');
        $table->dropColumn('post_code');
        $table->dropColumn('prefecture');
        $table->dropColumn('city');
        $table->dropColumn('address');
        $table->dropColumn('buil_name');
        $table->dropColumn('role');
        });
    }
}
