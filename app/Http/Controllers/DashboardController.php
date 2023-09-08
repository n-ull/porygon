<?php

namespace App\Http\Controllers;

use App\Models\Draft;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $drafts = Draft::where('published', true)->paginate(10);
        return view('dashboard', compact('drafts'));
    }
}
