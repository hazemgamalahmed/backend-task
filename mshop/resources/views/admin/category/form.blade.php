<div class="form-group">
        @if($errors->first('user_id'))
                        
                        <span class="text-danger">
                        {{$errors->first('user_id')}}
                        </span>
                        <br>
                        @endif
        				<label for="parent_id">what is the parent of your category</label>
       			<select class="form-control" name = "parent_id">
        					<option>not set</option>
        					@foreach($categories as $rowCategory)
        					@if(isset($category) && $rowCategory->id == $category->id))
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
        					@if($errors->first('parent_id'))
        				
        				<span class="text-danger">
        				{{$errors->first('parent_id')}}
        				</span>
        				<br>
        				@endif
        				<label for="name">Product Name</label>

        				<input id="name" type="text" name="name" class="form-control" placeholder="product name" value="{{isset($category) ? $category->name : ''}}">
        				@if($errors->first('name'))
        				
        				<span class="text-danger">
        				{{$errors->first('name')}}
        				</span>
        				<br>
        				@endif
        				<label for="description">Product Description</label>
        				<textarea id="description" name="description"
        				cols="30"
        				rows="10" 
        				 class="form-control">{{isset($category) ? $category->description : ''}}                            
                                         </textarea>
        				 @if($errors->first('description'))
        				<br>
        				<span class="text-danger">
        				{{$errors->first('description')}}
        				</span>
        				@endif