@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
<h1>Person SHOW card-header</h1>
                </div>

                <div class="card-body">
                    
                {{ $disca->apellido }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection