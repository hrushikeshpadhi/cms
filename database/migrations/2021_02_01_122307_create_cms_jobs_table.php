<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('compname');
            $table->date('assndate');
            $table->string('exprenc');
            $table->string('ctc');
            $table->string('noticperiod');
            $table->string('locn');
            $table->string('userid');
            $table->string('description');
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
        Schema::dropIfExists('cms_jobs');
    }
}
