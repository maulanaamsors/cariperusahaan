@component('mail::message')
# Your Account has been Deactive :(

Admin from Dokter Kompi app has Deactive your account, 
You can contact our customer service for more info. 
<br>
Your account will be collapse from user search. 
after admin from dokter kompi activate your account  

@component('mail::button', ['url' => 'https://dokkom.herokuapp.com/login'])
Log in here
@endcomponent

Thanks,<br>
Dokter Kompi
@endcomponent
