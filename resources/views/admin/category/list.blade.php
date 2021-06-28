  @extends('admin.layout.master')
  @section('content')

 
    <link rel="stylesheet" href="{{ asset('admin/assets/css/lib/datatable/dataTables.bootstrap.min.css ') }}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    
 
 


  <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>{{ $page_name }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card mt-3 ml-3 mr-3">

                        <div class="card-header bg-primary">
                            <strong class="card-title">{{ $page_name }}</strong>
                   
 <a href="{{ url('/back/category/create') }}" class="btn btn-success pull-right">Create</a>            
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Status </th>
                         <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach($data as $i=>$row)
                      <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $row->name }}</td>
                        <td>
                          @if($row->status == 1)

                        <span class="badge badge-success">Active</span>
                        @else
                        <span class="badge badge-danger">Inactive</span>
                        @endif
                        </td>


                        <td>
           <a href="{{ url('/back/category/edit/'.$row->id) }} " class="btn btn-primary"> <i class="fa fa-pencil"></i> Edit</a>
           @if($row->status == 1)
           <a href="{{ url('/back/category/inactive/'.$row->id) }} " class="btn btn-danger"> <i class="fa fa-arrow-down"></i> Inactive</a>
           @else
           <a href="{{ url('/back/category/active/'.$row->id) }} " class="btn btn-success"> <i class="fa fa-arrow-up"></i> Active</a>
           @endif
           <a href="{{ url('/back/category/delete/'.$row->id) }} " class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i> Delete</a>
           

                         </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

    <script src="{{ asset('admin/assets/js/vendor/jquery-2.1.4.min.js ') }}"></script>
 
    <script src="{{ asset('admin/assets/js/plugins.js ') }}"></script>
    <script src="{{ asset('admin/assets/js/main.js ') }}"></script>

<script src="{{ asset('admin/assets/js/lib/data-table/datatables.min.js') }}  "></script>
    <script src="{{ asset('admin/assets/js/lib/data-table/dataTables.bootstrap.min.js ') }}"></script>
    <script src="{{ asset('admin/assets/js/lib/data-table/dataTables.buttons.min.js ') }}"></script>
    <script src="{{ asset('admin/assets/js/lib/data-table/buttons.bootstrap.min.js ') }}"></script>
    <script src="{{ asset('admin/assets/js/lib/data-table/jszip.min.js ') }}"></script>
    <script src="{{ asset('admin/assets/js/lib/data-table/pdfmake.min.js ') }}"></script>
    <script src="{{ asset('admin/assets/js/lib/data-table/vfs_fonts.js ') }}"></script>
    <script src="{{ asset('admin/assets/js/lib/data-table/buttons.html5.min.js ') }}"></script>
    <script src="{{ asset('admin/assets/js/lib/data-table/buttons.print.min.js ') }}"></script>
    <script src="{{ asset('admin/assets/js/lib/data-table/buttons.colVis.min.js ') }}"></script>
    <script src="{{ asset('admin/assets/js/lib/data-table/datatables-init.js ') }}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>







@endsection