<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1516462118PdfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pdfs', function (Blueprint $table) {
            
if (!Schema::hasColumn('pdfs', 'information')) {
                $table->text('information')->nullable();
                }
if (!Schema::hasColumn('pdfs', 'file')) {
                $table->string('file')->nullable();
                }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pdfs', function (Blueprint $table) {
            $table->dropColumn('information');
            $table->dropColumn('file');
            
        });

    }
}
