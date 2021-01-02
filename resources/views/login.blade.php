<!DOCTYPE html>
<html dir="ltr" lang="en">

@include('head')
<body>

    <div class="container">
        <div class="row">
            <form  action="{{route('check')}}" method="post">
                @csrf

                <div class="results">
                @if(\Illuminate\Support\Facades\Session::get('fails'))
                    <div class="alert alert-danger">
                        {{\Illuminate\Support\Facades\Session::get('fails')}}
                    </div>
                @endif
                </div>
                <div >
                    <label>
                        <input class="form-group"  type="text" name="email" placeholder="Username">
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </label>
                </div>
                <div class="mt-3" >
                    <label>
                        <input class="form-group" type="password" name="password" placeholder="Password">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>

                    </label>
                </div>
                <div class="form-group">
                    <button type="submit">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>

@include('Script/script')
</body>
</html>
