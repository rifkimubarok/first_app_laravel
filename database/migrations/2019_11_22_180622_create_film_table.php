<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->string('jenis');
            $table->string('genre');
            $table->integer('tahun');
            $table->decimal('rating',10,2);
            $table->timestamps();
        });

        Schema::table('film', function($table)
        {
            $table->integer('isDewasa')->after('rating');
            $table->string('tahun', 4)->change();
            $table->renameColumn('rating', 'penilaian');
            $table->dropColumn('isDewasa');
            $table->unique('judul');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film');
    }
}
