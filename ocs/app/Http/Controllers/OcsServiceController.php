<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OcsService;


class OcsServiceController extends Controller
{
     // retrieve or show all user services
     public function index()
     {
         $ocsServices = OcsService::all();
         return response()->json($ocsServices);
     }
 
     // retrieve user service by id
     public function show($id)
     {
         $ocsService = OcsService::findOrFail($id);
         return response()->json($ocsService);
     }
 
     // create user service
     public function store(Request $request)
     {
         $ocsService = OcsService::create($request->all());
         return response()->json($ocsService, 201);
     }
 
     // Update user services
     public function update(Request $request, $id)
     {
         $ocsService = OcsService::findOrFail($id);
         $ocsService->update($request->all());
         return response()->json(['message' => 'User service update successfully'], 200);
     }
 
    //Delete user request
     public function destroy($id)
     {
         $ocsService = OcsService::findOrFail($id);
         $ocsService->delete();
         return response()->json(['message' => 'User service deleted successfully'], 200);     }
 
     //relationship with UserRequest
     public function userRequests()
     {
         return $this->hasMany(UserRequest::class, 'service_id');
     }
}
