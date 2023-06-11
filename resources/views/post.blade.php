<x-app-layout>
        
<div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="form-wrapper " >
            <h2 class="text-center mb-4">Join Now</h2>
            <form method="POST">
                @csrf
                <div class="form-group">
                <label for="post-title">Timings</label>
                <input name="timings" id ="title" type="text" class="form-control" id="post-title" placeholder="Best Suitable Timings">
                </div>
                <div class="form-group">
                <label for="post-content">Reason</label>
                <textarea name="body" class="form-control" id="post-content" rows="6" placeholder="Enter joining reason"></textarea>
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
