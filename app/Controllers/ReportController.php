<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ReportController extends BaseController
{
    public function index()
    {
        return view('/admin/report/index');
    }
}
