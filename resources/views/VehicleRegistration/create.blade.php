@extends('layouts.main')
@section('name','Register Vehicle')
@section('title','Register Vehicle')

@section('content')

<div class="card">
    <div class="card-body">
        <div class="main-content-label mg-b-5">
            Register New Vehicle
        </div>
        <small class="text-xs text-danger d-block">NB: Please ensure that information entered correct.</small>
        {{-- <small class="text-xs text-warning d-block">NB: On successful registeration an account number will be auto-generated for funding a registered vehicle.</small> --}}
        <div class="pd-30 pd-sm-20">
            <form action="{{route('vreg-create')}}" method="post">
                @csrf
                <div class="row row-xs my-3">
                    <div class="col-md-6 ">
                        <select class="form-control @error('vehicle_user') is-invalid @enderror" name='vehicle_user' type="text">
                            <option value="">Select Vehicle User</option>
                            @if ($vusers->count())
                            @foreach ($vusers as $index => $vuser)
                              <option {{$vuser->id == old('vehicle_user')?'selected' : ''}} value="{{$vuser->id}}">{{$vuser->fullname}} -({{$vuser->location->location_name}})</option>  
                            @endforeach   
                            @endif
                        </select>
                        @error('vehicle_user') 
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mg-t-10 mg-md-t-0">
                        <select class="form-control  @error('vehicle_model') is-invalid @enderror" name='vehicle_model'>
                            <option value="">Select Vehicle Model</option>
                            @if($models->count())
                            @foreach ($models as $index => $model )
                            <option {{old('vehicle_model')==$model->id? 'selected': ''}} value="{{$model->id}}">{{$model->model_name}}({{$model->model_year}})</option>   
                            @endforeach
                            @endif
                        </select>
                        @error('vehicle_model') 
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="row row-xs my-3">
                    <div class="col-md-6">
                        <input class="form-control  @error('vehicle_regno') is-invalid @enderror" value="{{old('vehicle_regno')}}" placeholder="Enter Vehicle Plate no." name="vehicle_regno" type="text">
                        @error('vehicle_regno') 
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mg-t-10 mg-md-t-0">
                        <select class="form-control" name="vehicle_status">
                            @if ($statuses->count())
                            @foreach ($statuses as $index =>$status)
                            <option {{old('vehicle_status') == $index ?'selected':''}} value="{{$index}}">{{$status}}</option>    
                            @endforeach
                            @endif
                        </select>
                        @error('vehicle_status') 
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="row row-xs my-3">
                    <div class="col-md-6">
                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                            </div>
                            <input class="form-control fc-datepicker hasDatepicker  @error('purchase_date') is-invalid @enderror" placeholder="Select Purchase Date" max="{{ now()->format ('d-m-Y') }}" name="purchase_date" value="{{old('purchase_date')}}" type="text" id="datepicker-date">
                           
                        </div>
                        @error('purchase_date') 
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <input class="form-control  @error('purchase_value') is-invalid @enderror"  value="{{old('purchase_value')}}" placeholder="Enter Vehicle Purchase Value" name="purchase_value" type="text">
                        @error('purchase_value') 
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    
                </div>
                <div class="row row-xs my-3">
                <div class="col-md mg-t-10 mg-md-t-0">
                        <button class="btn btn-primary" type="submit">Register Vehicle</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection

