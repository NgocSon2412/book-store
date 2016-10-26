@extends('admin.layouts.app')

@section('title')
    All Users |
@endsection

@section('content')

	<div class="col-md-12 col-sm-12 col-xs-12">
	    <div class="x_panel">
	        <div class="x_title">
	            <h2>All Users</small></h2>
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
		                        <th>Email</th>
		                        <th>Admin</th>
		                        <th>Create date</th>
		                        <th>Update date</th>
		                    </tr>
		                </thead>
		                <tbody>
		                	@foreach ($users as $user)
		                	 	<tr>
			                        <td>
			                            <input type="checkbox" class="flat" name="table_records">
			                        </td>
			                        <td class="sorting_1">
			                        	<a href="{{ url('/admin/users/'.$user->id) }}" class="text-success">{{ $user->name }}</a>
			                        </td>
			                        <td><a href="{{ url('/admin/users/'.$user->id) }}" class="text-success">{{ $user->email }}</a></td>
			                        <td>{{ $user->admin }}</td>
			                        <td>{{ $user->created_at }}</td>
			                        <td>{{ $user->updated_at }}</td>
		                    	</tr>
		                	@endforeach
		                </tbody>
		            </table>
	        	</div>
	        </div>
	    </div>
	</div>

@endsection
