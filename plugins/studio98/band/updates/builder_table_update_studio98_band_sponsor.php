<?php namespace Studio98\Band\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStudio98BandSponsor extends Migration
{
    public function up()
    {
        Schema::table('studio98_band_sponsor', function($table)
        {
            $table->text('category');
        });
    }
    
    public function down()
    {
        Schema::table('studio98_band_sponsor', function($table)
        {
            $table->dropColumn('category');
        });
    }
}
