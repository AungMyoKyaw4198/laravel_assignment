@extends('layout')

@section('title')
    CreatePage
@endsection
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

	<form method="POST" action="/receipe">
		{{ csrf_field() }}
		<div class="form-group">
	    <label>Name</label>
	    <input type="text" name="name" class="form-control" id="Foodname" value="{{ old('name') }}" required>

	    <div class="form-group">
	    <label>Ingredients</label>
	    <input type="text" name="ingredients" class="form-control" id="Foodname" required value="{{ old('ingredients') }}">

	    <div class="form-group">
	    <label>Category</label>
	    <input type="text" name="category" class="form-control" id="Foodname" required value="{{ old('category') }}">
	    </div>

	    <button type="submit" class="btn btn-primary">Add</button>
	</form>
</div>
    
@endsection



