<?php

class TableController extends Controller
{
    public $restful=true;

    function __construct()
    {
//        $this->filter('before', 'auth')->only(array('get_table','edit_employee'), 'belogs_to_emp','update_details');
    }


    function get_table()
    {
        return View::make('tables.table');
    }


    function get_details()
    {

        $customer=Employee::paginate(2);
        return View::make('tables.table')->with("employee", $customer);

    }

    function edit_employee($id=NULL)
    {
        return View::make('tables.edit')->with('employee',Employee::find($id));

    }


   public function update_detail()
    {
        $id=Input::get('Emp_id');
        echo $id;
        $emp=Employee::where('id', $id)->update(array(
            'email'=>Input::get('email'),
            'employeename'=>Input::get('empname')
        ));
//       $emp->save();
        return Redirect::to('EmployeeDetails');

    }




}