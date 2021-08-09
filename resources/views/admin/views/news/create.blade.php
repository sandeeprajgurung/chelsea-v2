@extends('admin.app')
@section('main-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Publish News</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item">News</li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    <i class="fas fa-table me-1"></i>
                    News DataTable
                </div>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="newsActions"
                        data-bs-toggle="dropdown" aria-expanded="false">
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
                        <label for="newsHeading" class="mb-2">Headline</label>
                        <input type="text" class="form-control" id="newsHeading">
                    </div>
                    <div class="form-group mb-3">
                        <label for="newBody" class="mb-2">Another label</label>
                        <textarea id="editor"></textarea>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group col-md-6">
                            <label for="newsType" class="mb-2">Type</label>
                            <select class="form-control" id="newsType">
                                <option>Interview</option>
                                <option>News</option>
                                <option>History</option>
                                <option>Analysis</option>
                                <option>Blog</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="newsTags" class="mb-2">Tags</label>
                            <input type="text" class="form-control" id="newsTags">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('content-script')
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
    <script type="text/javascript">
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
