@extends('Layout.index')
@section('Body')
<strong>The Patient name is {{$p->name}}</strong><br>
<table>
     <tr align="center">
        <Strong>the Email is :  {{ $p->email }}</Strong>
     </tr><br>
     <tr align="center">
        <Strong>the Phone number is : {{$p->Phone_number}}</Strong>
     </tr><br>
</table><br>
<div class="algin:center">
    <a href="/editpatient/{{$p->id}}"><button class="px-6 py-3 text-white bg-blue-500 rounded-lg shadow-lg transition-transform duration-300 hover:bg-blue-600 hover:scale-105 active:scale-95">
        Update
    </button>
    </a>
   <a href="/Deletep/{{$p->id}}"> <button class="px-6 py-3 text-white bg-blue-500 rounded-lg shadow-lg transition-transform duration-300 hover:bg-blue-600 hover:scale-105 active:scale-95">
       Delete
    </button>
   </a>
    </div>
    
@endsection