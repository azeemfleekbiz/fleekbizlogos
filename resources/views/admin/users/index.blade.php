@extends('admin.layouts.header')
@section('contents')
<section class="content-header">
      <h1>
        Users        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Users</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
 <div class="box">
            <div class="box-header">
             <div class="box-header">
                 <a href="{{url('admin/users/create')}}"
        <button rel="" type="button" 
                class="btn btn-info make-modal-large iframe-form-open" 
                 title="Add User">
            <span class="glyphicon glyphicon-plus"></span>Add
        </button>
             </a>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Phone</th>                  
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                 @foreach( $users as $user )
                <tr>
                  <td>{{$user->f_name}}</td>
                  <td>{{$user->l_name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->phone}}</td>
                  <td><a href="{{ url('/admin/users/edit/'.$user->id) }}" rel="" 

              class="iframe-form-open make-modal-large btn btn-default" 

             

              title="Edit Coupon: {{$user->f_name}}  {{$user->l_name}}">

            <span class="glyphicon glyphicon-pencil"></span>

            </a>
                        <a href="" rel="" type="button" 
                class="btn btn-info make-modal-large iframe-form-open" 
                data-toggle="modal"  title="Delete Coupon">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a></td>
                </tr>
                 @endforeach
                
               
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>


@extends('admin.layouts.footer')
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection

