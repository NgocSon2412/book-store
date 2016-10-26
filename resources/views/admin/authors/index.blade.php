@extends('admin.layouts.app')

@section('title')
    All authors |
@endsection

@section('content')

    <div class="" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Authors</h3> </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Add new <small>author</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form id="demo-form" action="{{ url('/admin/authors') }}" data-parsley-validate method="post">
                                {{ csrf_field() }}
                                <label for="fullname">Name * :</label>
                                <input type="text" id="fullname" class="form-control" name="name" value="{{ old('name') }}" required />
                                @if ($errors->has('name')) 
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span> 
                                @endif
                                <label for="message">Description * :</label>
                                <textarea id="message" required="required" class="form-control" name = "description" value="{{ old('description') }}" rows="5"></textarea>
                                @if ($errors->has('description')) 
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span> 
                                @endif
                                <div class="ln_solid"></div>
                                <button type="submit" class="btn btn-success">All new</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>All<small>authors</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                                    <thead>
                                        <tr>
                                            <th>
                                                <input type="checkbox" id="check-all" class="flat">
                                            </th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Aciton</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($authors as $author)
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="flat" name="table_records">
                                                </td>
                                                <td><a href="{{ url('/admin/authors/'.$author->id ) }}">{{ $author->name }}</a></td>
                                                <td>{{ $author->description }}</a></td>
                                                <td>
                                                    <div>
                                                        <a href="{{ url('/admin/authors/'.$author->id . '/edit') }}"  style="color: #00CC99;">
                                                            <i class="fa fa-edit m-right-xs"></i><b>Edit</b>
                                                        </a> | 
                                                        <a data-toggle="modal" data-target=".author_form_delete_{{ $author->id }}" href=""  style="color: red;">
                                                            <i class="fa fa-btn fa-trash"></i> <b> Delete </b>
                                                        </a>
                                                    </div>
                                                    <div class="modal fade author_form_delete_{{ $author->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> </button>
                                                                    <h4 class="modal-title" id="myModalLabel">Delete Author</h4> </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ url('/admin/authors/'.$author->id) }}" method="POST">
                                                                        {{ csrf_field() }}
                                                                        {{ method_field('DELETE') }}
                                                                        <h3 style="text-align: center;">You are ok? </h3>
                                                                        <div class="modal-footer"> <a class="btn btn-default" data-dismiss="modal">Cancel</a>
                                                                            <button type="submit" id="delete-author-{{ $author->id }}" class="btn btn-danger">
                                                                                <i class="fa fa-btn fa-trash"></i> Delete
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
