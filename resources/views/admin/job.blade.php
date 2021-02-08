@extends('admin.layout.master')

@section('content')

<div id="layoutSidenav_content">
 @if(Session::has('flash_message_error'))
        <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
        <strong>{{ session('flash_message_error') }}</strong>
        </div>
        @endif
        @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
        <strong>{{ session('flash_message_success') }}</strong>
        </div>
 @endif
  <main>
  	<div class="container-fluid">
  		<h1 class="mt-4">Assign Job</h1>
  		<div class="container-fluid agent-page">
  			<div class="card border-0">
        		<article class="card-body r-card">
        			<form enctype="multipart/form-data" action="{{url('add-job')}}" method="post">
        				{{csrf_field()}}
                       <div class="customer-query">
							<div class="bs-example">
							    <div class="accordion" id="accordionExample">
							        <div class="card">
							            <div class="card-header" id="headingOne">
							                <h2 class="mb-0">
							                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne1"></button>									
							                </h2>
							            </div>
							            <div id="collapseOne" class="show" aria-labelledby="headingOne" data-parent="#accordionExample">
							                <div class="card-body">
							                	<div class="tab-inner-one writable">
	                                                
	                                                
	                                              <div class="row">
	                                                    <div class="col-md-6">
	                                                        <div class="f-flex">
	                                                          <div class="f-label">
	                                                            <label>Company Name<span class="mandatory">*</span></label>
	                                                          </div>
	                                                          <div class="f-input">
	                                                            <input type="text" id="companyname" name="compname">
	                                                          </div>
	                                                        </div>
	                                                    </div>
	                                                    
	                                                    <div class="col-md-6">
	                                                        <div class="f-flex">
	                                                          <div class="f-label">
	                                                            <label>Assign Date<span class="mandatory">*</span></label>
	                                                          </div>
	                                                          <div class="f-input">
	                                                            <input type="date" id="date" name="assndate">
	                                                          </div>
	                                                        </div>
	                                                    </div>
	                                              </div>

	                                              <div class="row">
	                                                    <div class="col-md-6">
	                                                        <div class="f-flex">
	                                                          <div class="f-label">
	                                                            <label>Experience<span class="mandatory">*</span></label>
	                                                          </div>
	                                                          <div class="f-input" style="color: blue">
	                                                            <input type="text" id="Experience" name="exprenc">in years
	                                                          </div>
	                                                        </div>
	                                                    </div>
	                                                    
	                                                    <div class="col-md-6">
	                                                        <div class="f-flex">
	                                                          <div class="f-label">
	                                                            <label>CTC<span class="mandatory">*</span></label>
	                                                          </div>
	                                                          <div class="f-input" style="color: blue">
	                                                            <input type="text" id="ctc" name="ctc">per year
	                                                          </div>
	                                                        </div>
	                                                    </div>
	                                              </div>
	                                              <div class="row">
	                                                    <div class="col-md-6">
	                                                        <div class="f-flex">
	                                                          <div class="f-label">
	                                                            <label>Notice Period<span class="mandatory">*</span></label>
	                                                          </div>
	                                                          <div class="f-input" style="color: blue">
	                                                            <input type="text" id="noticeperiod" name="noticperiod">in days
	                                                          </div>
	                                                        </div>
	                                                    </div>
	                                                    
	                                                    <div class="col-md-6">
	                                                        <div class="f-flex">
	                                                          <div class="f-label">
	                                                            <label>Location<span class="mandatory">*</span></label>
	                                                          </div>
	                                                          <div class="f-input">
	                                                            <input type="text" id="Location" name="locn">
	                                                          </div>
	                                                        </div>
	                                                    </div>
	                                              </div>

	                                              <div class="row">
	                                              	 <div class="col-md-6">
	                                                        <div class="f-flex">
	                                                          <div class="f-label">
	                                                            <label>Assign User<span class="mandatory">*</span></label>
	                                                          </div>
	                                                          <div class="f-input">
	                                                            <select name="userid" id="user_id" class="selectpicker"  >
                                                               <option value='' selected disabled>select..</option>
                                                                  @foreach($users as $user)
                                                                   <option value="{{$user->id}}">{{$user->name}}</option>
                                                                          
                                                                  @endforeach
                                                            </select>
	                                                          </div>
	                                                        </div>
	                                                    </div>
                                                        <div class="col-md-6">
	                                                        <div class="f-flex">
	                                                          <div class="f-label">
	                                                            <label>files<span class="mandatory">*</span></label>
	                                                          </div>
	                                                          <div class="f-input">
	                                                            <input type="file" id="file" name="file">
	                                                          </div>
	                                                        </div>
	                                                    </div>
	                                              </div>

	                                              <div class="row">
	                                                    <div class="col-md-12">
	                                                        <div class="f-flex">
	                                                          <div class="f-label">
	                                                            <label>Job Description<span class="mandatory">*</span></label>
	                                                          </div>
	                                                          <div class="f-input">
	                                                           <textarea id="jobdescription" name="description" rows="6"class="form-control"></textarea>
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
						</div>
						<div style="overflow:auto;">
	                        <div style="float:right; margin-top: 5px;">
	                             <button type="submit" class="submit query-btn">Submit</button>
	                        </div>
                      </div>
        			</form>
        		</article>
              </div>
          	</div>
        </div>
 </main>

<!--footer  -->
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; CMS 2020</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>



                 
@endsection 

<!-- <script src="{{ URL :: to('/') }}/public/assets/js/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script> -->          
