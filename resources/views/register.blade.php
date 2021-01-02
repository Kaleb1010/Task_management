<!DOCTYPE html>
<html dir="ltr" lang="en">

@include('head')
<body>

<div class="container">
    <div class="row">
        <form  action="{{route('create')}}" method="post">
            @csrf

            <div class="results">
                @if(\Illuminate\Support\Facades\Session::get('success'))
                <div class="alert alert-success">
                    {{\Illuminate\Support\Facades\Session::get('success')}}
                </div>
                    @endif


                    @if(\Illuminate\Support\Facades\Session::get('fails'))
                        <div class="alert alert-danger">
                            {{\Illuminate\Support\Facades\Session::get('fails')}}
                        </div>
                    @endif
            </div>

            <div class="form-group">
                <label for="name">Name:  </label>
                    <input type="text" class="form-group"  name="name" placeholder="Username">
                    <span class="text-danger">@error('name') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="email">Email:   </label>
                    <input class="form-group"  type="text" name="email" placeholder="email">
                <span class="text-danger">@error('email') {{$message}} @enderror</span>
            </div>
         <div class="form-group">
                <label for="email">Department:   </label>
                    <input class="form-group"  type="text" name="dep" placeholder="department">
                <span class="text-danger">@error('dep') {{$message}} @enderror</span>
            </div>

            <div class="form-group-3" >
                <label for="password">Password: </label>
                    <input class="form-group" type="password" name="password" placeholder="Password">
                <span class="text-danger">@error('password') {{$message}} @enderror</span>


            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">
                    Register
                </button>
            </div>
        </form>
    </div>
</div>

@include('Script/script')
</body>
</html>
