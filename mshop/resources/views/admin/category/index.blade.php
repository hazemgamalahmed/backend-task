@extends('layouts.app')

@section('title', 'All Categories')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">admin</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        	<div class="card card-body">
        		<div class="row">
        			<div class="col">
        				<form>
        			<input type="nubmer" name="limit" required="" value="{{isset($request->limit) ? 'limit' : ''}}">
        			<button style="submit" class="btn btn-info"> submit</button>
        		</form>
        			</div>

        			<div class="col">
        				<a href="{{route('admin.categories.create')}}" class="btn btn-success text-right">create</a>
        			<form action="" method="get">
        			<input type="text" name="search" class="form-control">
        			<button type="submit" class="btn btn-info"> search</button>
        			<a href="{{route('admin.categories.index')}}" class="btn btn-primary">Reset</a>
        		</form>
        		</div>
        		</div>
        		
        		
        		<table class="table table-bordered">
          	<thead>
          		<tr>
          			<th>#</th>
          			<th>Name</th>
          			<th>Parent</th>
          			<th>level</th>
          			<th>Actions</th>
          		</tr>
          	</thead>
          	<tbody>
          		@foreach($categories as $category)
          		<tr>
          			<td>{{$category->id}}</td>
          			<td>{{$category->name}}</td>
          			<td>
          				@if($category->parent)
          				<a href="{{route('admin.categories.show', $category->parent->id)}}"
          					class="link link-item" 
          					>
          					
          					{{$category->parent->name}}
          				</a>
          				@endif
          			</td>
          			<td>{{$category->level}}</td>
          			<td>
          				<a href="{{route('admin.categories.show', $category->id)}}" class="btn btn-info">
          					show category
          				</a>
          				<a href="{{route('admin.categories.edit', $category->id)}}" class="btn btn-primary"> Edit Category</a>
          			<form style="display:inline" method="POST" action="{{route('admin.categories.destroy', $category->id)}}">
          				@csrf
          				@method('DELETE')
          				<button type="submit" class="btn btn-danger">Delete</button>
          				</form>
          			</td>
          		</tr>
          		@endforeach
          	</tbody>
          </table>
          {!! $categories->links() !!}
        	</div>
                    <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection