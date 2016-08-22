<?php

class ResetpwdController extends Controller
{
    function get_resetPwd()
    {
        return View::make('questions.resetpwd');
    }
}