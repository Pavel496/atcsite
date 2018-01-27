<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5a6324feadce5ContentTagMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('content_tag_message')) {
            Schema::create('content_tag_message', function (Blueprint $table) {
                $table->integer('content_tag_id')->unsigned()->nullable();
                $table->foreign('content_tag_id', 'fk_p_108815_109518_messag_5a6324feaddbf')->references('id')->on('content_tags')->onDelete('cascade');
                $table->integer('message_id')->unsigned()->nullable();
                $table->foreign('message_id', 'fk_p_109518_108815_conten_5a6324feade60')->references('id')->on('messages')->onDelete('cascade');
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_tag_message');
    }
}
