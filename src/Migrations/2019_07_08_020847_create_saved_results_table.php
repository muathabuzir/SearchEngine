<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSavedResultsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('saved_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->text('comment')->nullable();
            $table->text('desc');
            $table->text('link');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        #Schema::dropIfExists('saved_results');
    }

}
