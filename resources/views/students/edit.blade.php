<x-app-layout>
<div class="mt-4 bg-white p-6 rounded-lg shadow-md">
  <div class="bg-gray-100 p-4 border-b border-gray-300">
    <h2>Edit Student </h2>
  </div>
  <div class="card-body">
    <form action="{{ url('students/' . $students->id) }}" method="post">
      @csrf
      @method('PATCH')

      <div class="mb-4">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name', $students->name) }}" class="form-control">
        @error('name')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group mt-3">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="{{ old('address', $students->address) }}" class="form-control">
        @error('address')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group mt-3">
        <label for="mobile">Mobile</label>
        <input type="text" name="mobile" id="mobile" value="{{ old('mobile', $students->mobile) }}" class="form-control">
        @error('mobile')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group mt-3">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ old('email', $students->email) }}" class="form-control">
        @error('email')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group mt-4">
        <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">Update</button>
        <a href="{{ url('students') }}" class="btn btn-secondary">Cancel</a>
      </div>
    </form>
  </div>
</div>
</x-app-layout>


