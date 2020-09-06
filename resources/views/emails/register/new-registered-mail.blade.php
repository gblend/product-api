@component('mail::message')
# Welcome to ProductAPI

Thanks for registering on our platform. Please verify your email to login in to your account.
Click the link below to verify your email address.

@component('mail::button', ['url' => $data])
Verify Now
@endcomponent
<br>
You can as well copy this link and paste in your browser: {{$data}}

<br>
Thanks,<br>

If you did not initiate any registration on ProductAPI, kindly ignore this message.
{{ config('app.name') ?? 'ProductAPI' }}
@endcomponent
