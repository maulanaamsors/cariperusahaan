@component('mail::message')
# Your Account has been active

Admin from concerns app has approve your request, 
<br>
you can create your company profile right now. 

@component('mail::button', ['url' => 'https://concerns.azurewebsites.net/'])
Log in here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
