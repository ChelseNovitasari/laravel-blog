<div class="col-lg-4" data-aos="fade-left">
    <!-- Search widget-->
    <div class="card mb-4 shadow">
        <div class="card-header">Search</div>
        <div class="card-body">
            <form action="{{ route('search') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input class="form-control" type="text" name="keyword" placeholder="Search Articles..."/>
                    <button class="btn btn-primary" id="button-search" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Categories widget-->
    <div class="card mb-4 shadow">
        <div class="card-header">Categories</div>
        <div class="card-body">
            <div>
                @foreach ($categories as $item)
                <span><a href="{{ url('category/'.$item->slug) }}" class="bg-primary badge text-white unstyle-catregories">{{ $item->name }}</a></span>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Side widget-->
    <div class="card mb-4 shadow">
        <div class="card-header">Side Widget</div>
        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and
            feature the Bootstrap 5 card component!</div>
    </div>
    <!-- Related Post-->
    <div class="card mb-4 shadow">
        <div class="card-header">Related Posts</div>
        <div class="card-body">

        </div>
    </div>
</div>
