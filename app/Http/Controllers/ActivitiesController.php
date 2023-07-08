<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index()
    {
        $data['Activities'] = Activity::orderBy('Date', 'desc')->orderBy('Time', 'desc')->paginate(200);
        return view('Activities.index', $data);
    }
    public function create()
    {
        return view('Activities.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'B' => 'required',
            'A' => 'required',
            'name' => 'required',
            'name2' => 'required',
        ]);

        $Activity = new Activity;
        $Activity->Category_id = $request->A;
        $Activity->User_id = $request->B;
        $Activity->Date = date('Y-m-d');
        $Activity->Time = date('H:i:s');
        $Activity->Title = $request->name;
        $Activity->Description = $request->name2;
        $Activity->save();
        return redirect()->route('Activities.index')->with('success','เพิ่มเรียบร้อย DDD');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
