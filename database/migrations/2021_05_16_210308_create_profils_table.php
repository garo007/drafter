<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id')->unique();
            $table->string('profil_photo')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('passport_photo')->nullable();
            $table->string('snils')->nullable();
            $table->string('snils_photo')->nullable();
            $table->string('selfi_pasport')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profils');
    }
}
