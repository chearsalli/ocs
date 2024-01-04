<?php

namespace App\Http\Controllers;

use App\Models\FundCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FundCodeController extends Controller
{
    public function index()
    {
        $fundCodes = FundCode::all();
        return response()->json($fundCodes);
    }

  
    public function show($id)
    {
        $fundCodes = FundCode::findOrFail($id);
        return response()->json($fundCodes);
    }

     // create fund_code
     public function store(Request $request)
     {
         $fundCodes = FundCode::create($request->all());
         return response()->json($fundCodes, 201);
     }

  

     // Update fund_code
     public function update(Request $request, $id)
     {
         $fundCodes = FundCode::findOrFail($id);
         $fundCodes->update($request->all());
         return response()->json(['message' => 'Fund_code update successfully'], 200);
     }

     //yoko na
   
    //Delete fund_code
    public function destroy($id)
    {
        $fundCodes = FundCode::findOrFail($id);
        $fundCodes->delete();
        return response()->json(['message' => 'Fund_code deleted successfully'], 200);
    }
}
