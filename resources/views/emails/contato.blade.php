<x-mail::message>
# Mensagem de {{ $data['name'] }}

<x-mail::panel>
  Lembre-se de responder o cliente o mais rápido possível
  Att: À direção
</x-mail::panel>

E-mail: {{ $data['email'] }}
Mensagem: {{ $data['message'] }}

<x-mail::button :url="'https://appcoder.com.br'">
Acesse o site clicando aqui
</x-mail::button>

{{ date('d/m/Y') }}<br>
{{ config('app.name') }}
</x-mail::message>
