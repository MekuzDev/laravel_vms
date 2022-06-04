@extends('layouts.main')
@section('name',"Vehicle Statues")
@section("title",'Vehicle Statuses')
    

@section('content')
<div class="col-xl-12">
    <div class="card">
        <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-0">Vehicle Statues Table</h4>
              
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
       
            <a class="btn ripple btn-success my-3" data-bs-target="#addvuserModal" data-bs-toggle="modal" href="#">Add Vehicle Status</a>
            {{-- Add vstatus Form --}}
                <div class="modal fade" id="addvuserModal" style="display:none;" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title">Add Vehicle Status</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                            </div>
                                <form action="{{route('vstatus-create')}}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1"><i class="fe fe-user"></i></span>
                                                <input type="text" aria-describedby="basic-addon1" name='status'
                                                aria-label="vuser"  class="form-control" placeholder="Enter Vehicle Status" >
                                               
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
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                       @if (count($vstatuses))  
                        @foreach ($vstatuses as $index => $vstatus) 
                        <tr>
                            <th scope="row">{{$index + $vstatuses->firstItem()}}</th>
                            <td>{{ucwords($vstatus->status)}}</td>
                            <td><button type="submit" class="btn btn-info" data-bs-target="#editvuserModal{{$vstatus->id}}" data-bs-toggle="modal" href="#">Edit</button></td>
                            <td><a  href="{{route('vstatus-delete',$vstatus->id)}}" class="btn ripple btn-danger delete-btn">Delete</a></td>
                        </tr>

                        {{-- Edit vusers Form --}}
                <div class="modal fade" id="editvuserModal{{$vstatus->id}}" style="display:none;" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title">Edit Vehicle Status</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                            </div>
                                <form action="{{route('vstatus-edit',$vstatus->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1"><i class="fe fe-user"></i></span>
                                                <input type="text" aria-describedby="basic-addon1" name='status_update'
                                                aria-label="vuser"  class="form-control" placeholder="Enter vehicle Status" value ="{{ucwords($vstatus->status)}}" >
                                               
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
                {{$vstatuses->links()}}
            </div>
        </div>
    </div>

    
</div>
    
@endsection