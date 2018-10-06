<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Student
 *
 * @package App
 * @property integer $student_id
 * @property string $first_name
 * @property string $last_name
 * @property integer $age
 * @property string $email
*/
class Student extends Model
{
    use SoftDeletes;

    protected $fillable = ['student_id', 'first_name', 'last_name', 'age', 'email'];
    protected $hidden = [];
    
    

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setStudentIdAttribute($input)
    {
        $this->attributes['student_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setAgeAttribute($input)
    {
        $this->attributes['age'] = $input ? $input : null;
    }
    
}
