<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\User;
use App\Models\Classification;

class DashboardController extends Controller
{
    public function index()
    {
        $totalDocuments = Document::count();
        $totalUsers = User::count();
        $totalClassifications = Classification::count();

        return view('admin.dashboard', compact('totalDocuments', 'totalUsers', 'totalClassifications'));
    }
}
