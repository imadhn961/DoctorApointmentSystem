@extends('Layout.index')

@section('name', 'Admin Page')

@section('Body')
<div class="text-center my-4 space-y-6">
    <div class="space-x-4">
        <a href="/user/appointment">
            <button class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg 
                shadow-md focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">
                Appointment
            </button>
        </a>
        <a href="/user/Patients">
            <button class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg 
                shadow-md focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">
                Patient
            </button>
        </a>
        <a href="/user/Doctor">
            <button class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg 
                shadow-md focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">
                Doctors
            </button>
        </a>
    </div>

    <h2 class="text-xl font-semibold mt-10">All Appointments:</h2>
    
    <div class="flex flex-col items-start p-10 space-y-2">
        @forelse($A as $a)
            <div class="text-base text-gray-800 font-medium">{{ $a->appointment_date }} :: Doctor : {{$a->doctor->user->name}} :: Patient : {{$a->patient->name}}</div>
        @empty
            <div class="text-sm text-gray-500 italic">No appointments found.</div>
        @endforelse
    </div>
</div>
@endsection
