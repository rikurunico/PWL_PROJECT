@extends('AdminView.layout')
@section('content')
    <div class="container mt-4">
        <div class="container" style="text-transform: capitalize">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h3>Form Edit Data user</h3>
                <form method="post" enctype="multipart/form-data" action="{{ route('UpdateUser', [$user->id]) }}" id="myForm" >
                @csrf
                <div class="form-group">
                    <div class="d-flex flex-column align-items-center" style="text-transform: none">
                        <img id="preview-image-before-upload" class="rounded-circle mt-5" width="150px" src="/storage/{{ $user->foto }}"">
                    </div>
                    <label for="foto">Foto Profil</label>
                    <input type="file" id="image" class="form-control @error('foto') is-invalid @enderror" name="foto" value="/storage/{{ $user->foto }}">
                    @error('foto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                <label for="name">Username</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old( 'name', $user->name) }}" required autofocus>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old( 'email', $user->email)}}" required >
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="notelp">Nomor Telepon</label>
                    <input type="text" name="notelp" class="form-control @error('notelp') is-invalid @enderror" value="{{ old( 'notelp', $user->notelp)}}" required >
                    @error('notelp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old( 'alamat', $user->alamat) }}" >
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="level">level</label>
                    <select class="custom-select mr-sm-2  @error('level') is-invalid @enderror" id="level" name="level">
                        <option value="admin" {{ $user->level == 'admin'? 'selected' : '' }}>Admin</option>
                        <option value="user" {{ $user->level == 'user'? 'selected' : '' }}>user</option>
                    </select>
                </div>
                <div class="form-group float-right">
                    <button class="btn btn-lg btn-primary" type="submit">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
        
    $(document).ready(function (e) {
    
    $('#image').change(function(){
                
        let reader = new FileReader();
    
        reader.onload = (e) => { 
    
        $('#preview-image-before-upload').attr('src', e.target.result); 
        }
    
        reader.readAsDataURL(this.files[0]); 
    
    });
    
    });
    
</script>

@endsection
