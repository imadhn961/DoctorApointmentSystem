@extends('Layout.index')

<strong>@section('name' ," Doctors ")</strong>

@section('Body')

<div class="space-y-4">
    @foreach ($D as $d)
    <a href="/Doctor/{{ $d->id }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
        <div class="font-bold text-black-500 text-sm">{{$d->user->name}}</div>
    </a>
    @endforeach
</div>
@endsection