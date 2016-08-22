<?php

 class QuestionController extends BaseController
 {
        public $restful=true;
        
        function get_index()
        {
            return View::make('questions.index');
//              $data=Employee::first();
//              var_dump($data->employeename);die;
        }


        
    }