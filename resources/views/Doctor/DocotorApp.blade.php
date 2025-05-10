<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointments</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

  <!-- Navbar or Logout Button -->
  @auth
  <div class="p-4 flex justify-end bg-white shadow-md">
    <form method="POST" action="/logout">
      @csrf
      <button type="submit" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-md transition">
        Log Out
      </button>
    </form>
  </div>
  @endauth

  <!-- Main Content -->
  <div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Appointments</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
      @foreach ($Apointment as $a)
      <a href="Apointment/{{$a['id']}}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
        <div class="space-y-2">
          <div class="flex justify-between items-center">
            <span class="text-gray-700 font-semibold">Doctor:</span>
            <span class="text-gray-900">{{$a->doctor->user->name}}</span>
          </div>
          <div class="flex justify-between items-center">
            <span class="text-gray-700 font-semibold">Patient:</span>
            <span class="text-gray-900">{{$a->patient->name}}</span>
          </div>
          <div class="flex justify-between items-center">
            <span class="text-gray-700 font-semibold">Date:</span>
            <span class="text-gray-900">{{$a->appointment_date}}</span>
          </div>
          <div class="flex justify-between items-center">
            <span class="text-gray-700 font-semibold">Status:</span>
            <span class="text-gray-900">{{$a->status}}</span>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>

</body>
</html>
