<?php

namespace App\Http\Controllers;

use App\Models\Credit;
use Illuminate\Http\Request;

class CreditController extends Controller
{
    public function index()
    {
        $credits = Credit::where('user_id', auth()->id())->first();
        return view('credits.index', compact('credits'));
    }

    public function addCredits(Request $request)
    {
        $request->validate(['amount' => 'required|integer']);

        $credits = Credit::firstOrCreate(['user_id' => auth()->id()]);
        $credits->increment('amount', $request->amount);

        return back()->with('success', 'Credits added successfully.');
    }
}
