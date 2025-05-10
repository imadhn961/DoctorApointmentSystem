@extends('Layout.index')

@section('name', 'Patients')

@section('Body')
<div class="max-w-3xl mx-auto py-6 space-y-4">
    @forelse ($P as $p)
        <a href="/Patient/{{ $p->id }}"
           class="block px-6 py-4 bg-white border border-gray-300 rounded-lg shadow-sm hover:bg-gray-50 transition">
            <div class="font-semibold text-gray-800 text-base">
                {{ $p->name }}
            </div>
        </a>
    @empty
        <div class="text-center text-gray-500">No patients found.</div>
    @endforelse
</div>
@endsection
