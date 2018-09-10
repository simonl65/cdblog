@if(count($errors))
<div class="alert alert-danger pb-0">
    <p class="lead">Ah! You need to fix the following:</p>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
