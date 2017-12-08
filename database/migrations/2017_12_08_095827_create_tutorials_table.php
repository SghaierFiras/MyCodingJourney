<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->enum('plateform', ['YouTube', 'Lynda', 'Coursera', 'Udemy', 'edX', 'Codeschool', 'Codeacademy', 'Treehouse', 'Udacity', 'W3schools', 'FreeCodeCamp', 'pluralsight', 'Microsoft Virtual Academy', 'Sololearn', 'programmr', 'Mozilla Developer Network', 'Eduonix', 'Laracast', 'Scotch', 'Tutplus', 'Tutorialzine', 'Video2Brain', 'openclassrooms', 'Skillshare', 'Alison', 'linuxAcademy', 'FutureLearn', 'Gymnasium', 'other']);
            $table->string('url');
            $table->date('date');
            $table->text('description');
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
        Schema::dropIfExists('tutorials');
    }
}
