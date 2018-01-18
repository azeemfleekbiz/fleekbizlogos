@extends('admin.layouts.header')
@section('contents')
<section class="content-header">
      <h1>
        Update {{$user->f_name}}  {{$user->l_name}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Update {{$user->f_name}}  {{$user->l_name}}</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
 <div class="box">
            <div class="box box-info">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="{{url('/admin/users/update-author')}}">
                 {{ csrf_field() }}
                 <input type="hidden" name="user_id" value="{{$user->id}}">
                 <input type="hidden" name="company_id" value="{{$user_company[0]->id}}">
              <div class="box-body">                  
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Select User Type</label>

                  <div class="col-sm-10">
                      <select class="form-control" name="user_role" id="user_role" required="required">
                          <option value="" >Select User Role</option> 
                      @foreach( $user_role as $userrole )
                      <option value="{{$userrole->id}}"  @if ($userrole->id === $user->user_role) selected="selected"  @endif>{{$userrole->name}}</option>                   
                     @endforeach
                  </select>
                  </div>
                </div> 
                  
                  
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">First Name</label>

                  <div class="col-sm-10">
                      <input type="text" name="f_name" class="form-control" id="inputEmail3" placeholder="First Name" required="required" value="{{$user->f_name}}">
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Last Name</label>

                  <div class="col-sm-10">
                    <input type="text" name="l_name" class="form-control" id="inputEmail3" placeholder="Last Name" required="required" value="{{$user->l_name}}">
                  </div>
                </div>
                  
                  
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Phone Number</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="phone" id="inputEmail3" placeholder="Phone Number" required="required" value="{{$user->phone}}">
                  </div>
                </div>
                  
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Company Name</label>

                  <div class="col-sm-10">
                      <input type="text" name="company_name" class="form-control" id="inputEmail3" placeholder="Company Name" required="required" value="{{$user_company[0]->company_name}}">
                  </div>
                </div>  
                  
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Company Phone Number</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="company_phone" id="inputEmail3" placeholder="Company Phone Number" required="required" value="{{$user_company[0]->company_phone}}">
                  </div>
                </div>
                  
                    
                  
                 
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Company Address </label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="company_address" id="inputEmail3" placeholder="Company Address" required="required" value="{{$user_company[0]->company_address}}">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Website Url</label>
                  <div class="col-sm-10">
                      <input type="text" name="website_url" class="form-control" id="inputEmail3" placeholder="Web Site url" required="required" value="{{$user_company[0]->site_url}}">
                  </div>
                </div>  
                
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">About Company </label>

                  <div class="col-sm-10">
                      <textarea name="about_company" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$user_company[0]->about_company}}</textarea>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <input type="submit" class="btn btn-info pull-right" value="Submit"></button>
                 
                <button type="reset" value="Reset" class="btn btn-info pull-left" style="margin-left: 672px">Reset</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
            <!-- /.box-body -->
          </div>
            <!-- /.box-header -->
            
            <!-- /.box-body -->
          </div>


@extends('admin.layouts.footer')

@endsection

