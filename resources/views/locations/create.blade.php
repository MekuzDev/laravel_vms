<div class="modal fade" id="addLocationModal" style="display:none;" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Add Location</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
            </div>
                <form action="{{route('location-create')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="fe fe-map-pin"></i></span>
                                <input aria-describedby="basic-addon1" name='location_name' aria-label="Location" value ="" class="form-control" placeholder="Enter location" type="text">
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