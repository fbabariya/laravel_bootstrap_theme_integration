@extends('customfiles.mainlayout')
@section('title', 'cards')
@section('content')

<div class="col-lg-6 mb-4 d-flex justify-content-center">

    <!-- Illustrations -->
    <div class="card shadow mb-4 mx-2"> <!-- Added mx-2 class for horizontal margin -->
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
        </div>
        <div class="card-body">
            <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                    src="/assets/img/undraw_posting_photo.svg" alt="...">
            </div>
            <p>Add some quality, svg illustrations to your project courtesy of <a
                    target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                constantly updated collection of beautiful svg images that you can use
                completely free and without attribution!</p>
            <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                unDraw &rarr;</a>
        </div>
    </div>

    <!-- Approach -->
    <div class="card shadow mb-4 mx-2"> <!-- Added mx-2 class for horizontal margin -->
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
        </div>
        <div class="card-body">
            <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                CSS bloat and poor page performance. Custom CSS classes are used to create
                custom components and custom utility classes.</p>
            <p class="mb-0">Before working with this theme, you should become familiar with the
                Bootstrap framework, especially the utility classes.</p>
        </div>
    </div>

</div>

@endsection
