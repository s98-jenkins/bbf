<?php namespace Studio98\Band\Models;

use Model;

/**
 * Model
 */
class Press extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'studio98_band_press';

     public $attachOne = [

        'poster' => 'System\Models\File'

    ];
}
