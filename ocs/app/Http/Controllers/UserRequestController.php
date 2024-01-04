<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRequest;

class UserRequestController extends Controller
{
     //retrieve or show all user req
     public function index()
     {
         $userRequests = UserRequest::all();
         return response()->json($userRequests);
     }
 
     // retrieve user req
     public function show($id)
     {
         $userRequest = UserRequest::findOrFail($id);
         return response()->json($userRequest);
     }
 
     // create user req
     public function store(Request $request)
     {
         $userRequest = UserRequest::create($request->all());
         return response()->json($userRequest, 201);
     }
 
     // Update user request
     public function update(Request $request, $id)
     {
         $userRequest = UserRequest::findOrFail($id);
         $userRequest->update($request->all());
         return response()->json(['message' => 'User request update successfully'], 200);
     }
 
     //Delete user request
     public function destroy($id)
     {
         $userRequest = UserRequest::findOrFail($id);
         $userRequest->delete();
         return response()->json(['message' => 'User request deleted successfully'], 204);
     }
 
     //relationship with OcsService
     public function ocsService()
     {
         return $this->belongsTo(OcsService::class, 'service_id');
     }
}
