<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reg_user_id')->constrained('users')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->string('first_name')->notNull();
            $table->string('last_name')->notNull();
            $table->string('middle_name')->notNull();
            $table->date('birth_day')->notNull();
            $table->integer('phone_number')->notNull();
            $table->softDeletes();
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
        Schema::dropIfExists('patients');
    }
}
