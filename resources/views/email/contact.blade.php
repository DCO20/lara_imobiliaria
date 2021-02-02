@component('mail::message')
Olá você recebeu um novo contato a partir do seu site!

Nome: <b>{{ $name}}</b>

Email: <b>{{ $email}}</b>

Mensagem: 

@component('mail::panel')
    {{ $message}}
@endcomponent

@endcomponent
