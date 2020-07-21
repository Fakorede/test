@extends('layouts.app')

@section('content')
<div class="container">

    @if (Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif


    <div class="row">
        <div class="col-md-12">
            <h1>Add Next of Kin</h1>
            <form action="{{ route('kin.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Surame</label>
                        <input type="text" class="form-control" name="surname" value="{{ old('surname') }}">

                        @if ($errors->has('surname'))
                            <div class="error" style="color:red;">{{ $errors->first('surname') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="firstname">FirstName</label>
                        <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">

                        @if ($errors->has('firstname'))
                            <div class="error" style="color:red;">{{ $errors->first('firstname') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" value="{{ old('address') }}">

                        @if ($errors->has('address'))
                            <div class="error" style="color:red;">{{ $errors->first('address') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">

                        @if ($errors->has('phone'))
                            <div class="error" style="color:red;">{{ $errors->first('phone') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="address">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <div class="error" style="color:red;">{{ $errors->first('email') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Add Details</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection