<?php

namespace App\Http\Controllers\ShopOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index () {
    
    return view('shop_owner.dashboard');

    }

    public function service () {
    
        return view('shop_owner.service');
    
    }
    
    public function product () {
    
        return view('shop_owner.product');
    
    }

    public function feedback () {
    
        return view('shop_owner.feedback');
    
    }

    public function addservice () {
    
        return view('shop_owner.addservice');
    
    }
}
