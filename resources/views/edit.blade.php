@extends('layout')

@section("content")

<div class="container">
	<h2>Add New Receipe</h2>
	
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif

	<form method="POST" action="/receipe/{{ $receipe->id }}">
		{{ method_field("PATCH") }}
		{{ csrf_field() }}
		
		<div class="form-group">
	    <label>Name</label>
	    <input type="text" name="name" class="form-control" id="Foodname" value="{{ $receipe -> name }}" required>
	    </div>

	    <div class="form-group">
	    <label>Ingredients</label>
	    <input type="text" name="ingredients" class="form-control" id="Foodname" value="{{ $receipe -> ingredients }}" required>
	    </div>

	    <div class="form-group">
	    <label>Category</label>
	    <input type="text" name="category" class="form-control" id="Foodname" value="{{ $receipe -> category }}" required>
	    </div>

	    <button type="submit" class="btn btn-primary">Add</button>
	</form>
</div>
@endsection