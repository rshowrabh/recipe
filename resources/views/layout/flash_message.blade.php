@if (Session::has('errorMessage'))
    <div class="alert alert-danger top-buffer">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('errorMessage') }}
    </div>
@endif
@if (Session::has('flash_message'))
    <div class="alert alert-success top-buffer">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('flash_message') }}
    </div>
@endif