<?php

namespace App\Http\Controllers;

use App\Mail\OrderContactFormSubmitted;
use App\Mail\PartnershipContactFormSubmitted;
use App\Mail\RegularContactFormSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * @todo will be set through admin panel
     */
    const INBOX = 'noreply@red.org.pl';

    public function regular(Request $request) {
        $data = $request->validate([
            'fio' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
        ]);

        Mail::to(self::INBOX)->send(new RegularContactFormSubmitted($data));

        return back();
    }

    public function order(Request $request) {
        $data = $request->validate([
            'fio' => ['required'],
            'birthday' => ['required'],
            'email' => ['required', 'email'],
            'nationality' => ['required'],
            'languages' => ['required'],
            // 'cv' => ['required', 'file'],
        ]);

        Mail::to(self::INBOX)->send(new OrderContactFormSubmitted($data));

        return back();
    }

    public function partnership(Request $request) {
        $data = $request->validate([
            'company' => ['required'],
            'email' => ['required', 'email'],
            'link' => ['required'],
            'about_company' => ['required'],
            // 'logo' => ['required', 'image'],
        ]);

        Mail::to(self::INBOX)->send(new PartnershipContactFormSubmitted($data));

        return back();
    }
}
