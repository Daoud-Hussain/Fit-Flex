<x-app-layout>
    <div class="py-12">
        <h2 class=" text-center mb-4">Registered Trainers</h2>
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
                            <th scope="col">Phone</th>
                            <th scope="col">Timings</th>
                            <th scope="col">Experience</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($trainers as $trainer)
                            <tr>
                                <td>{{$trainer->user->name}}</td>
                                <td>{{$trainer->user->email}}</td>
                                <td>{{$trainer->phone}}</td>
                                <td>{{$trainer->timings}}</td>
                                <td>{{$trainer->experience}}</td>
                                <td>
                                <a href="{{url('/trainers/edit', $trainer->id) }}"><button type="button" class="btn btn-primary">Edit</button></a>
                                <a href="{{url('/trainers/delete', $trainer->id)}} "><button type="button" style="background: #ad070c; color: white;" class="btn">Delete</button></a>
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
