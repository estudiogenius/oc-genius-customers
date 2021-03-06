<?php namespace Genius\Customers\Models;

use Model;

/**
 * Customer Model
 */
class Customer extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'genius_customers_customers';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'image' => '\System\Models\File'
    ];
    public $attachMany = [];

}