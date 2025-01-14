<?php

namespace App\Http\Controllers;

use App\Models\FileExchange;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileExchangeController extends Controller
{
    public function index()
    {
        $files = FileExchange::where('user_id', auth()->id())->get();
        return view('files.index', compact('files'));
    }

    public function upload(Request $request)
    {
        $request->validate(['file' => 'required|mimes:bin|max:2048']);

        $path = $request->file('file')->store('user_files');

        FileExchange::create([
            'user_id' => auth()->id(),
            'file_path' => $path,
        ]);

        return back()->with('success', 'File uploaded successfully.');
    }

    public function download($id)
    {
        $file = FileExchange::findOrFail($id);

        if ($file->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        return Storage::download($file->file_path);
    }

    public function adminIndex()
    {
        $files = FileExchange::all();
        return view('admin.files.index', compact('files'));
    }

    public function processFile(Request $request, $id)
    {
        $file = FileExchange::findOrFail($id);

        if ($request->hasFile('processed_file')) {
            $path = $request->file('processed_file')->store('processed_files');
            $file->update(['processed_file_path' => $path, 'status' => 'Processed']);
        }

        return back()->with('success', 'File processed successfully.');
    }
}
