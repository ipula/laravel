<?php

class DashboardController extends Controller
{
    function get_new()
    {
        return View::make('dashboard.dashboard');
    }

}