<x-app-layout>
    <div class="py-12">
        <!-- <h2 class=" text-center mb-4">Registered Customers</h2> -->
        <!-- @foreach ($posts as $index =>$post)
        <div class="container">
		<div class="card">
			<div class="card-body">
                <h5 class="card-title text-bold mb-2">{{$index+1}}{{". "}} {{$post->user->name}}</h5>
                <h6 class="card-subtitle text-muted mb-1">{{$post->timings}}</h5>
                <h6 class="card-subtitle mb-1">{{$post->user->email}}</h5>
                <p class="card-text">{{$post->body}}</p>
            </div>
            </div>
        </div>
        @endforeach -->
        <section id="hero" class="d-flex align-items-center">

            <div class="container">
                <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Fitness Fuse</h1>
                    <h2>We are team of talented designers making websites with Bootstrap</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="/post/"><button type="button" class="btn btn-primary">Join Now</button></a>

                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://via.placeholder.com/500x500" class="img-fluid animated" alt="">
                </div>
                </div>
            </div>

        </section>

    </div>
    
</x-app-layout>
