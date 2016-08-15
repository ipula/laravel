<?php

class TableController extends Controller
{
    function get_table()
    {
        return View::make('tables.table');
    }

    function get_details()
    {

        $customer=Employee::all();
        return View::make('tables.table')->with("employee", $customer);

    }
}