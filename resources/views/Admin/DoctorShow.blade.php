@extends('Layout.index')
@section('Body')
<strong>The Doctor name is : {{$d->user->name}}</strong><br>
<table>
    <tr align="center">
       <Strong>the Sepcialization is :{{ $d->specialization }}</Strong>
    </tr><br>
    <tr align="center">
        <Strong>the Location is : {{ $d->location }}</Strong>
     </tr><br>
     <tr align="center">
        <Strong>the Available time : 
         @foreach ($d->available_times as $day => $time)
         <li>{{ ucfirst($day) }}: {{ $time[0] }} - {{ $time[1] }}</li>

         @endforeach
        </Strong>
     </tr><br>
     <tr align="center">
        <Strong>the Email : {{ $d->user->email }}</Strong>
     </tr><br>
     <tr align="center">
        <Strong>the Phone number :  {{$d->user->Phone_number}}</Strong>
     </tr><br>
</table>
<br>
<div class="algin:center">
   <a href="/editDoctor/{{$d->id}}"> <button class="px-6 py-3 text-white bg-blue-500 rounded-lg shadow-lg transition-transform duration-300 hover:bg-blue-600 hover:scale-105 active:scale-95">
        Update
    </button>
   </a>
  <button form="DeleteDoctor" class="px-6 py-3 text-white bg-blue-500 rounded-lg shadow-lg transition-transform duration-300 hover:bg-blue-600 hover:scale-105 active:scale-95">
       Delete
    </button>
    </div>

<form method="POST" action="/Delete/{{$d->id}}" id="DeleteDoctor" class="hidden">
    @csrf
    @method('DELETE')
</form>

@endsection