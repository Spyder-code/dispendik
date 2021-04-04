<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Teacher
 * @package App\Models
 * @version April 2, 2021, 9:30 am UTC
 *
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property integer $book_id
 */
class Teacher extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'teachers';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'address',
        'phone',
        'book_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'book_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'address' => 'required',
        'phone' => 'required',
        'book_id' => 'required'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
