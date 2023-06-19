<?php

namespace App\Http\Controllers;

use App\Models\Homework;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Carbon\Carbon;
class HomeworkController extends Controller
{
    public function index(): View
    {
        $homeworks = Homework::query()
        ->where('active', '=', 1)
        ->whereDate('published_at', '<', Carbon::now())
        ->orderBy('published_at', 'desc')
        ->paginate(10);

        return view('homework', compact('homeworks'));
    }

}
