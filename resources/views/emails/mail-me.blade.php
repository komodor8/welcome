@component('mail::message')
# {{ $contactInformation->name }} vous a envoyé un email.
Voici ces informations.


<div style="width:100%;height:0;padding-bottom:120%;position:relative;"><iframe src="https://giphy.com/embed/87xihBthJ1DkA" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/instead-87xihBthJ1DkA">via GIPHY</a></p>


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
