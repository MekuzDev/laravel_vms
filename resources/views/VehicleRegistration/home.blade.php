@extends('layouts.main')
@section('title','Vehicle Registeration')
@section('name','Vehicle Registeration')


@section('content')
<div class="col-xl-12">
    <div class="card">
        <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-0">Vehicle Registration Table</h4>
            </div>
            <div>
                @error('status')
                <small class="text-danger">{{ucwords($message)}}</small>
                @enderror
            </div>
            <div>
                @error('status_update')
                <small class="text-danger">{{ucwords($message)}}</small>
                @enderror
            </div>
       
            <a class="btn ripple btn-success my-3" href="{{route('vreg-create')}}">Register Vehicle</a>
            @if ($message = session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
                <span class="alert-inner--text"><strong>Success!</strong> {{$message}}!</span>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">×</span></button>
            </div>
            @endif
            
            <p class="tx-12 tx-gray-500 mb-2">NB: please ensure enter valid data into input fields</p>
           
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered mg-b-0 text-md-nowrap" style="  white-space: nowrap">
                    <thead>
                       
                            <th>ID</th>
                            <th>Registration no</th>
                            <th>vehicle User</th>
                            <th>Location</th>
                            <th>Model Name</th>
                            <th>Year</th>
                            <th>Vehicle Status</th>
                            <th>Purchase Value</th>
                            <th>Purchase Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vreg as $key => $regValue) 
                        <tr>
                            <th scope="row">{{$regValue->id}}</th>
                            <td>{{$regValue->regno}}</td>
                            <td>{{$regValue->vehicleUser->fullname}}</td>
                            <td>{{$regValue->getLocation($regValue->vehicleUser->id)}}</td>
                            <td>{{$regValue->vehicleModel->model_name}}</td>
                            <td>{{$regValue->vehicleModel->model_year}}</td>
                            <td>{{$regValue->vehicleStatus->status}}</td>
                            <td>{{$regValue->purchase_date}}</td>
                            <td>{{$regValue->purchase_amount}}</td>
                            <td><a href="{{route('vreg-update',$regValue->id)}}" class="btn btn-success">Edit</a></td>
                            <td><a href="" class="btn btn-danger delete-btn">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
</div>
    
@endsection