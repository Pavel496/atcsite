<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5a636028c369bRelationshipsToPdfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pdfs', function(Blueprint $table) {
            if (!Schema::hasColumn('pdfs', 'created_by_id')) {
                $table->integer('created_by_id')->unsigned()->nullable();
                $table->foreign('created_by_id', '109583_5a635fbea13cf')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('pdfs', function(Blueprint $table) {
            if(Schema::hasColumn('pdfs', 'created_by_id')) {
                $table->dropForeign('109583_5a635fbea13cf');
                $table->dropIndex('109583_5a635fbea13cf');
                $table->dropColumn('created_by_id');
            }
            
        });
    }
}
