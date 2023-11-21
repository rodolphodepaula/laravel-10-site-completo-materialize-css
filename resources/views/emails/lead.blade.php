<x-mail::message>
# Parabéns, você recebeu um novo lead

<p>
  Nome: {{ $data['name'] }} <br/>
  Tel: {{ $data['tel'] }} <br/>
  Email: {{ $data['email'] }} <br/>
</p>

<x-mail::button :url="'https://appcoder.com.br'">
Acesse o site clicando aqui
</x-mail::button>

{{ date('d/m/Y') }}<br>
{{ config('app.name') }}
</x-mail::message>
