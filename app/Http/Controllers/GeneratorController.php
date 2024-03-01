<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneratorController extends Controller
{
    
    public function create(Request $request)
    {
       
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
        ]);

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');

        return response()->json(['message' => 'Data received successfully', 'firstname' => $firstname, 'lastname' => $lastname], 201);
    }


    public function get(Request $request)
    {
        // Retrieve all users
       
        
    
        return response()->json(['message' => 'Successfully retrieved firstname and lastname for all users'], 200);

        
    }
      
}
