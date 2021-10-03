@extends('sms.base')
@section('content')
    <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="../../assets/images/users/5.jpg" class="rounded-circle" width="150">
                                    

                                <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">{{$data[0]->name}}</a></h5>
                                <span>Phone Number: {{$data[0]->phone_number}}</span>

                                    <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i>
                                                <font class="font-medium">254</font>
                                            </a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i>
                                                <font class="font-medium">54</font>
                                            </a></div>
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr>
                                <div class="col-sm-12 text-center">
                                            <button data-bs-toggle="modal" data-bs-target="#modal-default" class="btn btn-success text-white"> Verify</button>
                                        </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$data[0]->name}}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" value="{{$data[0]->email}} " placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$data[0]->phone_number}}"" placeholder="123 456 7890" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    
                                    
                                    {{-- <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white">Update Profile</button>
                                        </div>
                                    </div> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>



<div class="modal fade" id="modal-default" tabindex="-1" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Virfiying...</h4>
                            <button type="button" class="close" data-dismiss="modal">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="{{route('verifying')}}" method="POST">
                                @csrf
                                
                                <input type="text" id="verify" name="verfication1" class="form-control" id="input-normal" required />

                                <input type="hidden" id="verify" name="verfication2" class="form-control" id="input-normal" value="{{$data[0]->phone_number}}" />

                                <input type="hidden" id="verify" name="verfication_id" class="form-control" id="input-normal" value="{{$data[0]->id}}" />
                                
                                 

                                <div class="modal-footer">
                                  <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-bold btn-pure btn-primary" >Verify</button>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
@endsection