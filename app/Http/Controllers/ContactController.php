<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'message' => ['required', 'min:5'],
        ]);
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;

        Mail::to(config('config_page.email'))->send(new SendMail($name, $email, $phone, $message));
        return ResponseFormatter::success(null, 'Success');
    }
}
