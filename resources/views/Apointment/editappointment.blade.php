<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Appointment</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-10">

<div class="max-w-2xl mx-auto p-8 bg-white rounded-lg shadow-lg">
  <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Edit Appointment</h1>

  <form method="POST" action="/UpdateApointment/{{$a->id}}">
    @csrf
    @method('PATCH')

    <!-- Appointment Date -->
    <div class="mb-4">
      <label for="appointment_date" class="block text-sm font-medium text-gray-700 mb-1">Appointment Date</label>
      <input type="text" id="appointment_date" value="{{ $a->appointment_date }}" readonly
             class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm bg-gray-100 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <!-- Doctor Name -->
    <div class="mb-4">
      <label for="doctor_name" class="block text-sm font-medium text-gray-700 mb-1">Doctor Name</label>
      <input type="text" id="doctor_name" value="{{ $a->doctor->user->name }}" readonly
             class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm bg-gray-100 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <!-- Patient Name -->
    <div class="mb-6">
      <label for="patient_name" class="block text-sm font-medium text-gray-700 mb-1">Patient Name</label>
      <input type="text" id="patient_name" value="{{ $a->patient->name }}" readonly
             class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm bg-gray-100 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <!-- Action Buttons -->
    <div class="flex flex-wrap justify-end gap-4">
      <a href="/Appointments" 
         class="bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-md shadow transition">
        Back
      </a>

      <button type="submit" name="status" value="completed"
              class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-md shadow transition">
        Mark as Completed
      </button>

      <button type="submit" form="delete-form" value="cancelled"
              class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-md shadow transition">
        Cancel Appointment
      </button>
    </div>
  </form>

  <!-- Hidden Delete Form -->
  <form id="delete-form" method="POST" action="/DeleteApointment/{{$a->id}}" class="hidden">
    @csrf
    @method('DELETE')
  </form>
</div>

</body>
</html>
