<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('lname')->after('name');
            $table->integer('department')->after('lname');
            $table->enum('gender', ['male', 'female'])->after('department');
            $table->enum('type', ['Teacher','Alumni', 'Student'])->after('gender');
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
            //
            Schema::dropIfExists('users');
        });
    }
};
