<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\lotprocess;
use App\Models\processreson;
use App\Models\finishtype;
use App\Models\color;
use App\Models\purity;
use App\Models\Bactch;
use App\Models\shap;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
class batchcontroller extends Controller
{
    public function batch1(){
        return view('admin.batch1');
       }
       public function insertbatch(Request $request)
       {
           $batch = new Bactch;
           $batch->name = $request->get('name');
           $batch->save();
       
           return redirect()->back()->with('message', 'Batch added successfully');
       }
    public function shape(){       
        return view('admin.shape');
       }
       public function insertshape(Request $request)
       {
           $shape = new shap;
           $shape->name = $request->get('name');
           $shape->save();
        return redirect('shape')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }

       public function shaperemove(Request $request, $id)
       {
           $data = DB::table('shaps')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }

       public function lotprocess(){
        return view('admin.lotprocess');
       }
       public function insertlotprocess(Request $request)
       {
           $stockpackets = new lotprocess;
           $stockpackets->name = $request->get('name');
           $stockpackets->save();
        return redirect('lotprocess')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }
       public function lotprocessremove(Request $request, $id)
       {
           $data = DB::table('lotprocesses')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }

       public function processreson(){
        return view('admin.processreson');
       }
       public function insertprocessreson(Request $request)
       {
           $stockpackets = new processreson;
           $stockpackets->name = $request->get('name');
           $stockpackets->save();
        return redirect('processreson')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }
       public function processresonremove(Request $request, $id)
       {
           $data = DB::table('processresons')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }

       public function finishtype(){
        return view('admin.finishtype');
       }
       public function insertfinishtype(Request $request)
       {
           $stockpackets = new finishtype;
           $stockpackets->name = $request->get('name');
           $stockpackets->save();
        return redirect('finishtype')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }
       public function finishtyperemove(Request $request, $id)
       {
           $data = DB::table('finishtypes')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }
       public function color(){
        return view('admin.color');
       }
       public function insertcolor(Request $request)
       {
           $stockpackets = new color;
           $stockpackets->name = $request->get('name');
           $stockpackets->save();
        return redirect('color')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }
       public function colorremove(Request $request, $id)
       {
           $data = DB::table('colors')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }

       public function purity(){
        return view('admin.purity');
       }
       public function insertpurity(Request $request)
       {
           $stockpackets = new purity;
           $stockpackets->name = $request->get('name');
           $stockpackets->save();
        return redirect('purity')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }
       public function purityremove(Request $request, $id)
       {
           $data = DB::table('purities')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }
       public function createlot(){
        $current = new Carbon('first day of January 2016');
        $data=DB::table('bactches')->get();
        return view('admin.createlot')->with(['current'=>$current,'data'=>$data]);
       // return redirect('createlot')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
    //    return response()->json(['data'=>$data]);
      }
      
    }
