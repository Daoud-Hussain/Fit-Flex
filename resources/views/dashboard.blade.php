<x-app-layout>
    <div class="py-12">
        <h2 class=" text-center mb-3">Registered Users</h2>
        @if(session()->has('status'))
                <h6 class="text-white text-center mb-2">
                    {{ session('status') }}
                </h6>
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container p-2">
                
                    <table class="table table-white ">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Timings</th>
                            <th scope="col">Reason</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->user->name}}</td>
                                <td>{{$post->user->email}}</td>
                                <td>{{$post->timings}}</td>
                                <td >{{$post->body}}</td>
                                <td>
                                <a href="{{url('/post/edit', $post->id) }}"><button type="button" class="btn btn-primary">Edit</button></a>
                                <a href="{{url('/post/delete', $post->id)}} "><button type="button" class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                           
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
