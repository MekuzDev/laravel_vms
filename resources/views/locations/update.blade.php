<div class="modal fade @error('location_name') show @enderror " id="modaldemo{{$location->id}}" style="display:@error('location_name') block @else none @enderror;" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Update Location</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
            </div>
                <form action="{{route('location-create')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fe fe-map-pin"></i></span>
                            <input aria-describedby="basic-addon1" name='location_name' 
                           
                            
                            aria-label="Location" value ="{{$location->location_name}}" class="form-control" placeholder="Enter location" type="text">
                          
                        </div>
                        @error('location_name')
                        <small class="text-danger">{{ucwords($message)}}</small>
                        @enderror
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button class="btn ripple btn-primary" type="submit">Save</button>
                        <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                    </div>
                </form>

        </div>
    </div>
</div>