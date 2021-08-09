@extends('admin.app')
@section('main-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Types</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Settings</a></li>
            <li class="breadcrumb-item active">Types</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    <i class="fas fa-table me-1"></i>
                    Types
                </div>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="newsActions" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-save fa-lg mr-1"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="newsActions">
                        <li><a class="dropdown-item" href="#">Publish</a></li>
                        <li><a class="dropdown-item" href="#">Draft</a></li>
                        <li><a class="dropdown-item" href="#">Schedule</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="newsType" class="mb-2">Type</label>
                        <input type="text" class="form-control" id="newsType">
                    </div>
                </form>
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
