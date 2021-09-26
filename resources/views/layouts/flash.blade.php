@if (session()->has('notification'))

    <div class="notification is-primary">
        {{ session()->get('message') }}
    </div>

@elseif (session()->has('error'))

    <div class="notification is-danger">
        {{ session()->get('error') }}
    </div>
@endif