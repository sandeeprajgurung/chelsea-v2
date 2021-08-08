@extends('admin.app')
@section('main-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">News</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">News</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <a href="{{ route('admin.news.create') }}">
                    <button type="button" class="btn btn-primary btn-lg btn-block w-100">
                        <i class="fas fa-plus-square mr-2"></i>Add News
                    </button>
                </a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                News DataTable
            </div>
            <div class="card-body">
                @include('admin.components.tables')
            </div>
        </div>
    </div>
@endsection
