@extends('admin.Layout.master')
@section('content')
    <div class="page-header">
        <h3 class="page-title"> Form elements </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form elements</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card" style="background-color: cornflowerblue">
                <div class="card-body">
                    <h4 class="card-title">PRODUCT CREATIONS</h4>
                    <form class="forms-sample" action="{{ route('admin.products.save') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" class="form-control" name="prize" placeholder="price">
                        </div>
                        <div class="form-group">
                            <label for="">Category</label>
                            <select name="category_id" class="form-group">
                                <option value="">Select an option</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="photo" id="photo">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Staus</label>
                            <input type="radio" name="status" value="1" id="status">Active
                            <input type="radio" name="status" value="0" id="status">Inactive

                        </div>
                        <div class="form-group">
                            <label for="">Is_Faviorate</label>
                            <input type="radio" name="is_favourite" value="1" id="is_favourite">Yes
                            <input type="radio" name="is_favourite" value="0" id="is_favourite">No

                        </div>


                        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->
@endsection
