@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
					<h2>Ingredients Home Page</h2>
					<a href="/receipe/create"><button class="btn btn-success">Create</button></a>
						<br>
					    @foreach($data as $value)
					    <a href="/receipe/{{ $value->id }}"><li>{{ $value -> name }}</li></a>
					    <br>
					    @endforeach
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
