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
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('admin.types')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="newsType" class="mb-2">Type</label>
                        <input type="text" class="form-control" id="newsType" name="name">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block w-100">
                        <i class="fas fa-save fa-lg mr-2"></i>Submit
                    </button>

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
