<?php

namespace App\Http\Controllers;

use App\Models\Date;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $dates = Date::get();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->isoFormat('dddd');
        $today = date('d-m-Y');

        switch ($now) {
            case "Monday":
                $now = 'thứ 2';
                break;
            case "Tuesday":
                $now = 'thứ 3';
                break;
            case "Wednesday":
                $now = 'thứ 4';
                break;
            case "Thursday":
                $now = 'thứ 5';
                break;
            case "Friday":
                $now = 'thứ 6';
                break;
            case "Saturday":
                $now = 'thứ 7';
                break;
            case "Sunday":
                $now = 'chủ nhật';
                break;
            default:
        }
        return view('home.master', [
            'dates' => $dates,
            'now' => $now,
            'today' => $today
        ]);
    }
}
