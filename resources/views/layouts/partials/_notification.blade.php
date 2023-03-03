@if($errors->any())
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    @foreach($errors->all() as $error)
     {!! $error !!}<br>
    @endforeach
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    </button>
  </div>
@endif

@if(session()->has('error'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {!! session()->get('error') !!}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    </button>
  </div>
@endif

@if(session()->has('info'))
  <div class="alert alert-primary alert-dismissible fade show" role="alert">
    {!! session()->get('info') !!}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        
    </button>
  </div>
@endif

@if(session()->has('status'))
  <div class="alert alert-primary alert-dismissible fade show" role="alert">
    {!! session()->get('status') !!}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        
    </button>
  </div>
@endif

@if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {!! session()->get('success') !!}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    </button>
  </div>
@endif