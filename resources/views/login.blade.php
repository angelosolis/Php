@include('templates.header')


    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
<form action="{{ route('login') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="text-danger">{{$errors->first('email')}}</small>
    </div>
    
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
        <small id="emailHelp" class="text-danger">{{$errors->first('password')}}</small>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
