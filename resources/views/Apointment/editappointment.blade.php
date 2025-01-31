@extends('Layout.index')

@section('Body')
<div class="container mx-auto p-8 bg-gray-100 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-6 text-center">Edit Appointment</h1>
    <form method="POST"  action="/UpdateApointment/{{$a->id}}">
        @csrf
        @method('PATCH')
 
        <!-- Add your form fields here -->
        <div class="form-group">
            <label for="appointment_date" class="block text-lg font-medium text-gray-700">Appointment Date</label>
            <div class="mt-1">
                <input type="text" class="form-control w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" id="appointment_date" value="{{ $a->appointment_date }}" required readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="doctor_name" class="block text-lg font-medium text-gray-700">Doctor Name</label>
            <div class="mt-1">
                <input type="text" class="form-control w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" id="doctor_name" value="{{ $a->doctor->user->name }}" required readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="patient_name" class="block text-lg font-medium text-gray-700">Patient Name</label>
            <div class="mt-1">
                <input type="text" class="form-control w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" id="patient_name" value="{{ $a->patient->name }}" required readonly>
            </div>
        </div>
        <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" 
                                                            name="status" value="completed">Completed</button>
        <a href=""class="btn btn-secondary bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">Cancel</a>
        <button class="btn btn-secondary bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50" 
                                                            form="delete-form" value="cancelled">Canceled</button>
    </form>
</div>


<form id="delete-form"  method="POST" action="/DeleteApointment/{{$a->id}}"  >
    @csrf
    @method('DELETE')
</form>
@endsection