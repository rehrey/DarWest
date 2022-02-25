<!---------Fail Vs Success------>
@if(session('success')) 
<div class="alert alert-success">
  <i class="icon fas fa-check-circle"></i> {{ Session::get('success') }}
</div>
@endif

@if(session('info')) 
<div class="alert alert-info">
<i class="icon fas fa-check-circle"></i> {{ Session::get('info') }}
</div>
@endif

@if(session('warning')) 
<div class="alert alert-warning">
<i class="icon fas fa-warning-sign"></i> {{ Session::get('warning') }}
</div>
@endif

@if(session('danger')) 
<div class="alert alert-danger">
<i class="icon fas fa-check-circle"></i> {{ Session::get('danger') }}
</div>
@endif