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
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('admin.news') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="newsHeading" class="mb-2">Headline</label>
                        <input type="text" class="form-control" id="newsHeading" name="newsHeading">
                    </div>
                    <div class="form-group mb-3">
                        <label for="newBody" class="mb-2">Another label</label>
                        <textarea id="editor" name="editor"></textarea>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group col-md-6">
                            <label for="newsType" class="mb-2">Type</label>
                            <select class="form-control" id="newsType" name="newsType">
                                @foreach ($types as $type)
                                    <option value={{ $type['id'] }}>{{ $type['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="newStatus" class="mb-2">Status</label>
                            <select class="form-control" id="newStatus" name="newStatus">
                                <option value="1">Publish</option>
                                <option value="2">Draft</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block w-100">
                        <i class="fas fa-save fa-lg mr-2"></i>Submit
                    </button>
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
