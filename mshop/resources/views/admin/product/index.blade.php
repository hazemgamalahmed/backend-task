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
        				<a href="{{route('admin.products.create')}}" class="btn btn-success text-right">create</a>
        			<form action="" method="get">
        			<input type="text" name="search" class="form-control">
        			<button type="submit" class="btn btn-info"> search</button>
        			<a href="{{route('admin.products.index')}}" class="btn btn-primary">Reset</a>
        		</form>
        		</div>
        		</div>


            <table class="table table-bordered">
              <thead>
                <tr>
                  <td>id</td>
                  <td>name</td>
                  <td>price</td>
                  <td>category</td>
                  <td>added by</td>
                  <td>action</td>
                </tr>
              </thead>
              <tbody>
                @foreach($products as $product)
                <tr>
                  <td>{{$product->id}}</td>
                  <td>{{$product->name}}</td>
                  <td>{{$product->price}}</td>
                  <td>
                    <a href="{{route('admin.categories.show', $product->category->id)}}">{{$product->category->name}}</a>
                  </td>
                  <td>{{$product->user->name}}</td>
                  <td>
                    <a href="{{route('admin.products.show', $product)}}" class="btn btn-info">show product</a>
                    <a href="{{route('admin.products.edit', $product)}}" class="btn btn-primary">edit product</a>

                    <form style="display:inline-block;" method="POST" action="{{route('admin.products.destroy', $product->id)}}">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {!! $products->links() !!}
        	</div>
                    <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection