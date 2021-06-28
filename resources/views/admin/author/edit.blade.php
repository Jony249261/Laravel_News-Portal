  @extends('admin.layout.master')
  @section('content')

 <div class="row">
  <div class="col-md-12">
     

 <div class="card mt-3 ml-3 mr-3">
                        <div class="card-header bg-primary">
                            <strong class="card-title"> {{ $page_name }} </strong>
                            <a href="{{ url('/back/author') }}" class="btn btn-success pull-right">All Author</a>
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

    {{ Form::model($author,['route' => ['author-update',$author->id],'method'=>'put']) }}
                                 
                                      
                          <div class="form-group">
            {{ Form::label('name', 'Name', array('class' => 'control-label mb-1')) }}
                                      
            {{ Form::text('name',null,['class'=>'form-control','id'=>'name'] )  }}
                                </div>

                                 <div class="form-group">
            {{ Form::label('email', 'Email', array('class' => 'control-label mb-1')) }}
                                      
             {{ Form::email('email',null,['class'=>'form-control','id'=>'email'] )  }}
                                </div>

                                 <div class="form-group">
            {{ Form::label('password', 'Password', array('class' => 'control-label mb-1')) }}
                                      
            {{ Form::password('password',['class'=>'form-control','id'=>'password'] )  }}
                                </div>

       <div class="form-group">
            {{ Form::label('role', 'Roles', array('class' => 'control-label mb-1')) }}
                                      
            {{ Form::select('roles[]',$roles,$selectedRoles,['class'=>'myselect','data-placeholder'=>'Select role(s)', 'multiple'] )  }}
                                </div>

                <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <i class="fa fa-lock fa-lg"></i>&nbsp;
                        <span id="payment-button-amount">Update</span>
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