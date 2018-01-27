<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1516447276MessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            if(Schema::hasColumn('messages', 'page_text')) {
                $table->dropColumn('page_text');
            }
            if(Schema::hasColumn('messages', 'excerpt')) {
                $table->dropColumn('excerpt');
            }
            
        });
Schema::table('messages', function (Blueprint $table) {
            if(! Schema::hasColumn('messages', 'deleted_at')) {
                $table->softDeletes();
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
        Schema::table('messages', function (Blueprint $table) {
            if(Schema::hasColumn('messages', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });
Schema::table('messages', function (Blueprint $table) {
                        $table->text('page_text')->nullable();
                $table->text('excerpt')->nullable();
                
        });

    }
}
