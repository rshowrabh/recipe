<div class="form-group {{ $errors->has('recipe_category_id') ? 'has-error' : ''}}">
    <label for="recipe_category_id" class="control-label">{{ 'Recipe Category' }}</label>
    <select class="form-control" name="recipe_category_id" id="recipe_category_id">
        @foreach($mealRecipeCategories as $mealRecipeCategory)
            <option value="{{$mealRecipeCategory->id}}" @if(isset($mealrecipesubcategory->recipe_category_id)&&$mealrecipesubcategory->recipe_category_id==$mealRecipeCategory->id) selected @endif>{{$mealRecipeCategory->name}}</option>
        @endforeach
    </select>
    {!! $errors->first('recipe_category_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sub_category_name') ? 'has-error' : ''}}">
    <label for="sub_category_name" class="control-label">{{ 'Sub Category Name' }}</label>
    <input class="form-control" name="sub_category_name" type="text" id="sub_category_name"
           value="{{ isset($mealrecipesubcategory->sub_category_name) ? $mealrecipesubcategory->sub_category_name : ''}}"
           required>
    {!! $errors->first('sub_category_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description"
              required>{{ isset($mealrecipesubcategory->description) ? $mealrecipesubcategory->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
@can('isAdmin')
<div class="form-group {{ $errors->has('approved') ? 'has-error' : ''}}">
    <label for="approved" class="control-label">{{ 'Approved' }}</label>
    <input class="form-control" name="approved" type="number" id="approved"
           value="{{ isset($mealrecipesubcategory->approved) ? $mealrecipesubcategory->approved : ''}}" required>
    {!! $errors->first('approved', '<p class="help-block">:message</p>') !!}
</div>
@endcan


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
