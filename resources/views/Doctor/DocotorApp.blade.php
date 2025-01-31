@extends('Layout.index')

<strong>@section('name' ," Create A Doctor ")</strong>
@section('Body')
<div>
    @foreach ($Apointment as $a)
  <div class="space-y-4"> 
    <a href="Apointment/{{$a['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg"> 
             <div class="flex justify-between items-center"> 
                <strong class="flex-1 text-left">Doctor: {{$a->doctor->user->name}}</strong>
                <strong class="flex-1 text-center">{{$a->appointment_date}}</strong>
                <strong class="flex-1 text-right">Patient: {{$a->patient->name}}</strong>
                <strong class="flex-1 text-center">status :  {{$a->status}}</strong>
            </div> 
            </a> 
 </div>
        
    @endforeach
</div>

@endsection