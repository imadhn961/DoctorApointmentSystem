@extends('Layout.index')
@section('name' , 'Create a User')
@section('Body')
<div class="items-center justify-center h-screen bg-white">
<div class="flex flex-col space-y-4 text-center">
    <a href="{{route('CP')}}">
        <button class="px-6 py-3 text-white font-bold bg-green-500 rounded hover:bg-green-600">
            Patient
        </button>
    </a>
    <a href="{{route('CD')}}">
        <button class="px-6 py-3 text-white font-bold bg-blue-500 rounded hover:bg-blue-600">
        Doctor
        </button>
    </a>
    <a href="{{route('CA')}}">
        <button class="px-6 py-3 text-white font-bold bg-blue-500 rounded hover:bg-blue-600">
        Apointment
        </button>
    </a>

</div>
</div>

@endsection