@extends('Layout.index')

<strong>@section('name' ," Admin Page ")</strong>

@section('Body')
<div class="text-center my-4">
    <a href="/user/appointment"><button class="btn  btn-secondary bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg 
                    shadow-md focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">Appointment</button></a>
   <a href="/user/Patients"><button class=" btn-secondary bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg
                     shadow-md focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50" >Patient</button></a>
   <a href="/user/Doctor"><button class="btn-secondary bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg
                 shadow-md focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50" >Doctors</button></a>
</div>

<strong class="flex flex-col p-10"> All Doctors : </strong>
<div class="flex flex-col p-20 space-y-4">
  
    @foreach($D as $d)
        <strong lass="text-lg text-left"c>{{ $d->user->name }}</strong>
    @endforeach
</div>
    
@endsection