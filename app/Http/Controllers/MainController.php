<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(Request $request):View
    {
        return View('index');
    }
    public function capabilities(Request $request):View
    {
        return View('capabilities');
    }
    public function work(Request $request):View
    {
        return View('work');
    }
    public function events(Request $request):View
    {
        return View('events');
    }
    public function team(Request $request):View
    {
        return View('team');
    }
    public function project(Request $request):View
    {
        return View('project');
    }
    public function portfolio(Request $request, $projectId):View
    { 
        return View('projects.'.$projectId);
    }
}
