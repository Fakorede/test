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
                <h1>Add Employer</h1>
            <form action="{{ route('employer.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Employer Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                        @if ($errors->has('name'))
                            <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="address">Employer Address</label>
                        <input type="text" class="form-control" name="address" value="{{ old('address') }}">

                        @if ($errors->has('address'))
                            <div class="error" style="color:red;">{{ $errors->first('address') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="address">Employer Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <div class="error" style="color:red;">{{ $errors->first('email') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Add Employer Details</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection