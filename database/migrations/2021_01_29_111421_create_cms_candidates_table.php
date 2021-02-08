<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('unique_id');
            $table->date('applied_date');
            $table->string('candidate_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('alt_email');
            $table->string('phone');
            $table->string('alt_phone');
            $table->string('qualification');
            $table->string('expc');
            $table->string('currnt_comp');
            $table->string('work_locn');
            $table->string('currnt_ctc');
            $table->string('exp_ctc');
            $table->string('skill');
            $table->string('pan_card');
            $table->string('resume');
            $table->string('notic_period');
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
        Schema::dropIfExists('cms_candidates');
    }
}
