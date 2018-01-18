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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Company</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                
                <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.0</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.1</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1.1</td>
                  <td>A</td>
                </tr>
                
               
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

