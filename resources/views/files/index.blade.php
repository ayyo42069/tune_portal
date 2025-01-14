@extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
<div class="container">
    <h2 class="my-4">Welcome, {{ auth()->user()->name }}</h2>

    <div class="row">
        <!-- Credit Balance -->
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Credits</div>
                <div class="card-body">
                    <h5 class="card-title">{{ auth()->user()->credits->amount ?? 0 }}</h5>
                    <p class="card-text">Your current credit balance.</p>
                </div>
            </div>
        </div>

        <!-- File Upload -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upload a File</div>
                <div class="card-body">
                    <form action="{{ route('files.upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <input type="file" name="file" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Uploaded Files -->
    <div class="my-5">
        <h3>Your Uploaded Files</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>File</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($files as $file)
                    <tr>
                        <td>{{ $file->file_path }}</td>
                        <td>{{ $file->status }}</td>
                        <td>
                            @if($file->processed_file_path)
                                <a href="{{ route('files.download', $file->id) }}" class="btn btn-sm btn-success">Download Processed File</a>
                            @else
                                <span class="text-warning">Processing...</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No files uploaded yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
