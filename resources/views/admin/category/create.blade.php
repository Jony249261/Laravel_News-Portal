 @extends('admin.layout.master')
  @section('content')

 <div class="row">
  <div class="col-md-12">
     

 <div class="card ml-3 mt-3 mr-3">
                        <div class="card-header bg-primary text-white ">
                            <strong class="card-title">Category Create Page</strong>
                            <a href="{{ url('/back/category') }}" class="btn btn-success pull-right">Category List</a>
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

    {{ Form::open(array('url' => 'back/category/store','method'=>'post')) }}
                                 
                                      
                          <div class="form-group">
            {{ Form::label('name', 'Name', array('class' => 'control-label mb-1')) }}
                                      
            {{ Form::text('name',null,['class'=>'form-control','id'=>'name'] )  }}
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