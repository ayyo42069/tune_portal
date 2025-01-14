@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container">
    <h2 class="my-4">Admin Dashboard</h2>

    <div class="my-5">
        <h3>User Files</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>User</th>
                    <th>File</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($files as $file)
                    <tr>
                        <td>{{ $file->user->name }} ({{ $file->user->email }})</td>
                        <td>{{ $file->file_path }}</td>
                        <td>{{ $file->status }}</td>
                        <td>
                            @if($file->status === 'Pending')
                                <form action="{{ route('admin.files.process', $file->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="processed_file" required>
                                    <button type="submit" class="btn btn-sm btn-success">Upload Processed File</button>
                                </form>
                            @else
                                <span class="text-success">Processed</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No files uploaded yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
