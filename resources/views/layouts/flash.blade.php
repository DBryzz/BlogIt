@if (session()->has('notification'))

    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>

@elseif (session()->has('error'))

    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif