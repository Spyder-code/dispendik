<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Book
 * @package App\Models
 * @version April 2, 2021, 9:27 am UTC
 *
 * @property string $title
 * @property string $author
 * @property integer $publication
 */
class Book extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'books';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'author',
        'publication'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'author' => 'string',
        'publication' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'author' => 'required',
        'publication' => 'required'
    ];

    
}
