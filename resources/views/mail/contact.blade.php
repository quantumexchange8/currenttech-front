@component('mail::message')

<p>{{ $user->name }}</p>
<p>{{ $user->email }}</p>
<p>{{ $user->number }}</p>
<p>{{ $user->package }}</p>
<p>{{ $user->message }}</p>

<br><br>
From,<br>
{{ config('app.name') }}
@endcomponent