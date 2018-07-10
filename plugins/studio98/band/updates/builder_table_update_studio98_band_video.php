<?php namespace Studio98\Band\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStudio98BandVideo extends Migration
{
    public function up()
    {
        Schema::table('studio98_band_video', function($table)
        {
            $table->string('title');
            $table->increments('id')->unsigned(false)->change();
            $table->string('link')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('studio98_band_video', function($table)
        {
            $table->dropColumn('title');
            $table->increments('id')->unsigned()->change();
            $table->text('link')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
