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
                <label for="post-title">Timings</label>
                <input name="timings" id ="timings" type="text" value="{{$post->timings}}" class="form-control" id="post-timings" placeholder="Best Suitable Timings">
                </div>
                <div class="form-group">
                <label for="post-content">reason</label>
                <textarea name="body" class="form-control" id="post-content" rows="6" placeholder="Enter Joining Reason">{{$post->body}}</textarea>
                </div>
                <input type="submit" id="button" class="btn " value="Update" >
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
