<?php

namespace App\Http\Controllers;

use App\Models\TestEntry;

class ApiController extends Controller
{
    public function status()
    {
        return response()->json(['status' => 'API is working!']);
    }

    public function store()
    {
        $testEntry = new TestEntry();
        $testEntry->name = 'temp';
        $testEntry->save();

        $testEntry->name = 'test ' . $testEntry->id;
        $testEntry->save();

        return response()->json([
            'message' => 'Data stored successfully!',
            'data' => $testEntry
        ]);
    }
}


