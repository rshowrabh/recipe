<div class="form-group {{ $errors->has('recipe_sub_category_id') ? 'has-error' : ''}}">
    <label for="recipe_sub_category_id" class="control-label">{{ 'Recipe Sub Category Id' }}</label>
    <select class="form-control" name="recipe_sub_category_id" id="recipe_sub_category_id">
        @foreach($mealRecipeSubCategories as $mealRecipeSubCategory)
            <option value="{{$mealRecipeSubCategory->id}}"
                    @if(isset($mealrecipesubsubcategory->recipe_sub_category_id) && $mealrecipesubsubcategory->recipe_sub_category_id == $mealRecipeSubCategory->id) selected @endif>{{$mealRecipeSubCategory->sub_category_name}}</option>
        @endforeach
    </select>
    {!! $errors->first('recipe_sub_category_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sub_sub_category_name') ? 'has-error' : ''}}">
    <label for="sub_sub_category_name" class="control-label">{{ 'Sub Sub Category Name' }}</label>
    <input class="form-control" name="sub_sub_category_name" type="text" id="sub_sub_category_name"
           value="{{ isset($mealrecipesubsubcategory->sub_sub_category_name) ? $mealrecipesubsubcategory->sub_sub_category_name : ''}}"
           required>
    {!! $errors->first('sub_sub_category_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description"
              required>{{ isset($mealrecipesubsubcategory->description) ? $mealrecipesubsubcategory->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
@can('isAdmin')
<div class="form-group {{ $errors->has('approved') ? 'has-error' : ''}}">
    <label for="approved" class="control-label">{{ 'Approved' }}</label>
    <input class="form-control" name="approved" type="number" id="approved"
           value="{{ isset($mealrecipesubsubcategory->approved) ? $mealrecipesubsubcategory->approved : ''}}" required>
    {!! $errors->first('approved', '<p class="help-block">:message</p>') !!}
</div>
@endcan


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
