@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header btn btn-info">Stuff Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h1 style="color:#385d7a">
                       You are logged in as a <strong style="color: #1d643b">stuff</strong>
                   </h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
