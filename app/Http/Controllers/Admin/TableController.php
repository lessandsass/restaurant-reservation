<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TableStoreRequest;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $tables = Table::all();
        return view('admin.tables.index', compact('tables'));
    }

    public function create()
    {
        return view('admin.tables.create');
    }

    public function store(TableStoreRequest $request)
    {
        Table::create([
            'name' => $request->get('name'),
            'guest_number' => $request->get('guest_number'),
            'status' => $request->get('status'),
            'location' => $request->get('location'),
        ]);

        return to_route('admin.tables.index');

    }

    public function edit(Table $table)
    {
        return view('admin.tables.edit', compact('table'));
    }

    public function update(TableStoreRequest $request, Table $table)
    {
        $table->update($request->validated());
        return to_route('admin.tables.index');
    }

    public function destroy(Table $table)
    {
        $table->delete();
        return to_route('admin.tables.index');
    }
}
