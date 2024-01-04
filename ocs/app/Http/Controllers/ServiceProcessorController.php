<?php

namespace App\Http\Controllers;

use App\Models\ServiceProcessor;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\OcsService;

class ServiceProcessorController extends Controller
{
    public function index()
    {
        $serviceProcessor = ServiceProcessor::all();
        return response()->json($serviceProcessor);
    }


    public function show($id)
     {
         $serviceProcessor = ServiceProcessor::findOrFail($id);
         return response()->json($serviceProcessor);
     }


  

     public function store(Request $request)
     {
         $serviceProcessor = ServiceProcessor::create($request->all());
         return response()->json($serviceProcessor, 201);
     }


     public function update(Request $request, $id)
     {
         $serviceProcessor = ServiceProcessor::findOrFail($id);
         $serviceProcessor->update($request->all());
         return response()->json(['message' => 'Service Processor update successfully'], 200);
     }

     public function destroy($id)
     {
         $serviceProcessor = ServiceProcessor::findOrFail($id);
         $serviceProcessor->delete();
         return response()->json(['message' => 'Service Processor deleted successfully'], 200);     
        }
   


}
