@extends('sms.base')

@section('content')
<div id="main">
    {{-- message --}}
        {!! Toastr::message() !!}
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
       
        <div class="col-12 mt-2">
            <div class="card">
                <a href="{{ route('form/staff/new') }}">
                    <span class="badge bg-primary text-light" style="color: #fff;font-size:1em"><i class="fa fa-plus"></i>Create new member </span>
                   
                </a>
               
                <div class="card-content">
                    <div class="card-body">
                        <div class="card-body">
                    <table class="table  table-responsive table-sm table-hover" id="table1">
                        <caption>Display Staff</caption>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Sex</th>
                                <th>Email Address</th>
                                <th>Phone Number</th>
                                <th>Position</th>
                                <th>Department</th>
                                <th>Salary</th>
                                <th class="text-center">Modify</th>
                            </tr>    
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $item)
                                <tr onclick="window.location.href='{{route('staff/updates',$item->id )}}'">
                                    <td class="id">{{ ++$key }}</td>
                                    <td class="name">{{ $item->rec_id }}</td>
                                    <td class="name">{{ $item->full_name }}</td>
                                    <td class="name">{{ $item->sex }}</td>
                                    <td class="email">{{ $item->email_address }}</td>
                                    <td class="phone_number">{{ $item->phone_number }}</td>
                                    <td class="phone_number">{{ $item->position }}</td>
                                    <td class="phone_number">{{ $item->department }}</td>
                                    <td class="phone_number">{{ $item->salary }}</td>
                                    <td class="text-center" >
                                        
                                        <a href="{{ url('form/view/detail/'.$item->id) }}">
                                            <span class="badge bg-success"><i class="fa fa-edit text-light"></i></span>
                                        </a>    
                                        <a href="{{ url('delete/'.$item->id) }}" onclick="return confirm('Are you sure to want to delete it?')"><span class="badge bg-danger text-light"><i class="fa fa-trash"></i></span></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                    </div>
                </div>
            </div>
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
