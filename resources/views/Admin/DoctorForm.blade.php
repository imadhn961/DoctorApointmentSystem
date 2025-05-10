@extends('Layout.index')

@section('name', 'Create A Doctor')

@section('Body')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
  <form method="POST" action="/createDoctor" class="w-full max-w-4xl bg-white p-10 rounded-2xl shadow-xl space-y-8">
    @csrf
    <h2 class="text-2xl font-bold text-gray-800 text-center">Create a Doctor</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <div>
        <label class="block text-sm font-medium text-gray-700">Name</label>
        <input type="text" name="name" class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" name="password" class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Email address</label>
        <input type="email" name="email" class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
      </div>

      <div class="col-span-full">
        <label class="block text-sm font-medium text-gray-700">Street address</label>
        <input type="text" name="location" class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Phone Number</label>
        <input type="text" name="phone_number" class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Specialization</label>
        <input type="text" name="specialization" class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Available Days</label>
        <select name="Days[]" multiple class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
          <option>Monday</option>
          <option>Tuesday</option>
          <option>Wednesday</option>
          <option>Thursday</option>
          <option>Friday</option>
          <option>Saturday</option>
        </select>
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Start Time</label>
        <select name="Start" class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
          <option>8:00 AM</option>
          <option>10:00 AM</option>
          <option>12:00 PM</option>
        </select>
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">End Time</label>
        <select name="End" class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
          <option>10:00 AM</option>
          <option>12:00 PM</option>
          <option>2:00 PM</option>
        </select>
      </div>
    </div>

    @if ($errors->any())
      <div class="mt-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
        <ul class="list-disc pl-5 text-sm">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="flex justify-end space-x-4 pt-6">
      <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 rounded hover:bg-gray-300">Cancel</button>
      <button type="submit" class="px-6 py-2 text-sm font-semibold text-white bg-indigo-600 rounded hover:bg-indigo-500 focus:ring-2 focus:ring-indigo-400">Create</button>
    </div>
  </form>
</div>
@endsection
