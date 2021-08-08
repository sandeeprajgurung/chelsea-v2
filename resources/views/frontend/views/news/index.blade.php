@extends('frontend.app')
@section('main-content')
    @include('frontend.components.matchesDashboard')
    @include('frontend.views.home.news')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="main-heading sytle-2">
                            <h2>Video</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium<br>doloremque
                                laudantium, totam rem aperiam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('frontend.views.home.videos')
    @include('frontend.views.home.team')

@endsection
