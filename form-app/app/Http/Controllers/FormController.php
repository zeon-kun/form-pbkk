<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function index()
    {
        return view('submission')->with('forms', Form::latest()->get());
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'brief' => 'required',
            'percentage' => 'required',
            'status' => 'required|file|mimes:jpg,png,jpeg|max:2048'
        ]);

        // dd($request);

        $form = Form::create([
            'username' => $request->username,
            'email' => $request->email,
            'brief' => $request->brief,
            'percentage' => floatval($request->percentage),
        ]);

        $path = Storage::put('public/images', $request->status);
        $form->status_url = url(Storage::url($path));
        $form->save();

        return redirect('/submission')->with(['results' => $form, 'success' => 'Submission Successful']);
    }

    public function result()
    {
        $results = session()->get('results');

        return view('result')->with(['results' => $results, 'success' => 'Submission Successful']);
    }
}
