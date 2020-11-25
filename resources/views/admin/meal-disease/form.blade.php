<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($mealdisease->name) ? $mealdisease->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('symptoms') ? 'has-error' : ''}}">
    <label for="symptoms" class="control-label">{{ 'Symptoms' }}</label>
    <textarea class="form-control" rows="5" name="symptoms" type="textarea" id="symptoms" required>{{ isset($mealdisease->symptoms) ? $mealdisease->symptoms : ''}}</textarea>
    {!! $errors->first('symptoms', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('food_to_eaten') ? 'has-error' : ''}}">
    <label for="food_to_eaten" class="control-label">{{ 'Food To Eaten' }}</label>
    <textarea class="form-control" rows="5" name="food_to_eaten" type="textarea" id="food_to_eaten" >{{ isset($mealdisease->food_to_eaten) ? $mealdisease->food_to_eaten : ''}}</textarea>
    {!! $errors->first('food_to_eaten', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('food_to_avoid') ? 'has-error' : ''}}">
    <label for="food_to_avoid" class="control-label">{{ 'Food To Avoid' }}</label>
    <textarea class="form-control" rows="5" name="food_to_avoid" type="textarea" id="food_to_avoid" >{{ isset($mealdisease->food_to_avoid) ? $mealdisease->food_to_avoid : ''}}</textarea>
    {!! $errors->first('food_to_avoid', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <input class="form-control" name="status" type="number" id="status" value="{{ isset($mealdisease->status) ? $mealdisease->status : ''}}" >
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
