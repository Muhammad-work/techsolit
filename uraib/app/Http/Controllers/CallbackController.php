<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CallbackMail;

class CallbackController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'h_name' => 'required|string|max:255',
            'h_email' => 'required|email',
            'h_num' => 'required',
            'h_msg' => 'nullable|string',
        ]);

        // Send email
        Mail::to('novacreation.uk@gmail.com')->send(new CallbackMail($data));

        return back()->with('success', 'Thank you! Your request has been sent.');
    }
}
