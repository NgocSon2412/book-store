@extends('admin.layouts.app')

@section('title')
    All Users |
@endsection

@section('content')

	<div class="col-md-12 col-sm-12 col-xs-12">
	    <div class="">
	        <div class="x_title">
	            <h2>All Users</small></h2>
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
		                        <th>Email</th>
		                        <th>Admin</th>
		                        <th>Create date</th>
		                        <th>Update date</th>
		                        <th>Action</th>
		                    </tr>
		                </thead>
		                <tbody>
		                	@foreach ($users as $user)
		                	 	<tr>
			                        <td>
			                            <input type="checkbox" class="flat" name="table_records">
			                        </td>
			                        <td><a href="{{ url('/admin/users/'.$user->id) }}">{{ $user->name }}</a></td>
			                        <td><a href="{{ url('/admin/users/'.$user->id) }}">{{ $user->email }}</a></td>
			                        <td>{{ $user->admin }}</td>
			                        <td>{{ $user->created_at }}</td>
			                        <td>{{ $user->updated_at }}</td>
			                        <td>
			                        	<form action="{{ url('/admin/users/'.$user->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" id="delete-user-{{ $user->id }}" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Delete
                                            </button>
                                        </form>
			                        </td>
		                    	</tr>
		                	@endforeach
		                </tbody>
		            </table>
	        	</div>
	        </div>
	    </div>
	</div>

@endsection
