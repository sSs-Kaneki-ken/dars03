<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard1(){
        return view("admin/dashboard.adminDashboard");
    }
    public function adminDashboard2(){
        return view("admin/dashboard.adminDashboard2");
    }
    public function adminDashboard3(){
        return view("admin/dashboard.adminDashboard3");
    }

    public function iframePage(){
        return view("admin/iframe.iframe");
    }

    public function WidgetsPage(){
        return view("admin/pages.widgets");
    }
    public function KanbanPage(){
        return view("admin/pages.kanban");
    }
    public function GelleryPage(){
        return view("admin/pages.gallery");
    }
    public function CalendarPage(){
        return view("admin/pages.calendar");
    }
}
