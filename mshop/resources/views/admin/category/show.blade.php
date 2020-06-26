@extends('layouts.app')

@section('title', 'welcome')

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
              <li class="breadcrumb-item active"><a href="{{route('admin.categories.index')}}">categories</a></li>
              <li class="breadcrumb-item active">product name : {{$category->name}}</li>
              
              	@if($category->parent)
              	<li class="breadcrumb-item active">
              	category name : {{$category->parent->name}}
              	 </li>
              	@endif
             
              
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
        		<h1>Title :  {{$category->name}}</h1>
        		<p>Description :  {{$category->description}}</p>

        		@if($category->parent)
        		<a href="{{route('admin.categories.show', $category->parent->id)}}">
        			Category Name {{$category->parent->name}}
        		</a>
        		@endif
        	</div>
                    <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection