<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function viewBuyer() {
        $buyers = Buyer::all();

        return view('purchase-list', compact('buyers'));
    }
}
