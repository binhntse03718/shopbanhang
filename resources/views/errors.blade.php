@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <p style="margin-top:30px " class="alert alert-success">{{ $error }}</p>
    @endforeach
@endif

@if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p>
@endif

