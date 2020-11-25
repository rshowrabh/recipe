
<div class="row">
  <div class="col-md-6 {{ $errors->has('name') ? 'has-error' : ''}}">
      <label for="name" class="control-label">{{ 'Name of Ingredient' }}</label>
      <input class="form-control" name="name" type="text" id="name"
             value="{{ isset($mealingredient->name) ? $mealingredient->name : ''}}" required>
      {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
  </div>
  <div class="col-md-6 {{ $errors->has('also_known') ? 'has-error' : ''}}">
      <label for="also_known" class="control-label">{{ 'Also Known' }}</label>
      <input class="form-control" name="also_known" type="text" id="also_known"
             value="{{ isset($mealingredient->also_known) ? $mealingredient->also_known : ''}}">
      {!! $errors->first('also_known', '<p class="help-block">:message</p>') !!}
  </div>
</div>
<div class="row">
  <div class="col-md-6 {{ $errors->has('parameter') ? 'has-error' : ''}}">
      <label for="parameter" class="control-label">{{ 'Parameter' }}</label>
      <select multiple class="form-control" name="parameter" id="parameter">
          @foreach($MealMeasurements as $MealMeasurements)
              <option value="{{$MealMeasurements->id}}"
                      @if(isset($MealMeasurements->unit) && $MealMeasurements->id == $MealMeasurements->id) selected @endif>{{$MealMeasurements->unit}}</option>
          @endforeach
      </select>
      {!! $errors->first('Parameter', '<p class="help-block">:message</p>') !!}
  </div>





  <div class="col-md-6 {{ $errors->has('category') ? 'has-error' : ''}}">
      <label for="category" class="control-label">{{ 'Ingredient Category' }}</label>
      <select class="form-control" name="category_id" id="category_id">
          @foreach($categories as $category)
              <option value="{{$category->id}}"
                      @if(isset($mealingredient->category_id) && $mealingredient->category_id==$category->id) selected @endif>{{$category->name}}</option>
          @endforeach
      </select>
      {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="10" name="description" type="textarea"
              id="description">{{ isset($mealingredient->description) ? $mealingredient->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>



<div class="row">
    <div class="col-md-6 {{ $errors->has('storage') ? 'has-error' : ''}}">
      <label for="storage" class="control-label">{{ 'How to Store (Ingreident)' }}</label>
      <textarea class="form-control" rows="5"name="storage" type="textarea" id="storage">
             {{ isset($mealingredient->storage) ? $mealingredient->storage : ''}}</textarea>
      {!! $errors->first('storage', '<p class="help-block">:message</p>') !!}
  </div>

  <div class="col-md-6 {{ $errors->has('shelf_life') ? 'has-error' : ''}}">
      <label for="shelf_life" class="control-label">{{ 'Shelf Life of Ingredient' }}</label>
      <textarea class="form-control" rows="5"name="shelf_life" type="textarea" id="shelf_life">
             {{ isset($mealingredient->shelf_life) ? $mealingredient->shelf_life : ''}}</textarea>
      {!! $errors->first('shelf_life', '<p class="help-block">:message</p>') !!}
  </div>
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

<!-- Nutritional Value Section -->
<div class="row">
  <div class="col-md-1 {{ $errors->has('directly_edible') ? 'has-error' : ''}}">
    <label for="directly_edible" class="control-label">{{ 'D Edible' }}</label>
    <input class="form-control" name="directly_edible" type="number" id="directly_edible"
           value="{{ isset($mealingredient->directly_edible) ? $mealingredient->directly_edible : ''}}">
    {!! $errors->first('directly_edible', '<p class="help-block">:message</p>') !!}
  </div>
  <div class="col-md-1 {{ $errors->has('serving') ? 'has-error' : ''}}">
      <label for="serving" class="control-label">{{ 'Serving' }}</label>
      <input class="form-control" name="serving" type="text" id="serving"
             value="{{ isset($mealingredient->serving) ? $mealingredient->serving : ''}}">
      {!! $errors->first('serving', '<p class="help-block">:message</p>') !!}
  </div>
  <div class="col-md-2 {{ $errors->has('per_gram_serving') ? 'has-error' : ''}}">
    <label for="per_gram_serving" class="control-label">{{ 'Calories Per Gram' }}</label>
    <input class="form-control" name="per_gram_serving" type="text" id="per_gram_serving"
           value="{{ isset($mealingredient->per_gram_serving) ? $mealingredient->per_gram_serving : ''}}">
    {!! $errors->first('per_gram_serving', '<p class="help-block">:message</p>') !!}
  </div>    
  <div class="col-md-1 {{ $errors->has('calories') ? 'has-error' : ''}}">
      <label for="calories" class="control-label">{{ 'Calories' }}</label>
      <input class="form-control" name="calories" type="text" id="calories"
             value="{{ isset($mealingredient->calories) ? $mealingredient->calories : ''}}">
      {!! $errors->first('calories', '<p class="help-block">:message</p>') !!}
  </div>
  <div class="col-md-1 {{ $errors->has('carbs') ? 'has-error' : ''}}">
      <label for="carbs" class="control-label">{{ 'Carbs' }}</label>
      <input class="form-control" name="carbs" type="text" id="carbs"
             value="{{ isset($mealingredient->carbs) ? $mealingredient->carbs : ''}}">
      {!! $errors->first('carbs', '<p class="help-block">:message</p>') !!}
  </div>
  <div class="col-md-1 {{ $errors->has('fats') ? 'has-error' : ''}}">
      <label for="fats" class="control-label">{{ 'Fats' }}</label>
      <input class="form-control" name="fats" type="text" id="fats"
             value="{{ isset($mealingredient->fats) ? $mealingredient->fats : ''}}">
      {!! $errors->first('fats', '<p class="help-block">:message</p>') !!}
  </div>
  <div class="col-md-1 {{ $errors->has('protien') ? 'has-error' : ''}}">
      <label for="protien" class="control-label">{{ 'protien' }}</label>
      <input class="form-control" name="protien" type="text" id="protien"
             value="{{ isset($mealingredient->protien) ? $mealingredient->protien : ''}}">
      {!! $errors->first('protien', '<p class="help-block">:message</p>') !!}
  </div>
  <div class="col-md-1 {{ $errors->has('sugar') ? 'has-error' : ''}}">
    <label for="sugar" class="control-label">{{ 'Sugar' }}</label>
    <input class="form-control" name="sugar" type="number" id="sugar"
           value="{{ isset($mealingredient->sugar) ? $mealingredient->sugar : ''}}">
    {!! $errors->first('sugar', '<p class="help-block">:message</p>') !!}
  </div>
  <div class="col-md-1 {{ $errors->has('potassium') ? 'has-error' : ''}}">
    <label for="potassium" class="control-label">{{ 'Potassium' }}</label>
    <input class="form-control" name="potassium" type="text" id="potassium"
           value="{{ isset($mealingredient->potassium) ? $mealingredient->potassium : ''}}">
    {!! $errors->first('potassium', '<p class="help-block">:message</p>') !!}
  </div>
  <div class="col-md-1 {{ $errors->has('cholesterol') ? 'has-error' : ''}}">
    <label for="cholesterol" class="control-label">{{ 'Cholesterol' }}</label>
    <input class="form-control" name="cholesterol" type="text" id="cholesterol"
           value="{{ isset($mealingredient->cholesterol) ? $mealingredient->cholesterol : ''}}">
    {!! $errors->first('cholesterol', '<p class="help-block">:message</p>') !!}
  </div>
  <div class="col-md-1 {{ $errors->has('price') ? 'has-error' : ''}}">
      <label for="price" class="control-label">{{ 'Price' }}</label>
      <input class="form-control" name="price" type="text" id="price"
             value="{{ isset($mealingredient->price) ? $mealingredient->price : ''}}">
      {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
  </div>
</div>
<div class="row">
  <div class="col-md-2 {{ $errors->has('is_healthy') ? 'has-error' : ''}}">
      <label for="is_healthy" class="control-label">{{ 'Is Healthy' }}</label>
      <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
      <input class="form-control" name="is_healthy" type="number" id="is_healthy"
             value="{{ isset($mealingredient->is_healthy) ? $mealingredient->is_healthy : ''}}">
      {!! $errors->first('is_healthy', '<p class="help-block">:message</p>') !!}
  </div>  

  <div class="col-md-2 {{ $errors->has('food_group') ? 'has-error' : ''}}">
      <label for="food_group" class="control-label">{{ 'Food Group' }}</label>
      <input class="form-control" name="food_group" type="number" id="food_group"
             value="{{ isset($mealingredient->food_group) ? $mealingredient->food_group : ''}}">
      {!! $errors->first('food_group', '<p class="help-block">:message</p>') !!}
  </div>

  <div class="col-md-2 {{ $errors->has('fiber_in_gm') ? 'has-error' : ''}}">
      <label for="fiber_in_gm" class="control-label">{{ 'Fiber In Gm' }}</label>
      <input class="form-control" name="fiber_in_gm" type="text" id="fiber_in_gm"
             value="{{ isset($mealingredient->fiber_in_gm) ? $mealingredient->fiber_in_gm : ''}}">
      {!! $errors->first('fiber_in_gm', '<p class="help-block">:message</p>') !!}
  </div>
  <div class="col-md-2 {{ $errors->has('fiber_in_percent') ? 'has-error' : ''}}">
      <label for="fiber_in_percent" class="control-label">{{ 'Fiber In Percent' }}</label>
      <input class="form-control" name="fiber_in_percent" type="text" id="fiber_in_percent"
             value="{{ isset($mealingredient->fiber_in_percent) ? $mealingredient->fiber_in_percent : ''}}">
      {!! $errors->first('fiber_in_percent', '<p class="help-block">:message</p>') !!}
  </div>
  <div class="col-md-2 {{ $errors->has('sodium_in_mg') ? 'has-error' : ''}}">
      <label for="sodium_in_mg" class="control-label">{{ 'Sodium In Mg' }}</label>
      <input class="form-control" name="sodium_in_mg" type="text" id="sodium_in_mg"
             value="{{ isset($mealingredient->sodium_in_mg) ? $mealingredient->sodium_in_mg : ''}}">
      {!! $errors->first('sodium_in_mg', '<p class="help-block">:message</p>') !!}
  </div>
  <div class="col-md-2 {{ $errors->has('sodium_in_percent') ? 'has-error' : ''}}">
      <label for="sodium_in_percent" class="control-label">{{ 'Sodium In Percent' }}</label>
      <input class="form-control" name="sodium_in_percent" type="text" id="sodium_in_percent"
             value="{{ isset($mealingredient->sodium_in_percent) ? $mealingredient->sodium_in_percent : ''}}">
      {!! $errors->first('sodium_in_percent', '<p class="help-block">:message</p>') !!}
  </div>
</div>  



<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title"
           value="{{ isset($mealingredient->title) ? $mealingredient->title : ''}}">
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('keyword') ? 'has-error' : ''}}">
    <label for="keyword" class="control-label">{{ 'Keyword' }}</label>
    <input class="form-control" name="keyword" type="text" id="keyword"
           value="{{ isset($mealingredient->keyword) ? $mealingredient->keyword : ''}}">
    {!! $errors->first('keyword', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('og_desc') ? 'has-error' : ''}}">
    <label for="og_desc" class="control-label">{{ 'Og Desc' }}</label>
    <input class="form-control" name="og_desc" type="text" id="og_desc"
           value="{{ isset($mealingredient->og_desc) ? $mealingredient->og_desc : ''}}">
    {!! $errors->first('og_desc', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('og_title') ? 'has-error' : ''}}">
    <label for="og_title" class="control-label">{{ 'Og Title' }}</label>
    <input class="form-control" name="og_title" type="text" id="og_title"
           value="{{ isset($mealingredient->og_title) ? $mealingredient->og_title : ''}}">
    {!! $errors->first('og_title', '<p class="help-block">:message</p>') !!}
</div>

<!-- Social Media Section -->
<div class="row">
  <div class="col-md-6 {{ $errors->has('facebook_img') ? 'has-error' : ''}}">
      <label for="facebook_img" class="control-label">{{ 'Facebook Img' }}</label>
      <input class="form-control" name="facebook_img" type="file" id="facebook_img" required>
      {!! $errors->first('facebook_img', '<p class="help-block">:message</p>') !!}
  </div>
  <div class="col-md-6 {{ $errors->has('twitter_img') ? 'has-error' : ''}}">
      <label for="twitter_img" class="control-label">{{ 'Twitter Img' }}</label>
      <input class="form-control" name="twitter_img" type="file" id="twitter_img" required>
      {!! $errors->first('twitter_img', '<p class="help-block">:message</p>') !!}
  </div>
</div>
<div class="form-group {{ $errors->has('images') ? 'has-error' : ''}}">
    <label for="images" class="control-label">{{ 'Images' }}</label>
    <input class="form-control" name="images[]" type="file" id="images" multiple required>
    {!! $errors->first('images', '<p class="help-block">:message</p>') !!}
</div>
<div class="row">
  <div class="col-md-4 {{ $errors->has('tag1') ? 'has-error' : ''}}">
      <label for="tag1" class="control-label">{{ 'Tag1' }}</label>
      <input class="form-control" name="tag1" type="text" id="tag1"
             value="{{ isset($mealingredient->tag1) ? $mealingredient->tag1 : ''}}">
      {!! $errors->first('tag1', '<p class="help-block">:message</p>') !!}
  </div>
  <div class="col-md-4 {{ $errors->has('image_title') ? 'has-error' : ''}}">
      <label for="image_title" class="control-label">{{ 'Image Title' }}</label>
      <input class="form-control" name="image_title" type="text" id="image_title"
             value="{{ isset($mealingredient->image_title) ? $mealingredient->image_title : ''}}">
      {!! $errors->first('image_title', '<p class="help-block">:message</p>') !!}
  </div>
  <div class="col-md-4 {{ $errors->has('image_alt_tag') ? 'has-error' : ''}}">
      <label for="image_alt_tag" class="control-label">{{ 'Image Alt Tag' }}</label>
      <input class="form-control" name="image_alt_tag" type="text" id="image_alt_tag"
             value="{{ isset($mealingredient->image_alt_tag) ? $mealingredient->image_alt_tag : ''}}">
      {!! $errors->first('image_alt_tag', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="form-group {{ $errors->has('meta_description') ? 'has-error' : ''}}">
    <label for="meta_description" class="control-label">{{ 'Meta Description' }}</label>
    <textarea class="form-control" rows="5" name="meta_description" type="textarea"
              id="meta_description">{{ isset($mealingredient->meta_description) ? $mealingredient->meta_description : ''}}</textarea>
    {!! $errors->first('meta_description', '<p class="help-block">:message</p>') !!}
</div>
<div class="row">
  <div class="col-md-6 {{ $errors->has('url_rewrite') ? 'has-error' : ''}}">
      <label for="url_rewrite" class="control-label">{{ 'Url Rewrite' }}</label>
      <input class="form-control" name="url_rewrite" type="text" id="url_rewrite"
             value="{{ isset($mealingredient->url_rewrite) ? $mealingredient->url_rewrite : ''}}">
      {!! $errors->first('url_rewrite', '<p class="help-block">:message</p>') !!}
  </div>
  @can('isAdmin')
  <div class="col-md-3 {{ $errors->has('approved') ? 'has-error' : ''}}">
      <label for="approved" class="control-label">{{ 'Approved' }}</label>
      <select class="form-control" name="approved" type="number" id="approved">
        <option value='0' selected>No</option>
        <option value='1'>Yes</option>
      </select>  
      {!! $errors->first('approved', '<p class="help-block">:message</p>') !!}
  </div>
  @endcan
  <div class="col-md-3 {{ $errors->has('created_by') ? 'has-error' : ''}}">
      <label for="created_by" class="control-label">{{ 'Created By' }}</label>
      <input class="form-control" name="created_by" type="text" id="created_by"
             value="{{ isset($mealingredient->created_by) ? $mealingredient->created_by : auth()->user()->name}}">
      {!! $errors->first('created_by', '<p class="help-block">:message</p>') !!}
  </div>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
