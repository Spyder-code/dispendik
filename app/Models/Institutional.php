<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Institutional
 * @package App\Models
 * @version April 2, 2021, 9:35 am UTC
 *
 * @property string $name
 * @property string $phone
 * @property string $address
 * @property string $npwp
 * @property string $file
 * @property string $active
 * @property integer $status
 */
class Institutional extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'institutionals';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'phone',
        'address',
        'npwp',
        'file',
        'active',
        'status',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'npwp' => 'string',
        'file' => 'string',
        'active' => 'date',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'npwp' => 'required',
        'file' => 'required'
    ];


}
