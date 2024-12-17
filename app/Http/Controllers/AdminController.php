<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        $donations = Donation::latest()->paginate(20);
        return view('admin.index', compact('donations'));
    }
}

