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
        $table->string('name', 50)->nullable(false);
        $table->string('email', 100)->unique()->nullable(false);
        $table->integer('age')->check('age >= 18 AND age <= 60');
        $table->enum('department', ['営業', '開発', '総務', '人事'])->nullable(false);
        $table->date('joined_date')->check('joined_date <= CURDATE()');
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
