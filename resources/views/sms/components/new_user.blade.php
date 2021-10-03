
@extends('sms.base')
@section('content')
    <div id="auth">
        <div class="row h-100 mt-5">
            <div class="col-lg-12 col-12">
                <div class="container">

                    <div class="card ">
                        <div class="card-header">
                            <h6>Create New User</h6>

                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('user/add/save') }}" class="md-float-material" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                            <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter Your Name">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>

                       <div class="col-md-4">
                            <div class="form-group position-relative has-icon-left mb-4">
                            <input class="form-control @error('image') is-invalid @enderror" name="image" type="file" id="image" multiple="">
                            <div class="form-control-icon">
                                <i class="bi bi-person-square"></i>
                            </div>
                        </div>
                       </div>

                        <div class="col-md-4">
                            <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group position-relative has-icon-left mb-4">
                            <input type="tel" class="form-control  @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Enter Your Phone Number">
                            <div class="form-control-icon">
                                <i class="bi bi-phone"></i>
                            </div>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group position-relative has-icon-left mb-4">
                            <fieldset class="form-group">
                                <select class="form-control form-select @error('role_name') is-invalid @enderror" name="role_name" id="role_name">
                                    <option selected disabled>Select Role Name</option>
                                    <option value="Admin">IT</option>
                                    <option value="Super Admin">Admin</option>
                                    <option value="Normal User">Normal User</option>
                                </select>
                                <div class="form-control-icon">
                                    <i class="bi bi-exclude"></i>
                                </div>
                            </fieldset>
                            @error('role_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="Choose Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control " name="password_confirmation" placeholder="Choose Confirm Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                        </div>
                        </div>
                        <div class="btn">
                            <button class="btn btn-primary btn-block btn-sm shadow-lg mt-5" style="float: left">Create</button>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                </div>
            </div>
        </div>
    </div>
@endsection
