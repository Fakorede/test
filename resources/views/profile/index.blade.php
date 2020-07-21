@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">User Information</div>
                    <div class="card-body">
                        <h3>User Information</h3>
                        <p><strong>Surname: </strong>{{ Auth::user()->surname }}</p>
                        <p><strong>Firstname: </strong>{{ Auth::user()->firstname }}</p>
                        <p><strong>Address: </strong>{{ Auth::user()->address }}</p>
                        <p><strong>Phone Number: </strong>{{ Auth::user()->phone }}</p>
                        <p><strong>Date of Birth: </strong>{{ Auth::user()->dob }}</p>
                        <p><strong>Email: </strong>{{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Next Of kin Information</div>
                    <div class="card-body">
                            <p><strong>Surname: </strong>{{ Auth::user()->kin->surname }}</p>
                            <p><strong>FirstName: </strong>{{ Auth::user()->kin->firstname }}</p>
                            <p><strong>Address: </strong>{{ Auth::user()->kin->address }}</p>
                            <p><strong>Phone Number: </strong>{{ Auth::user()->kin->phone }}</p>
                            <p><strong>Email: </strong>{{ Auth::user()->kin->email }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Employer Information</div>
                    <div class="card-body">
                        <p><strong>Name: </strong>{{ Auth::user()->employer->name }}</p>
                        <p><strong>Email: </strong>{{ Auth::user()->employer->email }}</p>
                        <p><strong>Address: </strong>{{ Auth::user()->employer->address }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection