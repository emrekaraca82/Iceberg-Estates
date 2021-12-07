<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Appointment;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {             
        $contact =  Contact::with('getAppointment')->get();       
        return response()->json(
            [
                'message' => 'Data succesfully listed ',
                'data' => $contact,
            ],
        );
    }

    public function store(ContactRequest $request)
    {     
        $contact = Contact::create($request->all());
        return response()->json(
            [
                'message' => 'Data succesfully registered',
                'data' => $contact,
            ],
            201
        );
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {         
        $contact = Contact::find($id)->update($request->post());
        return response()->json(
            [
                'message' => 'Data succesfully updated',
                'data' => $contact,
            ],
        );
        
    }

    public function destroy($id)
    {        
        $contact = Contact::find($id)->delete();
        return response()->json(
            [
                'message' => 'Data succesfully deleted',
                'data' => $contact,
            ],
        );
    }
}
