
<x-app-layout>

<div class="mt-4 bg-white p-6 rounded-lg shadow-md">
<div class="border-b pb-4">
  <div class="text-2xl font-semibold">
    <h2>Student Details</h2>
  </div>
  <div class="card-body">
    <h5 class="text-xl font-semibold">Name: {{ $students->name }}</h5>
    <p class="text-base text-black -700"><strong>Address:</strong> {{ $students->address }}</p>
    <p class="card-text"><strong>Mobile:</strong> {{ $students->mobile }}</p>
    <p class="card-text"><strong>Email:</strong> {{ $students->email }}</p>
  </div>
  <div class="bg-gray-100 p-4 rounded-b-lg">
    <a href="{{ url('students') }}" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">Back to Students</a>
    <a href="{{ url('students/' . $students->id . '/edit') }}" class="bg-yellow-500 text-white py-2 px-4 rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400">Edit</a>
    <form action="{{ url('students/' . $students->id) }}" method="POST" style="display:inline-block;">
      @csrf
      @method('DELETE')
      <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400" onclick="return confirm('Are you sure you want to delete this student?');">Delete</button>
    </form>
  </div>
</div>
</div>
</x-app-layout>


