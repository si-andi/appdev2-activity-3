<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{

    public $items = [
        [
            'id' => 1,
            'name' => 'Item 1',
            'price' => 100
        ],
        [
            'id' => 2,
            'name' => 'Item 2',
            'price' => 200
        ],
        [
            'id' => 3,
            'name' => 'Item 3',
            'price' => 300
        ]
        ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->items);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            "message" => "Item created successfully"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            "message" => "Displaying Item with ID: " . $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            "message" => "Item with ID: " . $id . " updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            "message" => "Item with ID: " . $id . " deleted successfully"
        ]);
    }
}
