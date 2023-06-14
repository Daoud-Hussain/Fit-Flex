<x-app-layout>
        
<div class="container body">
        <div class="row">
        <div class="col-md-12">
            <div class="form-wrapper " >
            <h2 class="text-center mb-4">Update Your Info</h2>
            <form method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                <label for="trainers-phone">Phone</label>
                <input name="phone" id ="phone" type="text" class="form-control" value="{{$trainers->phone}}" id="trainers-phone" placeholder="Enter Phone number">
                </div>
                <div class="form-group">
                <label for="trainers-timings">Timings</label>
                <input name="timings" id ="timings" type="text" class="form-control" value="{{$trainers->timings}}" id="trainers-timings" placeholder="Best Suitable Timings">
                </div>
                <div class="form-group">
                <label for="trainers-content">Experience</label>
                <input name="experience" id ="experience" type="text" class="form-control" value="{{$trainers->experience}}" id="trainers-experience" placeholder="Best Suitable Timings">
                </div>
                <input type="submit" id="button" style="background: #ad070c; color: white;" class="btn " value="Update" >
            </form> <br>
            @if(session()->has('status'))
                <h6 class="text-bold">
                    {{ session('status') }}
                </h6>
            @endif
            </div> 
        </div>
        </div>
    </div>
</x-app-layout>
