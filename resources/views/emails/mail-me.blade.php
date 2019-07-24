@component('mail::message')
# {{ $contactInformation->name }} vous a envoyé un email.
Voici ces informations.

<br>
name: {{ $contactInformation->name }}
<br>
email: {{ $contactInformation->email }}
<br><br>


description: {{ $contactInformation->description }}

@component('mail::button', ['url' => 'farid-lkhaldouni.com/'])
Aller sur le site
@endcomponent

@endcomponent
