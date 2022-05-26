@extends('layouts.main')
@section('name',"Locations")
@section('title',"Locations")
@section('content')

<div class="col-xl-12">
    <div class="card">
        <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-0">Locations Table</h4>
                
            </div>
            <div>
                @error('location_name_update')
                <small class="text-danger">{{ucwords($message)}}</small>
                @enderror
            </div>
            <div>
                @error('location_name')
                <small class="text-danger">{{ucwords($message)}}</small>
                @enderror
            </div>

          
            <a class="btn ripple btn-success my-3" data-bs-target="#addLocationModal" data-bs-toggle="modal" href="#">Add Location</a>
            {{-- Add locations Form --}}
               @include('locations.create')
            {{-- End of Add Location Form --}}
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
                <table class="table table-bordered table-hover mb-0 text-md-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Location Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($locations))  
                        @foreach ($locations as $index => $location) 
                        <tr>
                            <th scope="row">{{$index + $locations->firstItem()}}</th>
                            <td>{{$location->location_name}}</td>
                            <td><button type="submit" class="btn btn-info" data-bs-target="#editLocationModal{{$location->id}}" data-bs-toggle="modal" href="#">Edit</button></td>
                            <td><a  href="{{route('location-delete',$location->id)}}" class="btn ripple btn-danger delete-btn">Delete</a></td>
                        </tr>

                        
            {{-- Edit locations Form --}}
               @include('locations.update')
            {{-- End of Edit Location Form --}}
                        @endforeach
                        <form action="" method="post" id="delete-form">
                            @csrf
                            @method('Delete')
                        </form>
                        @endif
                        
                    </tbody>
                </table>
            </div>
            <div class="my-3">
                {{$locations->links()}}
            </div>
        </div>
    </div>

    
</div>

@endsection


   