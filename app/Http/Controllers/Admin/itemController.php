<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item; 
use App\Http\Requests\ItemRequest; 

class ItemController extends Controller
{
    public function index()
    {
        return view('admin.item.index');
    }

    public function create()
    {
        return view('admin.item.create');
    }

    public function add()
    {
        //DB追加処理
        return redirect()->route('admin.item.index');
    }

    public function edit(Request $request)
    {
        //$_GET['id'] のようなもの
        $data = ['id' => $request->id];
        return view('admin.item.edit', $data);
    }

    public function update(Request $request)
    {
        $data = ['id' => $request->id];
        return redirect()->route('admin.item.edit', $data);
    }
}
