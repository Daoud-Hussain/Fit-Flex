<x-app-layout>
        
<div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="form-wrapper " >
            <h2 class="text-center mb-4">Join Now</h2>
            <form method="POST">
                @csrf
                <div class="form-group">
                    <label for="trainer-phone">Phone</label>
                    <input name="phone" id ="phone" type="text" class="form-control" id="trainer-phone" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="trainer-experience">Experience</label>
                    <input name="experience" id ="experience" type="text" class="form-control" id="trainers-experience" placeholder="Enter your experience">
                </div>
                <div class="form-group">
                    <label for="trainers-timings">Timings</label>
                    <input name="timings" id ="timings" type="text" class="form-control" id="trainers-timings" placeholder="Best Suitable Timings">
                </div>
                <button type="submit" id="button" style="background: #ad070c; color: white;" class="btn" value="Post" >Submit </button>
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
