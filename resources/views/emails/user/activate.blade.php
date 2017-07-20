@component('mail::message')
# Your Account has been active

please log in

@component('mail::button', ['url' => 'https://concerns.azurewebsites.net/'])
Log in
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
