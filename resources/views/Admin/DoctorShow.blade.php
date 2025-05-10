@extends('Layout.index')

@section('Body')
<div class="min-h-screen bg-gray-100 py-10 px-6">
    <div class="max-w-3xl mx-auto bg-white shadow-md rounded-xl p-8 space-y-6">

        <h1 class="text-2xl font-bold text-gray-800 mb-4">
            Doctor: <span class="text-indigo-600">{{ $d->user->name }}</span>
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-700">
            <div>
                <p class="font-semibold">Specialization:</p>
                <p class="text-gray-600">{{ $d->specialization }}</p>
            </div>

            <div>
                <p class="font-semibold">Location:</p>
                <p class="text-gray-600">{{ $d->location }}</p>
            </div>

            <div>
                <p class="font-semibold">Email:</p>
                <p class="text-gray-600">{{ $d->user->email }}</p>
            </div>

            <div>
                <p class="font-semibold">Phone Number:</p>
                <p class="text-gray-600">{{ $d->user->Phone_number }}</p>
            </div>

            <div class="md:col-span-2">
                <p class="font-semibold">Available Time:</p>
                <ul class="list-disc list-inside text-gray-600">
                    @foreach ($d->available_times as $day => $time)
                        <li>{{ ucfirst($day) }}: {{ $time[0] }} - {{ $time[1] }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="flex justify-end gap-4 mt-6">
            <a href="/editDoctor/{{ $d->id }}">
                <button class="px-5 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition-all">
                    Update
                </button>
            </a>

            <button form="DeleteDoctor" class="px-5 py-2 bg-red-500 text-white rounded-lg shadow hover:bg-red-600 transition-all">
                Delete
            </button>
        </div>

        <form method="POST" action="/Delete/{{ $d->id }}" id="DeleteDoctor" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </div>
</div>
@endsection
