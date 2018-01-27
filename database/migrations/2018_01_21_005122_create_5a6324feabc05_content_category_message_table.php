<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5a6324feabc05ContentCategoryMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('content_category_message')) {
            Schema::create('content_category_message', function (Blueprint $table) {
                $table->integer('content_category_id')->unsigned()->nullable();
                $table->foreign('content_category_id', 'fk_p_108814_109518_messag_5a6324feabcf1')->references('id')->on('content_categories')->onDelete('cascade');
                $table->integer('message_id')->unsigned()->nullable();
                $table->foreign('message_id', 'fk_p_109518_108814_conten_5a6324feabd7a')->references('id')->on('messages')->onDelete('cascade');
                
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
        Schema::dropIfExists('content_category_message');
    }
}
