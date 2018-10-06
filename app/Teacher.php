<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Teacher
 *
 * @package App
 * @property integer $reg_number
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $qulification
*/
class Teacher extends Model
{
    use SoftDeletes;

    protected $fillable = ['reg_number', 'first_name', 'last_name', 'email', 'qulification'];
    protected $hidden = [];
    
    

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setRegNumberAttribute($input)
    {
        $this->attributes['reg_number'] = $input ? $input : null;
    }
    
}
