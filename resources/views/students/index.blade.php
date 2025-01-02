
<x-app-layout>
                <div class=" mt-16 bg-white shadow-lg rounded-lg p-6 ">
                    <div class="text-xl font-semibold text-gray-800 mb-4">
                        <h2>Student Table</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/students/create') }}" class="bg-green-500 text-white text-sm font-semibold py-2 px-4 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="overflow-x-auto w-full flex justify-center"> 
                            <table class="min-w-full table-auto">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Email</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>{{ $item->email }}</td>




                                        <td>

                                            <a href="{{ url('/students/' . $item->id) }}" title="View Student"><button class="bg-blue-500 text-black text-sm py-1 px-3 rounded-md hover:bg-violet-600 focus:outline-none focus:ring-2 focus:ring-blue-400"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/students/' . $item->id . '/edit') }}" title="Edit Student"><button class="bg-yellow-500 text-black text-sm py-1 px-3 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 mr-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/students' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                            <button type="submit" class="bg-red-500  text-black text-sm py-1 px-3 rounded-md  hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 mr-1" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>


                    </div>
                </div>
                </div>

</x-app-layout>