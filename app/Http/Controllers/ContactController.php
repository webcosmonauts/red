<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function regular(Request $request) {
        $request->validate([
            'fio' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
        ]);

        return back();
    }

    public function order(Request $request) {
        return back();
    }

    public function partnership(Request $request) {
        return back();
    }
}
