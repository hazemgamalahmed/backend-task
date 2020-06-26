@if($errors->first('user_id'))
<span class="text-danger">
{{$errors->first('user_id')}}
</span>
@endif
                <label>product category</label>
                <select name="category_id" class="form-control">
                  @foreach($categories as $rowCategory)
                  @if(isset($product) && $rowCategory->id == $product->category->id)
                  <option value="{{$rowCategory->id}}" selected="">
                    {{$rowCategory->name}}
                  </option>
                  @else
                  <option value="{{$rowCategory->id}}">
                    {{$rowCategory->name}}
                  </option>

                  @endif
                  @endforeach

                </select>
                @if($errors->first('category_id'))
                <span class="text-danger">
                  {{$errors->first('category_id')}}
                </span>
                @endif
                <label>product name</label>
                <input type="text" name="name" class="form-control" placeholder="product name" value="{{isset($product) ? $product->name : ''}}">
                @if($errors->first('name'))
                <span class="text-danger">
                {{$errors->first('name')}}
                </span>
                @endif
                <label for="price">price</label>
                <input type="number" name="price" class="form-control" placeholder="price" value="{{isset($product) ? $product->price : ''}}">
                @if($errors->first('price'))
                <span class="text-danger">
                  {{$errors->first('price')}}
                </span>
                @endif
                <label>description</label>
                <textarea name="description" class="form-control" cols="30" rows="10">{{isset($product) ? $product->description : ''}}</textarea>
                    <div class="text-center">
                    <button class="btn btn-success">{{isset($product) ? 'Edit product' :  'Add Product'}}</button>
                    </div>

                    @if($errors->first('price'))
                <span class="text-danger">
                  {{$errors->first('price')}}
                </span>
                @endif