@component('mail::message')
# Welcome to Dokter Kompi :)

As soon admin from Dokter Kompi will activate your account by review manual your CV,  
You can contact our customer service for more info. 
<br>
So, Update your profile as soon as posible.
<br>  

@component('mail::button', ['url' => 'https://dokkom.herokuapp.com/login'])
Log in here
@endcomponent

Thanks,<br>
Dokter Kompi
@endcomponent