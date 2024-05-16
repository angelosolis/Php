@include('templates.header')

    

    <div class="container">
   
<form action="{{ route('register') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" class="form-control {{$errors->has('email') ? 'is-invalid' : '' }}" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{old('email')}}">
        <small id="emailHelp" class="text-danger">{{$errors->first('email')}}</small>
    </div>
    <div class="form-group">
        <label for="exampleInputUsername">Username</label>
        <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : '' }}" id="exampleInputUsername" name="name" aria-describedby="usernameHelp" placeholder="Enter username" value="{{old('name')}}">
        <small id="usernameHelp" class="text-danger">{{$errors->first('name')}}</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control {{$errors->has('password') ? 'is-invalid' : '' }}" id="exampleInputPassword1" name="password" placeholder="Password" >
        <small id="passwordHelp" class="text-danger">{{$errors->first('password')}}</small>
    </div>
    <div class="form-group">
    <label for="exampleInputPassword2">Confirm Password</label>
	<input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
    
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
