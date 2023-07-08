<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


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
        Session::put('myVariable', 'C');
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
    public function edit(Activity $Activity)
    {
        return view('Activities.edit',compact('Activity'));
    }
    public function update(Request $request, $id)
    {
        Session::put('myVariable', 'U');
        $request->validate([
            'B' => 'required',
            'A' => 'required',
            'name' => 'required',
            'name2' => 'required',
        ]);

        $Activity = Activity::find($id);
        $Activity->Category_id = $request->A;
        $Activity->User_id = $request->B;
        $Activity->Title = $request->name;
        $Activity->Description = $request->name2;
        $Activity->save();
        return redirect()->route('Activities.index')->with('success','แก้เรียบร้อย DDD');
    }
    public function destroy(Activity $Activity)
    {
        Session::put('myVariable', 'D');
        $Activity->delete();
        return redirect()->route('Activities.index')->with('success','ลบเรียบร้อย DDD');
    }
    public function showdata(Request $request, $requestValue, $id)
    {
        if ($request->isMethod('put') || $request->isMethod('post')) {
            $request->validate([
                'B' => 'required',
                'A' => 'required',
                'name' => 'required',
                'name2' => 'required',
            ]);
    
            $Activity = Activity::find($id);
            $Activity->Category_id = $request->input('A');
            $Activity->User_id = $request->input('B');
            $Activity->Title = $request->input('name');
            $Activity->Description = $request->input('name2');
            $Activity->save();
    
            return redirect()->route('Activities.index')->with('success', 'แก้ไขเรียบร้อยแล้ว');
        }
    }
    
}
