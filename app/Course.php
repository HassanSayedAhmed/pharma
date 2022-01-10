<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    const beginner = 1;
    const intermediate = 2;
    const high = 3;

    public static function levelsList() {
        return [
            Course::beginner => __('Beginner'),
            Course::intermediate => __('Itermediate'), 
            Course::high => __('High'),
        ];
    }

    public function getlevel() {
        if($this->levels == Course::beginner)
            return __('Beginner');
        if($this->levels == Course::intermediate)
            return __('Itermediate');
        if($this->levels == Course::high)
            return __('High');
       
    }
}
