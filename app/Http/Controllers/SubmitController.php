<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmitController extends Controller
{
    // Submit formunu gösteren GET rotası
    public function showForm()
    {
        return view('submit');
    }

    // Submit formunu işleyen POST rotası
    public function submit(Request $request)
    {
        // Form işleme kodu burada olacak
        return redirect()->route('submit')->with('success', 'Form successfully submitted!');
    }
}
