<?php

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmloyeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->binary('image');
            $table->string('fullname', 255);
            $table->string('username', 255);
            $table->string('password', 255);
            $table->string('nip', 20);
            $table->string('email', 255)->unique();
            $table->string('phone', 20);
            $table->text('address');
            $table->enum('department', ['Operational', 'Technical']);
            $table->enum('role', ['admin', 'employee']);
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
        Schema::dropIfExists('emloyees');
    }
}
