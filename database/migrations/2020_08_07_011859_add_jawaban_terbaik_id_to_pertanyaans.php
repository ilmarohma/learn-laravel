<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJawabanTerbaikIdToPertanyaans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pertanyaans', function (Blueprint $table) {
            $table->unsignedBigInteger('jawaban_terbaik_id');
            $table->foreign('jawaban_terbaik_id')->references('id')->on('jawabans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pertanyaans', function (Blueprint $table) {
            $table->dropForeign(['jawaban_terbaik_id']);
            $table->dropColumn(['jawaban_terbaik_id']);
        });
    }
}
