<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Employee extends BaseModel implements UserInterface, RemindableInterface
{
    use UserTrait, RemindableTrait;

    protected $table="employee";

    protected $fillable = array('email','name', 'password','repassword');
    public static $rules=array(
        'email'=>'required',
        'name'=>'required',
        'password'=>'required',
        'repassword'=>'required|same:password'

    );


}