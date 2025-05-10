@extends('Layout.index')

@section('name', 'Doctors')

@section('Body')
<div class="min-h-screen bg-gray-100 py-10 px-4">
    <div class="max-w-4xl mx-auto space-y-4">
        @foreach ($D as $d)
            <a href="/Doctor/{{ $d->id }}" class="block p-6 bg-white rounded-xl shadow hover:shadow-md transition duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-800">{{ $d->user->name }}</h2>
                        @if(isset($d->specialization))
                            <p class="text-sm text-gray-500 mt-1">{{ $d->specialization }}</p>
                        @endif
                        @if(isset($d->user->email))
                            <p class="text-sm text-gray-400 mt-1">{{ $d->user->email }}</p>
                        @endif
                    </div>
                    <div class="text-indigo-600 font-medium text-sm hover:underline">View Profile →</div>
                </div>
            </a>
        @endforeach

        @if($D->isEmpty())
            <div class="text-center text-gray-500 text-sm">
                No doctors found.
            </div>
        @endif
    </div>
</div>
@endsection
