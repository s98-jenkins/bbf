<?php namespace Studio98\Band\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStudio98BandPartner2 extends Migration
{
    public function up()
    {
        Schema::table('studio98_band_partner', function($table)
        {
            $table->string('link')->change();
            $table->string('name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('studio98_band_partner', function($table)
        {
            $table->string('link', 191)->change();
            $table->string('name', 191)->change();
        });
    }
}
