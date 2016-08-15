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
            return Redirect::route('register')->withErrors($validate)->withInput();
        }
        else
        {
            Employee::create(array(
                'email'=>Input::get('email'),
                'employeename' => Input::get('name'),
                'password' =>Hash::make(Input::get('password'))
            ));
            return Redirect::route('home')->with('message','Thanks for Registering');

        }
    }

    function get_login()
    {
        $employee=array(
            'email'=>Input::get('email'),
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

    function get_logout()
    {
        if(Auth::check())
        {
            Auth::logout();
            return Redirect::route('home')->with('message','Now you are LogOut!!!!');
        }
        else
        {
            return Redirect::route('dashboard');
        }
    }

    public function reset_pwd()
    {
        $user = Auth::user();
        $rules = array(
            'password1' => 'required',
            'newpassword' => 'required',
            'retypepassword'=>'required|same:newpassword'
        );
        $pwd=Input::has('password1');
//        echo $pwd;
        $validator = Validator::make(Input::all(),$rules);

//        if ($validator->fails())
//        {
//            return Redirect::to('profile')->withErrors($validator);
//        }
//        else
//        {
            if (!Hash::check(Input::get('password1'), $user->password))
            {
                echo $user->password;
                return Redirect::to('profile')->withErrors('Your old password does not match');
            }
            else
            {
                $user->password = Hash::make(Input::get('newpassword'));
                $user->save();
                return Redirect::to('dashboard')->withMessage("Password have been changed");
            }
        }
//    }
}