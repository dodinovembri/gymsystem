<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlternativeModel;
use App\Models\CriteriaModel;
use App\Models\UserAccountModel;
use App\Models\NewsModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['total_alternative'] = AlternativeModel::count();
        $data['total_criteria'] = CriteriaModel::count();
        $data['total_users'] = UserAccountModel::count();
        $data['total_news'] = NewsModel::count();

        return view('home', $data);
    }
}
