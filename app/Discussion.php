<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 15/11/24
 * Time: 下午2:18
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected  $fillable = ['title','body','user_id',"last_user_id"];
}