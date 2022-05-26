@error('email')
      <div class="alert alert-danger">{{ $message }}</div>
@enderror
      @csrf
    </div>
      <div class="form-group">
      <label>Username</label>
      <input type="text" name="username" value="{{ old('name') }}" class="@error('name') is-invalid @enderror form-control" />
      @error('username')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password"  class="@error('password') is-invalid @enderror form-control" />
      @error('password')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label>Confirm Password</label>
      <input type="password" name="password_confirmation"  class="@error('password_confirmation') is-invalid @enderror form-control" />
      @error('password_confirmation')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror