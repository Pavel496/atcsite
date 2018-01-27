<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5a635f74cd3575a635f74cbab1ContentCategoryMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('content_category_message');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('content_category_message')) {
            Schema::create('content_category_message', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('content_category_id')->unsigned()->nullable();
            $table->foreign('content_category_id', 'fk_p_108814_109518_messag_5a6324fd3ab29')->references('id')->on('content_categories');
                $table->integer('message_id')->unsigned()->nullable();
            $table->foreign('message_id', 'fk_p_109518_108814_conten_5a6324fd3b3d2')->references('id')->on('messages');
                
                $table->timestamps();
                
            });
        }
    }
}
