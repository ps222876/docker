<?php

namespace App\Http\Controllers;

use App\Models\Calender;
use App\Models\User;
use Illuminate\Http\Request;

class CalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = [];

        $shifts = Calender::with('user')->get();
        $users = User::all();

        foreach ($shifts as $shift) {
            $events[] = [
                'title' => $shift->user->name,
                'start' => date('Y-m-d\TH:i:s', strtotime($shift->date . ' ' . $shift->start_time)),
                'end' => date('Y-m-d\TH:i:s', strtotime($shift->date . ' ' . $shift->finish_time)),
            ];
        }


        // dd($events);

        return view('calenders.index', compact('events', 'users'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('calenders.create' , compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'finish_time' => 'required|date_format:H:i',
            'user_id' => 'required|exists:users,id',
        ]);

        Calender::create($request->all());

        return redirect()->route('calenders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
