<?php namespace Studio98\Band\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStudio98BandPartner extends Migration
{
    public function up()
    {
        Schema::table('studio98_band_partner', function($table)
        {
            $table->string('name');
            $table->increments('id')->unsigned(false)->change();
            $table->string('link')->change();
        });
    }
    
    public function down()
    {
        Schema::table('studio98_band_partner', function($table)
        {
            $table->dropColumn('name');
            $table->increments('id')->unsigned()->change();
            $table->string('link', 191)->change();
        });
    }
}
