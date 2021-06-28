 @extends('admin.layout.master')
  @section('content')

<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
  <script src="{{ asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>
   
    <script>

           jQuery('textarea.my-editor').ckeditor({
            filebrowserImageBrowseUrl: '{{ url("public") }}/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '{{ url("public") }}/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
            filebrowserBrowseUrl: '{{ url("public") }}/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '{{ url("public") }}/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
        });
      });
     
  </script>
 <div class="row">
  <div class="col-md-12">
     

 <div class="card">
                        <div class="card-header">
                            <strong class="card-title">{{ $page_name }} </strong>
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                    @if(count($errors) > 0)
                    <div class="alert alert-danger" role="alert">
                      <ul>
                        @foreach($errors->all() as $error)
                        <li> {{ $error }} </li>
                        @endforeach

                      </ul>
   
                  </div>
                    @endif

                                  
                                  <hr>

    {{ Form::open(array('url' => 'back/post/store','method'=>'post', 'enctype'=>'multipart/form-data')) }}
                                 
                                      
                          <div class="form-group">
            {{ Form::label('title', 'Title', array('class' => 'control-label mb-1')) }}
                                      
            {{ Form::text('title',null,['class'=>'form-control','id'=>'title'] )  }}
                                </div>

                                 <div class="form-group">
            {{ Form::label('category', 'Category', array('class' => 'control-label mb-1')) }}
                                      
            {{ Form::select('category_id',$categories,null,['class'=>'form-control myselect','data-placeholder'=>'Select Category'] )  }}
                                </div>

                                 <div class="form-group">
     {{ Form::label('short_description', 'Short Description', array('class' => 'control-label mb-1')) }}
                                      
    {{ Form::textarea('short_description',null,['class'=>'form-control my-editor','id'=>'short_description'] )  }}
                                </div>



                                 <div class="form-group">
     {{ Form::label('description', 'Description', array('class' => 'control-label mb-1')) }}
                                      
    {{ Form::textarea('description',null,['class'=>'form-control my-editor','id'=>'description'] )  }}
                                </div>

           <div class="form-group">
 {{ Form::label('image', 'Image', array('class' => 'control-label mb-1')) }}
                                      
 {{ Form::file('img',['class'=>'form-control'] )  }}
                                </div>                        
 
                <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <i class="fa fa-lock fa-lg"></i>&nbsp;
                        <span id="payment-button-amount">Submit</span>
                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                    </button>
                </div>
                                  {{ Form::close() }}
                              </div>
                          </div>

                        </div>
                    </div> <!-- .card -->


    </div>
   
 </div>

   @endsection                 