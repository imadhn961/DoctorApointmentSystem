@extends('Layout.index')

<strong>@section('name' ," Create A Doctor ")</strong>
@section('Body')
<form method="POST" action="/createPointment">
    @csrf
    <div class="border-b border-gray-900/10 pb-12">
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:raw-span-3">
            <label for="first-name" class="block text-sm/6 font-medium text-gray-900">Doctor_name</label>
            <div class="mt-2">
             <select name="Doctor_name">
                @foreach ($Doctors as $d)
                <option>{{$d->user->name}}</option>
                @endforeach
             </select>
            </div>
          </div>
  
          <div class="sm:raw-span-4">
            <label for="email" class="block text-sm/6 font-medium text-gray-900">Patient_name</label>
            <div class="mt-2">
                <select name="Patient_name">
                    @foreach ($Patients as $p)
                    <option>{{$p->name}}</option>
                    @endforeach
                 </select>
            </div>
          </div>
  
          <div class="raw-span-full">
         
            <label for="street-address" class="block text-sm/6 font-medium text-gray-900">Year</label>
            <select name="Years" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                @for ($i = 2025; $i < 2030; $i++)
                <option>{{$i}}</option>
                @endfor
            </select>
    
        
        
            <label for="street-address" class="block text-sm/6 font-medium text-gray-900">Month</label>
            <select name="Months" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                @for ($i = 1; $i < 13; $i++)
                <option>{{$i}}</option>
                @endfor
            </select>

   
        <label for="street-address" class="block text-sm/6 font-medium text-gray-900">Day</label>
        <select name="Days" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            @for ($i = 1; $i < 32; $i++)
            <option>{{$i}}</option>
            @endfor
        </select>
 
    
        <label for="street-address" class="block text-sm/6 font-medium text-gray-900">Hour</label>
        <div class="mt-2">
        <select name="Hours"  class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            @for ($i = 1; $i < 25; $i++)
            <option>{{$i}}</option>
            @endfor
        </select>
      </div>
    </div>
        </div>

      @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
          
      @endforeach

      @endif
    </ul>
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
    </div>
  </form>

@endsection