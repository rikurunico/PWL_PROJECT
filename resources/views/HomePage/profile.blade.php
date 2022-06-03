@extends('HomePage.layout')
@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-1">
        <div class="col-sm-6"></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Profile</a></li>
          </ol>
        </div>
      </div>
    </div>
    <div class="container rounded bg-white mt-3 mb-3">
    <div class="row">
        <div class="col-md-5 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{ auth()->user()->foto }}"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span></div>
            <input type="file" class="form-control"required="required" name="featured_image"></br>	
        </div>

        <div class="col-md-7 border-right" style="text-transform: capitalize">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                  <div class="col-md-12"><label class="labels">username</label><input type="text" class="form-control" placeholder=" username" value="{{ auth()->user()->name }}" disabled></div>
                </div>
                <div class="row mt-2">
                  <div class="col-md-12"><label class="labels">nomor telepon</label><input type="text" class="form-control" placeholder="enter nomor telepon" value="{{ auth()->user()->notelp }}" disabled></div>
                </div>
                <div class="row mt-2">
                  <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value="{{ auth()->user()->email }}" disabled></div>
                </div>
                <div class="row mt-2">
                  <div class="col-md-12"><label class="labels">alamat</label><input type="text" class="form-control" placeholder="enter alamat" value="{{ auth()->user()->alamat }}" disabled></div>
                </div>
                <br>
                
                <!-- Large modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Edit Data</button>

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content"> 
                      <div class="col-md-12" style="text-align: left"> 
                        <div class="p-3 py-5">
                                <h4 class="text-center">Edit Profile</h4>
                            </div>
                            <div class="row mt-2">
                              <div class="col-md-12"><label class="labels">username</label><input type="text" class="form-control" placeholder=" username" value="{{ auth()->user()->name }}"></div>
                            </div>
                            <div class="row mt-2">
                              <div class="col-md-12"><label class="labels">nomor telepon</label><input type="text" class="form-control" placeholder="enter nomor telepon" value="{{ auth()->user()->notelp }}"></div>
                            </div>
                            <div class="row mt-2">
                              <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value="{{ auth()->user()->email }}"></div>
                            </div>
                            <div class="row mt-2">
                              <div class="col-md-12"><label class="labels">alamat</label><input type="text" class="form-control" placeholder="enter alamat" value="{{ auth()->user()->alamat }}"></div>
                            </div>
                            <div class="mt-4 mb-3 text-center"><button class="btn btn-info profile-button" type="button">Save Profile</button></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>       
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
@endsection