@component('mail::message')
# Your Account has been active

Your password : {{Session::get('password')}}
<br>
you can login right now. 

@component('mail::button', ['url' => 'https://concerns.azurewebsites.net/login'])
Log in here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
