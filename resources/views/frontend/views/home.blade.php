@extends('frontend.app')
@section('main-content')
    @include('frontend.components.homeBannerSlide')
    <div class="container">
        @include('frontend.components.matchesDashboard')
    </div>
@endsection
