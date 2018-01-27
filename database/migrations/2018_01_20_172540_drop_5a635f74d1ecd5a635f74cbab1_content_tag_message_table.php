<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5a635f74d1ecd5a635f74cbab1ContentTagMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('content_tag_message');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('content_tag_message')) {
            Schema::create('content_tag_message', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('content_tag_id')->unsigned()->nullable();
            $table->foreign('content_tag_id', 'fk_p_108815_109518_messag_5a6324fea2804')->references('id')->on('content_tags');
                $table->integer('message_id')->unsigned()->nullable();
            $table->foreign('message_id', 'fk_p_109518_108815_conten_5a6324fea320f')->references('id')->on('messages');
                
                $table->timestamps();
                
            });
        }
    }
}
