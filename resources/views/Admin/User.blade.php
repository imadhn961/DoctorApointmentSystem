@extends('Layout.index')

@section('name', 'Admin Page')

@section('Body')
<div class="max-w-2xl mx-auto py-10 space-y-6 text-center">

    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Welcome to the Admin Panel</h2>

    <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="/user/appointment">
            <button class="bg-gray-600 hover:bg-gray-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition">
                Appointments
            </button>
        </a>

        <a href="/user/Patients">
            <button class="bg-gray-600 hover:bg-gray-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition">
                Patients
            </button>
        </a>

        <a href="/user/Doctor">
            <button class="bg-gray-600 hover:bg-gray-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition">
                Doctors
            </button>
        </a>
    </div>

</div>
@endsection
