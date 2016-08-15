<?php

class ProfileController extends Controller
{

    public function get_profile()
    {
        return View::make('profile.profile');
    }

}