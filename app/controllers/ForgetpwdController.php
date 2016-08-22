<?php

class ForgetpwdController extends Controller
{
    function get_forgetPwd()
    {
        return View::make('questions.forgetpwd');
    }

}