@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Your Credits</h2>
    <p>Current Balance: {{ $credits->amount ?? 0 }}</p>

    <form action="{{ route('credits.add') }}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="number" name="amount" class="form-control" placeholder="Enter credits to add" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Credits</button>
    </form>
</div>
@endsection
