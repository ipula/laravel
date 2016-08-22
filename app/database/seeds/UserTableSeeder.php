<?php

class UserTableSeeder extends AcmeSeeder
{
    protected $table="employee";

    public function getData()
    {
         return[
            ['employeename'=>'Rana','email'=>'rana@gmail.com','password'=>Hash::make('123')],['employeename'=>'ipula','email'=>'ipula@gmail.com','password'=>Hash::make('123')]

        ];


    }
}