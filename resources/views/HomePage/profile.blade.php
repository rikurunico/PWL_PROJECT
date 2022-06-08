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
      @if ($errors->any())
            <div class="alert alert-danger">
              <strong>Whoops!</strong> Inputan Kamu Ada Yang Salah<br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
          </div>
      @endif
      @if (session()->has('success'))
          <div class="alert alert-success">
            @if(is_array(session('success')))
                <ul>
                    @foreach (session('success') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @else
                {{ session('success') }}
            @endif
          </div>
        @endif
    <div class="row">
        <div class="col-md-5 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
              <img class="rounded-circle mt-5" width="150px" src="{{ asset('storage/'.auth()->user()->foto) }}" alt="">
              <span class="font-weight-bold">{{ auth()->user()->name }}</span><span class="text-black-50">{{ auth()->user()->email }}</span>
            </div>	
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
                            <form action="{{ route('updateDataUser') }}" method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="d-flex flex-column align-items-center" style="text-transform: none">
                                <img class="rounded-circle mt-5" width="150px" src="{{ asset('storage/'.auth()->user()->foto) }}">
                              </div>	
                              <div class="row mt-2">
                                <div class="col-md-12">
                                <label for="formFile" class="form-label">upload photo profile</label>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="inputGroupFile02" name="foto" accept="image/*">
                                  <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                </div>
                                </div>
                              </div>
                              <div class="row mt-2">
                                <div class="col-md-12"><label class="labels">Username</label><input type="text" class="form-control" name="name" placeholder=" username" value="{{ auth()->user()->name }}"></div>
                              </div>
                              <div class="row mt-2">
                                <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" name="email" placeholder=" Email" value="{{ auth()->user()->email }}"></div>
                              </div>
                              <div class="row mt-2">
                                <div class="col-md-12"><label class="labels">Nomor Telepon</label><input type="text" class="form-control" name="notelp" placeholder=" Nomor Telepon" value="{{ auth()->user()->notelp }}"></div>
                              </div>
                              <div class="row mt-2">
                                <div class="col-md-12"><label class="labels">Alamat</label><input type="text" class="form-control" name="alamat" placeholder=" Alamat" value="{{ auth()->user()->alamat }}"></div>
                              </div>
                              <div class="mt-4 mb-3 text-center">
                                <button class="btn btn-info profile-button" type="submit">Save Profile</button>
                              </div>
                            </form>
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