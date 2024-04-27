<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PermissionController extends Controller
{
    //

    public function store(Request $request)
    {
        $request->validate([
            'date_permission' => 'required|date_format:Y-m-d',
            'reason' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'is_approved' => 'required|boolean',
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images');
        } else {
            return response()->json(['error' => 'Image file is required'], 422);
        }
        $permission = Permission::create([
            'user_id' => $request->user()->id,
            'date_permission' => $request->date_permission,
            'reason' => $request->reason,
            'image' => $imagePath,
            // 'is_approved' => $request->is_approved,
        ]);
        return response()->json([
            'message' => 'Permission successfully created',
            'permission' => $permission
        ]);
    }

    public function index(){
        $permission = Permission::select('id','user_id','date_permission','reason')->get();
        return response()->json([
            'message' => 'Berhasil Mengambil Data',
            'permission' => $permission,
        ]);
    }

}
