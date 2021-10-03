@extends('sms.base')
@section('content')
<div id="main">
    


    
   <div class="container mt-5">
        <div class="page-heading">
        
        {{-- message --}}
        {!! Toastr::message() !!}
        <section class="section">
            <div class="card">
                <div class="card-header">
                    User Datatable
                </div>
                <div class="card-body">
                    <table class="table table-hover table-sm" id="table1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Profile</th>
                                <th>Email Address</th>
                                <th>Phone Number</th>
                                <th>Status</th>
                                <th>Role Name</th>
                                <th class="text-center">Modify</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <a class="btn btn-primary btn-sm text-light" href="{{ route('user/add/new') }}">
                                <i class="fa fa-plus">Create New User</i>
                                        </a>
                            @foreach ($data as $key => $item)
                                <tr onclick="window.location.href='{{route('info/details',$item->id)}}'">
                                    <td class="id">{{ ++$key }}</td>
                                    <td class="name">{{ $item->name }}</td>
                                    <td class="name">
                                        <div class="avatar avatar-xl">
                                            <img src="{{ URL::to('/images/'. $item->avatar) }}" alt="{{ $item->avatar }}" style="width: 50px; height: 50px">
                                        </div>
                                    </td>
                                    <td class="email">{{ $item->email }}</td>
                                    <td class="phone_number">{{ $item->phone_number }}</td>
                                    @if($item->status =='Active')
                                    <td class="status"><span class="badge bg-success">{{ $item->status }}</span></td>
                                    @endif
                                    @if($item->status =='Disable')
                                    <td class="status"><span class="badge bg-danger">{{ $item->status }}</span></td>
                                    @endif
                                    @if($item->status ==null)
                                    <td class="status"><span class="badge bg-danger">{{ $item->status }}</span></td>
                                    @endif
                                    @if($item->role_name =='Admin')
                                    <td class="role_name"><span  class="badge bg-success">{{ $item->role_name }}</span></td>
                                    @endif
                                    @if($item->role_name =='Super Admin')
                                    <td class="role_name"><span  class="badge bg-info">{{ $item->role_name }}</span></td>
                                    @endif
                                    @if($item->role_name =='Normal User')
                                    <td class="role_name"><span  class=" badge bg-warning">{{ $item->role_name }}</span></td>
                                    @endif
                                    <td class="text-center">
                                        
                                        
                                        <a class="btn btn-primary btn-sm text-light" href="{{ url('view/detail/'.$item->id) }}">
                                                    <i class="fa fa-edit"></i>
                                        </a>
                                         
                                         
                                        <a href="{{ url('delete_user/'.$item->id) }}" onclick="return confirm('Are you sure to want to delete it?')"><span class=" bg-danger"></span>
                                        <button type="button" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
   </div>
    <footer>
        <div class="footer clearfix mb-0 text-muted ">
            <div class="float-start">
                <p style="text-align: center">2021 &copy; E.N</p>
            </div>
        </div>
    </footer>
</div>


@endsection
