<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | My College Task'
        ];
        return view('pages/home', $data);
    }

    public function task()
    {
        $data = [
            'title' => 'Task Note'
        ];
        return view('task/index', $data);
    }
}
