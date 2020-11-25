<div class="row">
    <div class="col-md-6 {{ $errors->has('name') ? 'has-error' : ''}}">
        <label for="name" class="control-label">{{ 'Name' }}</label>
        <input class="form-control" name="name" type="text" id="name"
               value="{{ isset($mealrecipe->name) ? $mealrecipe->name : ''}}">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6 {{ $errors->has('also_known') ? 'has-error' : ''}}">
        <label for="also_known" class="control-label">{{ 'Also Known' }}</label>
        <input class="form-control" name="also_known" type="text" id="also_known"
               value="{{ isset($mealrecipe->also_known) ? $mealrecipe->also_known : ''}}">
        {!! $errors->first('also_known', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="row">
    
    <div class="col-md-2 {{ $errors->has('prep_time') ? 'has-error' : ''}}">
        <label for="prep_time" class="control-label">{{ 'Prep Time' }}</label>
        <input class="form-control" name="prep_time" type="number" id="prep_time"
               value="{{ isset($mealrecipe->prep_time) ? $mealrecipe->prep_time : ''}}">
        {!! $errors->first('prep_time', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-2 {{ $errors->has('cook_time') ? 'has-error' : ''}}">
        <label for="cook_time" class="control-label">{{ 'Cook Time' }}</label>
        <input class="form-control" name="cook_time" type="number" id="cook_time"
               value="{{ isset($mealrecipe->cook_time) ? $mealrecipe->cook_time : ''}}">
        {!! $errors->first('cook_time', '<p class="help-block">:message</p>') !!}
    </div>
    {{--  <div class="col-md-2 {{ $errors->has('cook_time_to') ? 'has-error' : ''}}">
        <label for="cook_time_to" class="control-label">{{ 'Cook Time To' }}</label>
        <input class="form-control" name="cook_time_to" type="number" id="cook_time_to"
               value="{{ isset($mealrecipe->cook_time_to) ? $mealrecipe->cook_time_to : ''}}">
        {!! $errors->first('cook_time_to', '<p class="help-block">:message</p>') !!}
    </div>  --}}
    
    <div class="col-md-2 {{ $errors->has('serving_size') ? 'has-error' : ''}}">
        <label for="serving_size" class="control-label">{{ 'Serving Size' }}</label>
        <input class="form-control" name="serving_size" type="number" id="serving_size"
               value="{{ isset($mealrecipe->serving_size) ? $mealrecipe->serving_size : ''}}">
        {!! $errors->first('serving_size', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-2 {{ $errors->has('recipe_unit') ? 'has-error' : ''}}">
        <label for="recipe_unit" class="control-label">{{ 'Recipe Unit' }}</label>
        <select class="form-control" name="recipe_unit" type="text" id="recipe_unit">
               @foreach($mealUnits as $mealUnit)
               <option value="{{$mealUnit->id}}"
                       @if(isset($mealrecipe->recipe_unit) && $mealrecipe->recipe_unit == $mealUnit->id) selected @endif>{{$mealUnit->name}}</option>
               @endforeach
        </select>
        {!! $errors->first('recipe_unit', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-2 {{ $errors->has('cooking_type') ? 'has-error' : ''}}">
        <label for="cooking_type" class="control-label">{{ 'Cooking Type' }}</label>
        <select class="form-control" name="cooking_type" type="text" id="cooking_type">
            @foreach($mealCookingType as $key => $value)
                <option value="{{ $value->id }}">{{ $value->name }}</option>
            @endforeach
        </select>       
        {!! $errors->first('cooking_type', '<p class="help-block">:message</p>') !!}
    </div>
</div> 

<div class="row">
    <div class="col-md-4 {{ $errors->has('category') ? 'has-error' : ''}}">
        <label for="category" class="control-label">{{ 'Category' }}</label>
        <select class="form-control" name="category" id="category">
            @foreach($mealRecipeCategories as $mealRecipeCategory)
                <option value="{{$mealRecipeCategory->id}}"
                        @if(isset($mealrecipe->category) && $mealrecipe->category == $mealRecipeCategory->id) selected @endif>{{$mealRecipeCategory->name}}</option>
            @endforeach
        </select>
        {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-4 {{ $errors->has('sub_category') ? 'has-error' : ''}}">
        <label for="sub_category" class="control-label">{{ 'Sub Category' }}</label>
        <select class="form-control" name="sub_category" id="sub_category">
            {{--  @foreach($mealRecipeSubCategories as $mealRecipeSubCategory)
                <option value="{{$mealRecipeSubCategory->id}}"
                        @if(isset($mealrecipe->sub_category) && $mealrecipe->sub_category == $mealRecipeSubCategory->id) selected @endif>{{$mealRecipeSubCategory->sub_category_name}}</option>
            @endforeach  --}}
        </select>
        {!! $errors->first('sub_category', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-4 {{ $errors->has('sub_sub_category') ? 'has-error' : ''}}">
        <label for="sub_sub_category" class="control-label">{{ 'Sub Sub Category' }}</label>
        <select class="form-control" name="sub_sub_category" id="sub_sub_category">
            {{--  @foreach($mealRecipeSubSubCategories as $mealRecipeSubSubCategory)
                <option value="{{$mealRecipeSubSubCategory->id}}"
                        @if(isset($mealrecipe->sub_sub_category) && $mealrecipe->sub_sub_category == $mealRecipeSubSubCategory->id) selected @endif>{{$mealRecipeSubSubCategory->sub_sub_category_name}}</option>
            @endforeach  --}}
        </select>
        {!! $errors->first('sub_sub_category', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!--  Dish Type --> 
<div class="row">
    <div class="col-md-4 {{ $errors->has('dish_type') ? 'has-error' : ''}}">
        <label for="dish_type" class="control-label">{{ 'Dish Type' }}</label>
        <select class="form-control" name="dish_type" id="dish_type">
            @foreach($mealDishTypes as $mealDishType)
                <option value="{{$mealDishType->id}}"
                        @if(isset($mealrecipe->dish_type) && $mealrecipe->dish_type == $mealDishType->id) selected @endif>{{$mealDishType->name}}</option>
            @endforeach
        </select>
        {!! $errors->first('dish_type', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="col-md-4 {{ $errors->has('cuisine_type') ? 'has-error' : ''}}">
        <label for="cuisine_type" class="control-label">{{ 'Cuisine Type' }}</label>
        <select class="form-control" name="cuisine_type" id="cuisine_type">
            @foreach($mealCuisines as $mealCuisine)
                <option value="{{$mealCuisine->id}}"
                        @if(isset($mealrecipe->cuisine_type) && $mealrecipe->cuisine_type == $mealCuisine->id) selected @endif>{{$mealCuisine->name}}</option>
            @endforeach
        </select>
        {!! $errors->first('cuisine_type', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-4 {{ $errors->has('region') ? 'has-error' : ''}}">
        <label for="region" class="control-label">{{ 'Region' }}</label>
        <select class="form-control" name="region" id="region">
            {{--  @foreach($mealRegions as $mealRegion)
                <option value="{{$mealRegion->id}}"
                        @if(isset($mealrecipe->region) && $mealrecipe->region == $mealRegion->id) selected @endif>{{$mealRegion->name}}</option>
            @endforeach  --}}
        </select>
        {!! $errors->first('region', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<!--  Dish Type -->


<div class="row">
    <div class="col-md-4 {{ $errors->has('festivals') ? 'has-error' : ''}}">
        <label for="festivals" class="control-label">{{ 'Festivals' }}</label>
        <select multiple class="form-control" name="festivals" id="festivals">
            @foreach($mealFestivals as $mealFestival)
                <option value="{{$mealFestival->id}}"
                        @if(isset($mealrecipe->festivals) && $mealrecipe->festivals == $mealFestival->id) selected @endif>{{$mealFestival->name}}</option>
            @endforeach
        </select>
        {!! $errors->first('festivals', '<p class="help-block">:message</p>') !!}
    </div>


    <div class="col-md-4 {{ $errors->has('tags') ? 'has-error' : ''}}">
        <label for="tags" class="control-label">{{ 'Tags' }}</label>
        <select multiple class="form-control" name="tags" id="tags">
            @foreach($mealTags as $mealTags)
                <option value="{{$mealTags->id}}"
                        @if(isset($mealrecipe->tags) && $mealrecipe->tags == $mealTags->id) selected @endif>{{$mealTags->name}}</option>
            @endforeach
        </select>
        {!! $errors->first('tags', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-4 {{ $errors->has('chef') ? 'has-error' : ''}}">
        <label for="chef" class="control-label">{{ 'Chef' }}</label>
        <select class="form-control" name="chef" id="tags">
            @foreach($MealChef as $MealChef)
                <option value="{{$MealChef->id}}"
                        @if(isset($MealChef->name) && $MealChef->id == $MealChef->id) selected @endif>{{$MealChef->name}}</option>
            @endforeach
        </select>
        {!! $errors->first('chef', '<p class="help-block">:message</p>') !!}
    </div>
    
</div>   



<div class="row">
    <div class="col-md-6 {{ $errors->has('serving_description') ? 'has-error' : ''}}">
        <label for="serving_description" class="control-label">{{ 'Serving Description' }}</label>
        <input class="form-control" name="serving_description" type="text" id="serving_description"
               value="{{ isset($mealrecipe->serving_description) ? $mealrecipe->serving_description : ''}}">
        {!! $errors->first('serving_description', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-3 {{ $errors->has('positive_point') ? 'has-error' : ''}}">
        <label for="positive_point" class="control-label">{{ 'Positive Point' }}</label>
        <input class="form-control" name="positive_point" type="text" id="positive_point"
               value="{{ isset($mealrecipe->positive_point) ? $mealrecipe->positive_point : ''}}">
        {!! $errors->first('positive_point', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-3 {{ $errors->has('created_by') ? 'has-error' : ''}}">
        <label for="created_by" class="control-label">{{ 'Created By' }}</label>
        <input class="form-control" name="created_by" type="text" id="created_by"
               value="{{ isset($mealrecipe->created_by) ? $mealrecipe->created_by : auth()->user()->name }}">
        {!! $errors->first('created_by', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="row">
    <div class="col-md-2 {{ $errors->has('breakfast') ? 'has-error' : ''}}">
        <label for="breakfast" class="control-label">{{ 'Breakfast' }}</label>
        <select class="form-control" name="breakfast" type="text" id="breakfast">
            <option value="1">Yes</option>
             <option selected value="0">No</option>
        </select>
        {!! $errors->first('breakfast', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-2 {{ $errors->has('main_dish') ? 'has-error' : ''}}">
        <label for="main_dish" class="control-label">{{ 'Main Dish' }}</label>
        <select class="form-control" name="main_dish" type="text" id="main_dish">
            <option value="1">Yes</option>
             <option selected value="0">No</option>
        </select>    
        {!! $errors->first('main_dish', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-2 {{ $errors->has('approved') ? 'has-error' : ''}}">
        <label for="approved" class="control-label">{{ 'Approved' }}</label>
        <select class="form-control" name="approved" type="number" id="approved">
            <option value="1">Yes</option>
             <option selected value="0">No</option>
        </select>    
        {!! $errors->first('approved', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-2 {{ $errors->has('recipe_origin') ? 'has-error' : ''}}">
        <label for="recipe_origin" class="control-label">{{ 'Recipe Origin' }}</label>
        <input class="form-control" name="recipe_origin" type="text" id="recipe_origin"
               value="{{ isset($mealrecipe->recipe_origin) ? $mealrecipe->recipe_origin : ''}}">
        {!! $errors->first('recipe_origin', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-2 {{ $errors->has('meal_complexity_id') ? 'has-error' : ''}}">
        <label for="meal_complexity_id" class="control-label">{{ 'Meal Complexity' }}</label>
        <select class="form-control" name="meal_complexity_id" type="number" id="meal_complexity_id">
            @foreach($mealComplexity as $item)
            <option value="{{$item->id}}"
                    @if(isset($item->name) && $item->id == $item->id) selected @endif>{{$item->name}}</option>
             @endforeach
        </select>   
        {!! $errors->first('meal_complexity_id', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-2 {{ $errors->has('type_seasonal_recipe') ? 'has-error' : ''}}">
        <label for="type_seasonal_recipe" class="control-label">{{ 'Seasonal' }}</label>
        <select class="form-control" name="type_seasonal_recipe" type="number" id="type_seasonal_recipe">
            @foreach($mealSeasons as $mealSeason)
            <option value="{{$mealSeason->id}}"
                    @if(isset($mealSeason->name) && $mealSeason->id == $mealSeason->id) selected @endif>{{$mealSeason->name}}</option>
             @endforeach
        </select>    
        {!! $errors->first('type_seasonal_recipe', '<p class="help-block">:message</p>') !!}
    </div>


</div>

<!-- Dish Description and Instructions -->

    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
        <label for="description" class="control-label">{{ 'Description' }}</label>
        <textarea class="form-control" rows="5" name="description" type="textarea"
                  id="description">{{ isset($mealrecipe->description) ? $mealrecipe->description : ''}}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('full_description') ? 'has-error' : ''}}">
        <label for="full_description" class="control-label">{{ 'Full Description' }}</label>
        <textarea class="form-control" rows="5" name="full_description" type="textarea"
                  id="full_description">{{ isset($mealrecipe->full_description) ? $mealrecipe->full_description : ''}}</textarea>
        {!! $errors->first('full_description', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('directions') ? 'has-error' : ''}}">
        <label for="directions" class="control-label">{{ 'Directions' }}</label>
        <textarea class="form-control" rows="5" name="directions" type="textarea"
                  id="directions">{{ isset($mealrecipe->directions) ? $mealrecipe->directions : ''}}</textarea>
        {!! $errors->first('directions', '<p class="help-block">:message</p>') !!}
    </div>
<!-- Dish Description and Instructions -->



<div class="row">
    <div id="ingredient_measurement" class="form-group col-md-12">
        
        <div class="add-more row"> 
            <div class="col-md-2" style="float: left;">
                <label for="mealIng" class="control-label form-inline">{{ 'Meal Ingredient ' }}</label>
                <select class="form-control mealIng" name="mealIngredient[]" id="mealIng">
                    @foreach($mealIngredient as $mealIng)
                        <option value="{{$mealIng->id}}">{{$mealIng->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2" style="float: left;">
                <label for="mealMeasure" class="control-label form-inline">{{ 'Meal  Measurement' }}</label>
                <select class="form-control mealMeasure" name="mealMeasurement[]" id="mealMeasure">
                    @foreach($mealMeasurement as $mealMes)
                        <option value="{{$mealMes->id}}">{{$mealMes->unit}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-1" style="float: left;">
                <label for="quantity" class="control-label">{{ 'Quantity' }}</label>
                <input value="1" class="form-control quantity" type="number" name="quantity[]" id="quantity" required>
            
                {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
            </div>

            <div class="col-md-2" style="float: left;">
                <label for="state" class="control-label">{{ 'State' }}</label>
                <select class="form-control meal_state" type="number" name="meal_state[]" id="meal_state" required>
                   @foreach($mealState as $data)
                    <option value="{{ $data->id }}">{{ $data->state }}</option>
                    @endforeach
                </select>
                {!! $errors->first('meal_state', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="col-md-1" style="float: left;">
                <label for="notify" class="control-label">{{ 'notify' }}</label>
                <select class="form-control notify" type="number" name="notify[]" id="notify" required>
                   <option value="1">Yes</option>
                    <option selected value="0">No</option>
                </select>
                {!! $errors->first('notify', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="col-md-1" style="float: left;">
                <label for="ingredient#" class="control-label">{{ 'Ingredient#' }}</label>
                <input class="form-control" name="ingredient#[]" type="number" id="ingredient#"
               value="{{ isset($mealrecipe->ingredient) ? $mealrecipe->ingredient : ''}}">
              {!! $errors->first('ingredient#', '<p class="help-block">:message</p>') !!}        
            </div>
            <div class="col-md-1" style="float: left;">
                <label for="in_order" class="control-label">{{ 'Order #' }}</label>
                <input class="form-control" name="in_order[]" type="number" id="in_order"
                value="{{ isset($mealrecipe->in_order) ? $mealrecipe->in_order : '1'}}">
               {!! $errors->first('in_order', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="col-md-2" style="float: left;margin-top:30px">
                <button type="button" id="add" class="btn btn-primary">add</button>
                <button type="button" id="remove" class="btn btn-danger">remove</button>
            </div>
        </div>
        

    </div>
</div>    


<div class="row">
    <div class="col-md-2 {{ $errors->has('single_serving') ? 'has-error' : ''}}">
        <label for="single_serving" class="control-label">{{ 'Single Serving' }}</label>
        <select class="form-control" name="single_serving" type="text" id="single_serving">
            <option value="1">Yes</option>
             <option selected value="0">No</option>
        </select>    
        {!! $errors->first('single_serving', '<p class="help-block">:message</p>') !!}
</div>
    <div class="col-md-2 {{ $errors->has('recipe_likes') ? 'has-error' : ''}}">
        <label for="recipe_likes" class="control-label">{{ 'Recipe Likes' }}</label>
        <input class="form-control" name="recipe_likes" type="number" id="recipe_likes"
               value="{{ isset($mealrecipe->recipe_likes) ? $mealrecipe->recipe_likes : ''}}">
        {!! $errors->first('recipe_likes', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-2 {{ $errors->has('keeps_well') ? 'has-error' : ''}}">
        <label for="keeps_well" class="control-label">{{ 'Keeps Well' }}</label>
        <input class="form-control" name="keeps_well" type="text" id="keeps_well"
               value="{{ isset($mealrecipe->keeps_well) ? $mealrecipe->keeps_well : ''}}">
        {!! $errors->first('keeps_well', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-2 {{ $errors->has('recipe_leftover') ? 'has-error' : ''}}">
        <label for="recipe_leftover" class="control-label">{{ 'Recipe Leftover' }}</label>
        <select class="form-control" name="recipe_leftover" type="number" id="recipe_leftover">
            <option value="1">Yes</option>
             <option selected value="0">No</option>
        </select>
        {!! $errors->first('recipe_leftover', '<p class="help-block">:message</p>') !!}
    </div>
    
    <div class="col-md-2 {{ $errors->has('recurring_enable') ? 'has-error' : ''}}">
        <label for="recurring_enable" class="control-label">{{ 'Recurring Enable' }}</label>
        <select class="form-control" name="recurring_enable" type="number" id="recurring_enable">
            <option value="1">Yes</option>
             <option selected value="0">No</option>
        </select>
        {!! $errors->first('recurring_enable', '<p class="help-block">:message</p>') !!}
    </div>
</div>    
<div class="row">    
    {{--  <div class="col-md-6 {{ $errors->has('url_rewrite') ? 'has-error' : ''}}">
        <label for="url_rewrite" class="control-label">{{ 'Url Rewrite' }}</label>
        <input class="form-control" name="url_rewrite" type="text" id="url_rewrite"
               value="{{ isset($mealrecipe->url_rewrite) ? $mealrecipe->url_rewrite : ''}}">
        {!! $errors->first('url_rewrite', '<p class="help-block">:message</p>') !!}
    </div>  --}}
    <div class="col-md-2 {{ $errors->has('breakfast_food') ? 'has-error' : ''}}">
        <label for="breakfast_food" class="control-label">{{ 'Breakfast Food' }}</label>
        <select class="form-control" name="breakfast_food" type="number" id="breakfast_food">
            <option value="1">Yes</option>
             <option selected value="0">No</option>
        </select>
        {!! $errors->first('breakfast_food', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-2 {{ $errors->has('is_basic_food') ? 'has-error' : ''}}">
        <label for="is_basic_food" class="control-label">{{ 'Is Basic Food' }}</label>
        <select class="form-control" name="is_basic_food" type="number" id="is_basic_food">
            <option value="1">Yes</option>
             <option selected value="0">No</option>
        </select>
        {!! $errors->first('is_basic_food', '<p class="help-block">:message</p>') !!}
    </div>
</div>    
<div class="row">
    
</div>    

<div class="row">
    <div class="col-md-6 {{ $errors->has('title') ? 'has-error' : ''}}">
        <label for="title" class="control-label">{{ 'Title' }}</label>
        <input class="form-control" name="title" type="text" id="title"
               value="{{ isset($mealrecipe->title) ? $mealrecipe->title : ''}}">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6 {{ $errors->has('meta_title') ? 'has-error' : ''}}">
        <label for="meta_title" class="control-label">{{ 'Meta Title' }}</label>
        <input class="form-control" name="meta_title" type="text" id="meta_title"
               value="{{ isset($mealrecipe->meta_title) ? $mealrecipe->meta_title : ''}}">
        {!! $errors->first('meta_title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="row">    
    <div class="col-md-6 {{ $errors->has('meta_description') ? 'has-error' : ''}}">
        <label for="meta_description" class="control-label">{{ 'Meta Description' }}</label>
        <input class="form-control" name="meta_desctiption" type="text" id="meta_description"
               value="{{ isset($mealrecipe->meta_description) ? $mealrecipe->meta_description : ''}}">
        {!! $errors->first('meta_description', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6 {{ $errors->has('meta_tags') ? 'has-error' : ''}}">
        <label for="meta_tags" class="control-label">{{ 'Meta Tags' }}</label>
        <input class="form-control" name="meta_tags" type="text" id="meta_tags"
               value="{{ isset($mealrecipe->meta_tags) ? $mealrecipe->meta_tags : ''}}">
        {!! $errors->first('meta_tags', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="row">    
    
</div>

<div class="row">
    <div class="col-md-6 {{ $errors->has('image') ? 'has-error' : ''}}">
        <label for="image" class="control-label">{{ 'Image' }}</label>
        <input class="form-control" name="image" type="file" id="image" required>
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6 {{ $errors->has('thumb_image') ? 'has-error' : ''}}">
        <label for="thumb_image" class="control-label">{{ 'Thumb Image' }}</label>
        <input class="form-control" name="thumb_image" type="file" id="thumb_image" required>
        {!! $errors->first('thumb_image', '<p class="help-block">:message</p>') !!}
    </div>
</div>    
<div class="row">
    <div class="col-md-6 {{ $errors->has('imagealt') ? 'has-error' : ''}}">
        <label for="imagealt" class="control-label">{{ 'Imagealt' }}</label>
        <input class="form-control" name="imagealt" type="text" id="imagealt"
               value="{{ isset($mealrecipe->imagealt) ? $mealrecipe->imagealt : ''}}">
        {!! $errors->first('imagealt', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-6 {{ $errors->has('imagetitle') ? 'has-error' : ''}}">
        <label for="imagetitle" class="control-label">{{ 'Imagetitle' }}</label>
        <input class="form-control" name="imagetitle" type="text" id="imagetitle"
               value="{{ isset($mealrecipe->imagetitle) ? $mealrecipe->imagetitle : ''}}">
        {!! $errors->first('imagetitle', '<p class="help-block">:message</p>') !!}
    </div>
</div>    

<div class="form-group {{ $errors->has('images') ? 'has-error' : ''}}">
    <label for="images" class="control-label">{{ 'Images' }}</label>
    <input class="form-control" name="images[]" type="file" id="images" multiple required>
    {!! $errors->first('images', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
