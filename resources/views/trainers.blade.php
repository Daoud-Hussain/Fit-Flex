<x-app-layout>
        
<div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="form-wrapper " >
            <h2 class="text-center mb-4">Join Now</h2>
            <form method="POST">
                @csrf
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input name="phone" id ="phone" type="text" class="form-control" id="trainer-phone" placeholder="Enter your phone">
                </div>
                <span class="text-danger">
                    @error('phone')
                        {{$message}}
                    @enderror
                </span>

                <div class="form-group">
                    <label for="experience">Experience</label>
                    <input name="experience" id ="experience" type="text" class="form-control" id="trainers-experience" placeholder="Enter your experience">
                </div>
                <span class="text-danger">
                    @error('experience')
                        {{$message}}
                    @enderror
                </span>

                <div class="form-group">
                    <label for="timings">Timings</label>
                    <input name="timings" id ="timings" type="text" class="form-control" id="trainers-timings" placeholder="Best Suitable Timings">
                </div>
                
                <span class="text-danger">
                    @error('timings')
                        {{$message}}
                    @enderror
                </span> <br>

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
