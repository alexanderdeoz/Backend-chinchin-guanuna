<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::connection(env('DB_CONNECTION_APP'))->create('app.projects', function (Blueprint $table) {
    //         $table->id('code')->comment('my comment');
    //         $table->string('email')->comment('my comment');
    //         $table->date('date')->comment('my comment');
    //         $table->text('description')->comment('my comment')->nullable();
    //         $table->boolean('approved')->default(true)->comment('my comment');
    //         $table->string('title')->comment('my comment');
    //         $table->softDeletes()->comment('my comment');
    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // public function down()
    // {
    //     Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('app.projects');
    // }
}
