<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1516453986MessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            if(! Schema::hasColumn('messages', 'deleted_at')) {
                $table->softDeletes();
            }
            
        });
Schema::table('messages', function (Blueprint $table) {
            
if (!Schema::hasColumn('messages', 'pdf_file')) {
                $table->string('pdf_file')->nullable();
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
            $table->dropColumn('pdf_file');
            
        });
Schema::table('messages', function (Blueprint $table) {
            if(Schema::hasColumn('messages', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });

    }
}
