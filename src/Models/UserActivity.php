<?php

namespace Vsynch\ActivityTracking\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Created by PhpStorm.
 * User: developer
 * Date: 26/11/18
 * Time: 4:50 PM
 */
class UserActivity extends \Illuminate\Database\Eloquent\Model
{

    use SoftDeletes;

    protected $table = 'user_activity';
    /**
     *
     * This is only a sample model to recreate the real scenario
     *
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'activity'
    ];

    public $dates = ['created_at','deleted_at'];

    public function user(){
        return $this->morphTo();
    }
}
