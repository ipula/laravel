<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Employee extends BaseModel implements UserInterface, RemindableInterface
{
    use UserTrait, RemindableTrait;

    protected $table="employee";
    protected $fillable = array('employeename', 'password');
    public static $rules=array(
        'name'=>'required',
        'password'=>'required',
        'repassword'=>'required'
    );
    
}