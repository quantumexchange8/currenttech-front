{{-- @component('mail::message') --}}

<p><strong>Hello, {{ $user->email }}</strong></p>
<p>You are receiving this email because we received a subscription newsletter for our latest post. Thank you.</p>
{{-- <p>{{ $user->email }}</p>
<p>{{ $user->number }}</p>
<p>{{ $user->package }}</p>
<p>{{ $user->message }}</p> --}}


<br><br>
Regards,<br>
Current Tech Industries.
{{-- @endcomponent --}}