@extends('admin.layouts.app')

@section('title')
    User Profile |
@endsection

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="">
        <div class="x_title">
            <h2>User Profile ! <small>{{ $user->name }}</small></h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                    <div class="profile_img">
                        <div id="crop-avatar">
                            <!-- Current avatar --><img class="img-responsive avatar-view" src="http://localhost/book_store/resources/assets/images/picture.jpg" alt="Avatar" title="Change the avatar">
                            </div>
                    </div>
                    <h3>{{ $user->name }}</h3>
                    <ul class="list-unstyled user_data">
                        <li> <i class="fa fa-user user-profile-icon"></i> </li>
                        <li> <i class="fa fa-envelope user-profile-icon"></i> <a href="#">{{ $user->email }}</a></li>
                        <li> <i class="fa fa-cogs user-profile-icon"></i> 
                        	Role : 
                        	@if ($user->admin === 1)
                        		admin
                        	@else
                        		user
                        	@endif
                        </li>
                    </ul>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".user_form_edit"><i class="fa fa-edit m-right-xs"></i> Edit Profile</button>
                    <div class="modal fade user_form_edit" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> </button>
                                    <h4 class="modal-title" id="myModalLabel">Edit Profile</h4> </div>
                                <div class="modal-body">
                                    <form class="form-horizontal form-label-left" data-parsley-validate="" id="edit_user_1" action="{{ url('/admin/users/'.$user->id) }}" accept-charset="UTF-8" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <input name="utf8" type="hidden" value="&#x2713;" />
                                        <input type="hidden" name="_method" value="patch" />
                                        <input type="hidden" name="authenticity_token" value="iZmzX7zQm2xu+ATmbMQJvHDMw0vHE/Ga+CMHmNcZpQcVVYd4+qz2Em9Er44r4mq7nW7Qnt0cZ9zb8EgkMVbGBg==" />
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Full Name </label>
                                            <div class="col-md-8 col-sm-6 col-xs-12">
                                                <input class="form-control col-md-7 col-xs-12" required="required" type="text" value="{{ $user->name }}" name="name" id="user_email" /> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-6 col-xs-12">
                                                <input class="form-control col-md-7 col-xs-12" required="required" type="email" value="{{ $user->email }}" name="email" id="user_email" /> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Role <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-6 col-xs-12">
                                                <select class="form-control" name="role" id="user_role">
                                                    <option value="Administrator">Administrator</option>
                                                    <option value="User">User</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"> <a class="btn btn-default" data-dismiss="modal">Cancel</a>
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="row">
		                <div class="col-md-12 col-sm-12 col-xs-12">
		                  <div class="x_panel">
		                    <div class="x_title">
		                      <h2>Visitors location <small>geo-presentation</small></h2>
		                      <ul class="nav navbar-right panel_toolbox">
		                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
		                        </li>
		                        </li>
		                      </ul>
		                      <div class="clearfix"></div>
		                    </div>
		                    <div class="x_content">
		                      <div class="dashboard-widget-content">
		                        <div class="col-md-4 hidden-small">
		                          <h2 class="line_30">125.7k Views from 60 countries</h2>

		                          <table class="countries_list">
		                            <tbody>
		                              <tr>
		                                <td>United States</td>
		                                <td class="fs15 fw700 text-right">33%</td>
		                              </tr>
		                              <tr>
		                                <td>France</td>
		                                <td class="fs15 fw700 text-right">27%</td>
		                              </tr>
		                              <tr>
		                                <td>Germany</td>
		                                <td class="fs15 fw700 text-right">16%</td>
		                              </tr>
		                              <tr>
		                                <td>Spain</td>
		                                <td class="fs15 fw700 text-right">11%</td>
		                              </tr>
		                              <tr>
		                                <td>Britain</td>
		                                <td class="fs15 fw700 text-right">10%</td>
		                              </tr>
		                            </tbody>
		                          </table>
		                        </div>
		                        <div id="world-map-gdp" class="col-md-8 col-sm-12 col-xs-12" style="height:230px;"></div>
		                      </div>
		                    </div>
		                  </div>
		                </div>
          			</div>
      			</div>
            </div>   
        </div>
    </div>
</div> 
@endsection
