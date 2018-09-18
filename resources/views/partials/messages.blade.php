<div id="flashMessages">
    @if( session('error') )
    <div class="alert alert-danger flash" role="alert">
        {{ session('error') }}
    </div>
    @endif

    @if( session('warning') )
    <div class="alert alert-warn flash" role="alert">
        {{ session('warning') }}
    </div>
    @endif

    @if( session('success') )
    <div class="alert alert-success flash" role="alert">
        {{ session('success') }}
    </div>
    @endif

    @if( session('message') )
    <div class="alert alert-info flash" role="alert">
        {{ session('message') }}
    </div>
    @endif
</div>
