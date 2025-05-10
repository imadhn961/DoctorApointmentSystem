@extends('Layout.index')

@section('name', 'Create a User')

@section('Body')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white rounded-2xl shadow-xl p-10 w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-800 text-center mb-8">Create a User</h1>
        <div class="flex flex-col space-y-4">
            <a href="{{ route('CP') }}">
                <button class="w-full px-6 py-3 text-white font-semibold bg-green-500 rounded-xl shadow hover:bg-green-600 transition duration-300">
                    Patient
                </button>
            </a>
            <a href="{{ route('CD') }}">
                <button class="w-full px-6 py-3 text-white font-semibold bg-blue-500 rounded-xl shadow hover:bg-blue-600 transition duration-300">
                    Doctor
                </button>
            </a>
            <a href="{{ route('CA') }}">
                <button class="w-full px-6 py-3 text-white font-semibold bg-purple-500 rounded-xl shadow hover:bg-purple-600 transition duration-300">
                    Appointment
                </button>
            </a>
        </div>
    </div>
</div>
@endsection
