<div class="form-group {{ $errors->has('ingredent_id') ? 'has-error' : ''}}">
    <label for="ingredent_id" class="control-label">{{ 'Ingredient' }}</label>
    <select class="form-control" name="ingredent_id" id="ingredent_id">
        @foreach($ingredients as $ingredient)
            <option value="{{$ingredient->id}}"
                    @if(isset($mealvitaminmineral->ingredent_id) && $mealvitaminmineral->ingredent_id==$ingredient->id) selected @endif>{{$ingredient->name}}</option>
        @endforeach
    </select>
    {!! $errors->first('ingredent_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vitamin_a') ? 'has-error' : ''}}">
    <label for="vitamin_a" class="control-label">{{ 'Vitamin A' }}</label>
    <input class="form-control" name="vitamin_a" type="text" id="vitamin_a"
           value="{{ isset($mealvitaminmineral->vitamin_a) ? $mealvitaminmineral->vitamin_a : ''}}">
    {!! $errors->first('vitamin_a', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vitamin_b6') ? 'has-error' : ''}}">
    <label for="vitamin_b6" class="control-label">{{ 'Vitamin B6' }}</label>
    <input class="form-control" name="vitamin_b6" type="text" id="vitamin_b6"
           value="{{ isset($mealvitaminmineral->vitamin_b6) ? $mealvitaminmineral->vitamin_b6 : ''}}">
    {!! $errors->first('vitamin_b6', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vitamin_b12') ? 'has-error' : ''}}">
    <label for="vitamin_b12" class="control-label">{{ 'Vitamin B12' }}</label>
    <input class="form-control" name="vitamin_b12" type="text" id="vitamin_b12"
           value="{{ isset($mealvitaminmineral->vitamin_b12) ? $mealvitaminmineral->vitamin_b12 : ''}}">
    {!! $errors->first('vitamin_b12', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vitamin_c') ? 'has-error' : ''}}">
    <label for="vitamin_c" class="control-label">{{ 'Vitamin C' }}</label>
    <input class="form-control" name="vitamin_c" type="text" id="vitamin_c"
           value="{{ isset($mealvitaminmineral->vitamin_c) ? $mealvitaminmineral->vitamin_c : ''}}">
    {!! $errors->first('vitamin_c', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vitamin_d') ? 'has-error' : ''}}">
    <label for="vitamin_d" class="control-label">{{ 'Vitamin D' }}</label>
    <input class="form-control" name="vitamin_d" type="text" id="vitamin_d"
           value="{{ isset($mealvitaminmineral->vitamin_d) ? $mealvitaminmineral->vitamin_d : ''}}">
    {!! $errors->first('vitamin_d', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vitamin_d2') ? 'has-error' : ''}}">
    <label for="vitamin_d2" class="control-label">{{ 'Vitamin D2' }}</label>
    <input class="form-control" name="vitamin_d2" type="text" id="vitamin_d2"
           value="{{ isset($mealvitaminmineral->vitamin_d2) ? $mealvitaminmineral->vitamin_d2 : ''}}">
    {!! $errors->first('vitamin_d2', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vitamin_d3') ? 'has-error' : ''}}">
    <label for="vitamin_d3" class="control-label">{{ 'Vitamin D3' }}</label>
    <input class="form-control" name="vitamin_d3" type="text" id="vitamin_d3"
           value="{{ isset($mealvitaminmineral->vitamin_d3) ? $mealvitaminmineral->vitamin_d3 : ''}}">
    {!! $errors->first('vitamin_d3', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vitamin_e') ? 'has-error' : ''}}">
    <label for="vitamin_e" class="control-label">{{ 'Vitamin E' }}</label>
    <input class="form-control" name="vitamin_e" type="text" id="vitamin_e"
           value="{{ isset($mealvitaminmineral->vitamin_e) ? $mealvitaminmineral->vitamin_e : ''}}">
    {!! $errors->first('vitamin_e', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vitamin_k') ? 'has-error' : ''}}">
    <label for="vitamin_k" class="control-label">{{ 'Vitamin K' }}</label>
    <input class="form-control" name="vitamin_k" type="text" id="vitamin_k"
           value="{{ isset($mealvitaminmineral->vitamin_k) ? $mealvitaminmineral->vitamin_k : ''}}">
    {!! $errors->first('vitamin_k', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('calcium') ? 'has-error' : ''}}">
    <label for="calcium" class="control-label">{{ 'Calcium' }}</label>
    <input class="form-control" name="calcium" type="text" id="calcium"
           value="{{ isset($mealvitaminmineral->calcium) ? $mealvitaminmineral->calcium : ''}}">
    {!! $errors->first('calcium', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('iron') ? 'has-error' : ''}}">
    <label for="iron" class="control-label">{{ 'Iron' }}</label>
    <input class="form-control" name="iron" type="text" id="iron"
           value="{{ isset($mealvitaminmineral->iron) ? $mealvitaminmineral->iron : ''}}">
    {!! $errors->first('iron', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('magnesium') ? 'has-error' : ''}}">
    <label for="magnesium" class="control-label">{{ 'Magnesium' }}</label>
    <input class="form-control" name="magnesium" type="text" id="magnesium"
           value="{{ isset($mealvitaminmineral->magnesium) ? $mealvitaminmineral->magnesium : ''}}">
    {!! $errors->first('magnesium', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('phosphorus') ? 'has-error' : ''}}">
    <label for="phosphorus" class="control-label">{{ 'Phosphorus' }}</label>
    <input class="form-control" name="phosphorus" type="text" id="phosphorus"
           value="{{ isset($mealvitaminmineral->phosphorus) ? $mealvitaminmineral->phosphorus : ''}}">
    {!! $errors->first('phosphorus', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('zinc') ? 'has-error' : ''}}">
    <label for="zinc" class="control-label">{{ 'Zinc' }}</label>
    <input class="form-control" name="zinc" type="text" id="zinc"
           value="{{ isset($mealvitaminmineral->zinc) ? $mealvitaminmineral->zinc : ''}}">
    {!! $errors->first('zinc', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('copper') ? 'has-error' : ''}}">
    <label for="copper" class="control-label">{{ 'Copper' }}</label>
    <input class="form-control" name="copper" type="text" id="copper"
           value="{{ isset($mealvitaminmineral->copper) ? $mealvitaminmineral->copper : ''}}">
    {!! $errors->first('copper', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('manganese') ? 'has-error' : ''}}">
    <label for="manganese" class="control-label">{{ 'Manganese' }}</label>
    <input class="form-control" name="manganese" type="text" id="manganese"
           value="{{ isset($mealvitaminmineral->manganese) ? $mealvitaminmineral->manganese : ''}}">
    {!! $errors->first('manganese', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('selenium') ? 'has-error' : ''}}">
    <label for="selenium" class="control-label">{{ 'Selenium' }}</label>
    <input class="form-control" name="selenium" type="text" id="selenium"
           value="{{ isset($mealvitaminmineral->selenium) ? $mealvitaminmineral->selenium : ''}}">
    {!! $errors->first('selenium', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('retinol') ? 'has-error' : ''}}">
    <label for="retinol" class="control-label">{{ 'Retinol' }}</label>
    <input class="form-control" name="retinol" type="text" id="retinol"
           value="{{ isset($mealvitaminmineral->retinol) ? $mealvitaminmineral->retinol : ''}}">
    {!! $errors->first('retinol', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('thiamine') ? 'has-error' : ''}}">
    <label for="thiamine" class="control-label">{{ 'Thiamine' }}</label>
    <input class="form-control" name="thiamine" type="text" id="thiamine"
           value="{{ isset($mealvitaminmineral->thiamine) ? $mealvitaminmineral->thiamine : ''}}">
    {!! $errors->first('thiamine', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('riboflavin') ? 'has-error' : ''}}">
    <label for="riboflavin" class="control-label">{{ 'Riboflavin' }}</label>
    <input class="form-control" name="riboflavin" type="text" id="riboflavin"
           value="{{ isset($mealvitaminmineral->riboflavin) ? $mealvitaminmineral->riboflavin : ''}}">
    {!! $errors->first('riboflavin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('niacin') ? 'has-error' : ''}}">
    <label for="niacin" class="control-label">{{ 'Niacin' }}</label>
    <input class="form-control" name="niacin" type="text" id="niacin"
           value="{{ isset($mealvitaminmineral->niacin) ? $mealvitaminmineral->niacin : ''}}">
    {!! $errors->first('niacin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('folate') ? 'has-error' : ''}}">
    <label for="folate" class="control-label">{{ 'Folate' }}</label>
    <input class="form-control" name="folate" type="text" id="folate"
           value="{{ isset($mealvitaminmineral->folate) ? $mealvitaminmineral->folate : ''}}">
    {!! $errors->first('folate', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('choline') ? 'has-error' : ''}}">
    <label for="choline" class="control-label">{{ 'Choline' }}</label>
    <input class="form-control" name="choline" type="text" id="choline"
           value="{{ isset($mealvitaminmineral->choline) ? $mealvitaminmineral->choline : ''}}">
    {!! $errors->first('choline', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('betaine') ? 'has-error' : ''}}">
    <label for="betaine" class="control-label">{{ 'Betaine' }}</label>
    <input class="form-control" name="betaine" type="text" id="betaine"
           value="{{ isset($mealvitaminmineral->betaine) ? $mealvitaminmineral->betaine : ''}}">
    {!! $errors->first('betaine', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('caffeine') ? 'has-error' : ''}}">
    <label for="caffeine" class="control-label">{{ 'Caffeine' }}</label>
    <input class="form-control" name="caffeine" type="text" id="caffeine"
           value="{{ isset($mealvitaminmineral->caffeine) ? $mealvitaminmineral->caffeine : ''}}">
    {!! $errors->first('caffeine', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lycopene') ? 'has-error' : ''}}">
    <label for="lycopene" class="control-label">{{ 'Lycopene' }}</label>
    <input class="form-control" name="lycopene" type="text" id="lycopene"
           value="{{ isset($mealvitaminmineral->lycopene) ? $mealvitaminmineral->lycopene : ''}}">
    {!! $errors->first('lycopene', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fluoride') ? 'has-error' : ''}}">
    <label for="fluoride" class="control-label">{{ 'Fluoride' }}</label>
    <input class="form-control" name="fluoride" type="text" id="fluoride"
           value="{{ isset($mealvitaminmineral->fluoride) ? $mealvitaminmineral->fluoride : ''}}">
    {!! $errors->first('fluoride', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('water') ? 'has-error' : ''}}">
    <label for="water" class="control-label">{{ 'Water' }}</label>
    <input class="form-control" name="water" type="text" id="water"
           value="{{ isset($mealvitaminmineral->water) ? $mealvitaminmineral->water : ''}}">
    {!! $errors->first('water', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('calcium_in_percent') ? 'has-error' : ''}}">
    <label for="calcium_in_percent" class="control-label">{{ 'Calcium In Percent' }}</label>
    <input class="form-control" name="calcium_in_percent" type="text" id="calcium_in_percent"
           value="{{ isset($mealvitaminmineral->calcium_in_percent) ? $mealvitaminmineral->calcium_in_percent : ''}}">
    {!! $errors->first('calcium_in_percent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('choline_in_percent') ? 'has-error' : ''}}">
    <label for="choline_in_percent" class="control-label">{{ 'Choline In Percent' }}</label>
    <input class="form-control" name="choline_in_percent" type="text" id="choline_in_percent"
           value="{{ isset($mealvitaminmineral->choline_in_percent) ? $mealvitaminmineral->choline_in_percent : ''}}">
    {!! $errors->first('choline_in_percent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('copper_in_percent') ? 'has-error' : ''}}">
    <label for="copper_in_percent" class="control-label">{{ 'Copper In Percent' }}</label>
    <input class="form-control" name="copper_in_percent" type="text" id="copper_in_percent"
           value="{{ isset($mealvitaminmineral->copper_in_percent) ? $mealvitaminmineral->copper_in_percent : ''}}">
    {!! $errors->first('copper_in_percent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('folate_in_percent') ? 'has-error' : ''}}">
    <label for="folate_in_percent" class="control-label">{{ 'Folate In Percent' }}</label>
    <input class="form-control" name="folate_in_percent" type="text" id="folate_in_percent"
           value="{{ isset($mealvitaminmineral->folate_in_percent) ? $mealvitaminmineral->folate_in_percent : ''}}">
    {!! $errors->first('folate_in_percent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('iron_in_percent') ? 'has-error' : ''}}">
    <label for="iron_in_percent" class="control-label">{{ 'Iron In Percent' }}</label>
    <input class="form-control" name="iron_in_percent" type="text" id="iron_in_percent"
           value="{{ isset($mealvitaminmineral->iron_in_percent) ? $mealvitaminmineral->iron_in_percent : ''}}">
    {!! $errors->first('iron_in_percent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('magnesium_in_percent') ? 'has-error' : ''}}">
    <label for="magnesium_in_percent" class="control-label">{{ 'Magnesium In Percent' }}</label>
    <input class="form-control" name="magnesium_in_percent" type="text" id="magnesium_in_percent"
           value="{{ isset($mealvitaminmineral->magnesium_in_percent) ? $mealvitaminmineral->magnesium_in_percent : ''}}">
    {!! $errors->first('magnesium_in_percent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('manganese_in_percent') ? 'has-error' : ''}}">
    <label for="manganese_in_percent" class="control-label">{{ 'Manganese In Percent' }}</label>
    <input class="form-control" name="manganese_in_percent" type="text" id="manganese_in_percent"
           value="{{ isset($mealvitaminmineral->manganese_in_percent) ? $mealvitaminmineral->manganese_in_percent : ''}}">
    {!! $errors->first('manganese_in_percent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('niacin_in_percent') ? 'has-error' : ''}}">
    <label for="niacin_in_percent" class="control-label">{{ 'Niacin In Percent' }}</label>
    <input class="form-control" name="niacin_in_percent" type="text" id="niacin_in_percent"
           value="{{ isset($mealvitaminmineral->niacin_in_percent) ? $mealvitaminmineral->niacin_in_percent : ''}}">
    {!! $errors->first('niacin_in_percent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('phosphorus_in_percent') ? 'has-error' : ''}}">
    <label for="phosphorus_in_percent" class="control-label">{{ 'Phosphorus In Percent' }}</label>
    <input class="form-control" name="phosphorus_in_percent" type="text" id="phosphorus_in_percent"
           value="{{ isset($mealvitaminmineral->phosphorus_in_percent) ? $mealvitaminmineral->phosphorus_in_percent : ''}}">
    {!! $errors->first('phosphorus_in_percent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('riboflavin_in_percent') ? 'has-error' : ''}}">
    <label for="riboflavin_in_percent" class="control-label">{{ 'Riboflavin In Percent' }}</label>
    <input class="form-control" name="riboflavin_in_percent" type="text" id="riboflavin_in_percent"
           value="{{ isset($mealvitaminmineral->riboflavin_in_percent) ? $mealvitaminmineral->riboflavin_in_percent : ''}}">
    {!! $errors->first('riboflavin_in_percent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('thiamine_in_percent') ? 'has-error' : ''}}">
    <label for="thiamine_in_percent" class="control-label">{{ 'Thiamine In Percent' }}</label>
    <input class="form-control" name="thiamine_in_percent" type="text" id="thiamine_in_percent"
           value="{{ isset($mealvitaminmineral->thiamine_in_percent) ? $mealvitaminmineral->thiamine_in_percent : ''}}">
    {!! $errors->first('thiamine_in_percent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('selenium_in_percent') ? 'has-error' : ''}}">
    <label for="selenium_in_percent" class="control-label">{{ 'Selenium In Percent' }}</label>
    <input class="form-control" name="selenium_in_percent" type="text" id="selenium_in_percent"
           value="{{ isset($mealvitaminmineral->selenium_in_percent) ? $mealvitaminmineral->selenium_in_percent : ''}}">
    {!! $errors->first('selenium_in_percent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vitamin_a_in_percent') ? 'has-error' : ''}}">
    <label for="vitamin_a_in_percent" class="control-label">{{ 'Vitamin A In Percent' }}</label>
    <input class="form-control" name="vitamin_a_in_percent" type="text" id="vitamin_a_in_percent"
           value="{{ isset($mealvitaminmineral->vitamin_a_in_percent) ? $mealvitaminmineral->vitamin_a_in_percent : ''}}">
    {!! $errors->first('vitamin_a_in_percent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vitamin_b6_in_percent') ? 'has-error' : ''}}">
    <label for="vitamin_b6_in_percent" class="control-label">{{ 'Vitamin B6 In Percent' }}</label>
    <input class="form-control" name="vitamin_b6_in_percent" type="text" id="vitamin_b6_in_percent"
           value="{{ isset($mealvitaminmineral->vitamin_b6_in_percent) ? $mealvitaminmineral->vitamin_b6_in_percent : ''}}">
    {!! $errors->first('vitamin_b6_in_percent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vitamin_b12_in_percent') ? 'has-error' : ''}}">
    <label for="vitamin_b12_in_percent" class="control-label">{{ 'Vitamin B12 In Percent' }}</label>
    <input class="form-control" name="vitamin_b12_in_percent" type="text" id="vitamin_b12_in_percent"
           value="{{ isset($mealvitaminmineral->vitamin_b12_in_percent) ? $mealvitaminmineral->vitamin_b12_in_percent : ''}}">
    {!! $errors->first('vitamin_b12_in_percent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vitamin_c_in_percent') ? 'has-error' : ''}}">
    <label for="vitamin_c_in_percent" class="control-label">{{ 'Vitamin C In Percent' }}</label>
    <input class="form-control" name="vitamin_c_in_percent" type="text" id="vitamin_c_in_percent"
           value="{{ isset($mealvitaminmineral->vitamin_c_in_percent) ? $mealvitaminmineral->vitamin_c_in_percent : ''}}">
    {!! $errors->first('vitamin_c_in_percent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vitamin_d_in_percent') ? 'has-error' : ''}}">
    <label for="vitamin_d_in_percent" class="control-label">{{ 'Vitamin D In Percent' }}</label>
    <input class="form-control" name="vitamin_d_in_percent" type="text" id="vitamin_d_in_percent"
           value="{{ isset($mealvitaminmineral->vitamin_d_in_percent) ? $mealvitaminmineral->vitamin_d_in_percent : ''}}">
    {!! $errors->first('vitamin_d_in_percent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vitamin_e_in_percent') ? 'has-error' : ''}}">
    <label for="vitamin_e_in_percent" class="control-label">{{ 'Vitamin E In Percent' }}</label>
    <input class="form-control" name="vitamin_e_in_percent" type="text" id="vitamin_e_in_percent"
           value="{{ isset($mealvitaminmineral->vitamin_e_in_percent) ? $mealvitaminmineral->vitamin_e_in_percent : ''}}">
    {!! $errors->first('vitamin_e_in_percent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vitamin_k_in_percent') ? 'has-error' : ''}}">
    <label for="vitamin_k_in_percent" class="control-label">{{ 'Vitamin K In Percent' }}</label>
    <input class="form-control" name="vitamin_k_in_percent" type="text" id="vitamin_k_in_percent"
           value="{{ isset($mealvitaminmineral->vitamin_k_in_percent) ? $mealvitaminmineral->vitamin_k_in_percent : ''}}">
    {!! $errors->first('vitamin_k_in_percent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('zinc_in_percent') ? 'has-error' : ''}}">
    <label for="zinc_in_percent" class="control-label">{{ 'Zinc In Percent' }}</label>
    <input class="form-control" name="zinc_in_percent" type="text" id="zinc_in_percent"
           value="{{ isset($mealvitaminmineral->zinc_in_percent) ? $mealvitaminmineral->zinc_in_percent : ''}}">
    {!! $errors->first('zinc_in_percent', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
