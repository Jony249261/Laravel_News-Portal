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
                    <div class="card">

                        <div class="card-header">
                            <strong class="card-title">{{ $page_name }}</strong>
     @permission(['Post Add','All'])              
 <a href="{{ url('/back/posts/create') }}" class="btn btn-primary pull-right">Create</a>            @endpermission
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Author</th>
                         <th>Total View</th>
                         <th>Status</th>
                         <th>Hot News</th>
                         <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach($data as $i=>$row)
                      <tr>
                        <td style="width: 5%">{{ ++$i }}</td>
                        <td> 
                 @if(file_exists(public_path('/post/').$row->thumb_image))
                 <img src="{{ asset('post') }}/{{ $row->thumb_image }} " class="img img-responsive">

                 @endif 
                        </td> 
                        <td  style="width: 10%">{{ $row->title }}</td>
                        <td style="width: 5%"> {{ $row->creator->name }} </td>

                        <td style="width: 5%">{{ $row->view_count }}</td>
                      <td> 
                    
                     @if($row->status == 1)

                        <span class="badge badge-success">Active</span>
                        @else
                        <span class="badge badge-danger">Inactive</span>
                        @endif
                       

                         </td>

                          <td style="width: 5%"> 
                     
                     @if($row->hot_news === 1)
                        <a href="{{ url('/back/post/hot/news/'.$row->id) }} " class="btn btn-success btn-sm"> <i class="fa fa-check-circle"></i> Yes</a>
                       @else
                       <a href="{{ url('/back/post/hot/news/'.$row->id) }} " class="btn btn-danger btn-sm"> <i class="fa fa-times-circle"></i> No</a>
                     @endif
                       

                         </td>
 

                        <td>
                          @permission(['Post Add','All','Post Update']) 
             <a href="{{ url('/back/post/edit/'.$row->id) }} " class="btn btn-primary btn-sm"> <i class="fa fa-pencil"></i> Edit</a>
             @if($row->status == 1)
           <a href="{{ url('/back/post/inactive/'.$row->id) }} " class="btn btn-danger btn-sm"> <i class="fa fa-arrow-down"></i> Inactive</a>
           @else
           <a href="{{ url('/back/post/active/'.$row->id) }} " class="btn btn-success btn-sm"> <i class="fa fa-arrow-up"></i> Active</a>
           @endif
           <a href="{{ url('/back/post/delete/'.$row->id) }} " class="btn btn-danger btn-sm" id="delete"> <i class="fa fa-trash"></i> Delete</a>
           <a href="{{ url('/back/post/comment/'.$row->id) }} " class="btn btn-info btn-sm" > <i class="fa fa-eye"></i> Comment</a>
           @endpermission

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