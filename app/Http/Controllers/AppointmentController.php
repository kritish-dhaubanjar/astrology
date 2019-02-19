<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Appointment;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth', ['except'=>'store']);
    }

    public function index()
    {
        return view('appointment')->with('appointments', Appointment::orderBy('checked','asc')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'contact' => 'required',
            'service' => 'required',
            'message' => 'required',
            'date' => 'required'
        ]);

        $appointment = new Appointment;
        $appointment->name = $request->name;
        $appointment->contact = $request->contact;

        if($request->has('email'))
            $appointment->email = $request->email;
        else
            $appointment->email = '-';
        $appointment->service = $request->service;
        $appointment->message = $request->message;
        $appointment->appointment_at = $request->date;
        $appointment->checked = false;
        $appointment->save();

        //Mail

        $data = [
            'name' => $appointment->name,
            'email' => $appointment->email,
            'contact' => $appointment->contact,
            'service' => $appointment->service,
            'msg' => $appointment->message,
        ];

        Mail::send('email.appointment', $data, function($message){
            $message->to('info@tantrajyotish.com', 'no-reply')->subject('A new appointment at tantrajyotish');
        });

        return redirect('/')->with('success', 'Appointment created successfully! We\'ll get in touch with very soon!');
    }

    /**
     * [Mark Appointment as checked.]
     * @param  [integer] $id [Appointment id]
     * @return [redirect]
     */
    public function check($id){
        $appointment = Appointment::findOrFail($id);
        $appointment->checked = true;
        $appointment->update();
        return redirect(route('appointment.index'))->with('success', 'Appointment #'.$id.' checked.');
    }

    /**
     * Count unchecked Appointments 
     * @return [integer]
     */
    public static function new(){
        return count( Appointment::where('checked','0')->get() );
    }

}
