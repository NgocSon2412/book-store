@extends('admin.layouts.app')

@section('title')
    Edit category |
@endsection

@section('content')

    <div class="" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit Categories</h3> </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Edit <small>category</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form id="demo-form" action="{{ url('/admin/categories/'.$category->id) }}" data-parsley-validate method="post">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <label for="fullname">Name * :</label>
                                <input type="text" id="fullname" class="form-control" name="name" value="{{ $category->name }}" required />
                                <label for="message">Description * :</label>
                                <textarea id="message" required="required" class="form-control" name = "description" value="{{ $category->description }}" rows="5"></textarea>
                                <div class="ln_solid"></div>
                                <button type="submit" class="btn btn-success">Edit Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
