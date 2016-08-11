<?php


class EmployeeController extends Controller
{
    function get_new()
    {
    return View::make('employee.new');

    }

    function post_create()
    {
        $validate=Employee::validate(Input::all());

        if($validate->fails())
        {
            return Redirect::to_route('register')->with_errors($validate)->with_input();
        }
        else
        {
            Employee::create(array(
                'employeename' => Input::get('name'),
                'password' =>Hash::make(Input::get('password'))
            ));
            return Redirect::route('home')->with('message','Thanks for Rgitering');

        }
    }

    function get_login()
    {
        $employee=array(
            'employeename'=>Input::get('employeename'),
             'password'=>Input::get('password')
        );


        if(Auth::attempt($employee))
        {
            return Redirect::route('dashboard')->with('message','Welcome to Dashboard!!!');
        }
        else
        {
            return Redirect::route('home')->with('message','UserName Password Incorrect!!!');
        }
    }
}