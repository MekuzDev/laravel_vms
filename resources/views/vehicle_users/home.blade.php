@extends('layouts.main')
@section('name',"Vehicle Users")
@section('title',"Vehicle Users")
@section('content')

<div class="col-xl-12">
    <div class="card">
        <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-0">Vehicle Users Table</h4>
              
            </div>
            <div>
                @error('fullname_update')
                <small class="text-danger">{{ucwords($message)}}</small>
                @enderror
            </div>
            <div>
                @error('location_update')
                <small class="text-danger">{{ucwords($message)}}</small>
                @enderror
            </div>
            <div>
                @error('fullname')
                <small class="text-danger">{{ucwords($message)}}</small>
                @enderror
            </div>
            <div>
                @error('location')
                <small class="text-danger">{{ucwords($message)}}</small>
                @enderror
            </div>
            <a class="btn ripple btn-success my-3" data-bs-target="#addvuserModal" data-bs-toggle="modal" href="#">Add Vehicle User</a>
            {{-- Add vusers Form --}}
                <div class="modal fade" id="addvuserModal" style="display:none;" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title">Add Vehicle User</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                            </div>
                                <form action="{{route('vuser-create')}}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1"><i class="fe fe-user"></i></span>
                                                <input type="text" aria-describedby="basic-addon1" name='fullname'
                                                aria-label="vuser"  class="form-control" placeholder="Enter Fullname" value ="@error('fullname'){{old("fullname")}}@enderror" >
                                               
                                            </div>
                                         
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1"><i class="fe fe-map-pin"></i></span>
                                                <select  name="location" class="form-control @error('fullname') is-invalid @enderror" id="">
                                                    @if (count($locations))
                                                        @foreach ($locations as $id=> $location)
                                                           <option value="{{$id}}">{{$location}}</option> 
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            
                                        </div>


                                      
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <button class="btn ripple btn-primary" type="submit">Save</button>
                                        <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                    </div>
                                </form>

                        </div>
                    </div>
                </div>
            {{-- End of Add vuser Form --}}
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
                            <th>Fullname</th>
                            <th>Location</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($vusers))  
                        @foreach ($vusers as $index => $vuser) 
                        <tr>
                            <th scope="row">{{$index + $vusers->firstItem()}}</th>
                            <td>{{$vuser->fullname}}</td>
                            <td>{{$vuser->location->location_name}}</td>
                            <td><button type="submit" class="btn btn-info" data-bs-target="#editvuserModal{{$vuser->id}}" data-bs-toggle="modal" href="#">Edit</button></td>
                            <td><a  href="{{route('vuser-delete',$vuser->id)}}" class="btn ripple btn-danger delete-btn">Delete</a></td>
                        </tr>

                        {{-- Edit vusers Form --}}
                <div class="modal fade" id="editvuserModal{{$vuser->id}}" style="display:none;" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title">Edit Vehicle User</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                            </div>
                                <form action="{{route('vuser-edit',$vuser->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1"><i class="fe fe-user"></i></span>
                                                <input type="text" aria-describedby="basic-addon1" name='fullname_update'
                                                aria-label="vuser"  class="form-control" placeholder="Enter Fullname" value ="{{$vuser->fullname}}" >
                                               
                                            </div>
                                           
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1"><i class="fe fe-map-pin"></i></span>
                                                <select  name="location_update" class="form-control" id="">
                                                    @if (count($locations))
                                                        @foreach ($locations as $id=> $location)
                                                           <option value="{{$id}}" {{$id === $vuser->location_id ? 'selected': ''}} >{{$location}}</option> 
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                           
                                        </div>


                                      
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <button class="btn ripple btn-primary" type="submit">Save</button>
                                        <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                    </div>
                                </form>

                        </div>
                    </div>
                </div>
            {{-- End of Edit vuser Form --}}
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
                {{$vusers->links()}}
            </div>
        </div>
    </div>

    
</div>
    
@endsection