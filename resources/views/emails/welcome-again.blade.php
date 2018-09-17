@component('mail::message')
# Welcome

Thanks for registering at [blogger](http://blogger/posts).

@component('mail::button', ['url' => 'http://blogger/posts'])
Go there
@endcomponent

@component('mail::table')
    |Name|Email|
    |:----|:-----|
    |Simon Lincoln|test@test.com|
    |Jane Doe|jane@test.com|
@endcomponent

@component('mail::panel')
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos eligendi hic dicta alias cupiditate, laborum maiores beatae laudantium veniam officia.
@endcomponent

@component('mail::promotion')
    This is a promotion?
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
