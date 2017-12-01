@component('mail::message')
# Your Account has been active

Admin from Dokter Kompi app has approve your request, 
<br> 

@component('mail::button', ['url' => 'https://concerns.azurewebsites.net/login'])
Log in here
@endcomponent

Thanks,<br>

@endcomponent
