@extends('Layout.index')

@section('Body')
<div class="max-w-2xl mx-auto py-6 space-y-4">

    <h2 class="text-xl font-semibold text-gray-800">Patient Details</h2>

    <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
        <p class="text-base text-gray-700"><strong>Name:</strong> {{ $p->name }}</p>
        <p class="text-base text-gray-700"><strong>Email:</strong> {{ $p->email }}</p>
        <p class="text-base text-gray-700"><strong>Phone Number:</strong> {{ $p->Phone_number }}</p>
    </div>

    <div class="flex gap-4 mt-4">
        <a href="/editpatient/{{ $p->id }}">
            <button class="px-6 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition">
                Update
            </button>
        </a>

        <form action="/Deletep/{{ $p->id }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this patient?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-6 py-2 bg-red-600 text-white rounded-lg shadow hover:bg-red-700 transition">
                Delete
            </button>
        </form>
    </div>

</div>
@endsection
