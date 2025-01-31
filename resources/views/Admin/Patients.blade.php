@extends('Layout.index')

<strong>@section('name' ," Patients ")</strong>

@section('Body')
<div class="space-y-4">

    @foreach ($P as $p)
    <a href="/Patient/{{$p->id}}" class="block px-4 py-6 border border-gray-200 rounded-lg">
      <div class="font-bold text-black-500 text-sm">{{$p->name}}</div>
    </a>
    @endforeach

</div>
    
@endsection