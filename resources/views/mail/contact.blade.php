{{-- @component --}}

<p><b>Full Name: </b>{{ $user->full_name }}</p>
<p><b>Email Address: </b>{{ $user->email }}</p>
<p><b>Contact Number: </b>{{ $user->contact_number }}</p>
<p>{{ $user->pos_system }}</p>
<p>{{ $user->chip }}</p>
<p>{{ $user->web_app }}</p>
<p>{{ $user->web_3 }}</p>
<p>{{ $user->ctrader_type }}</p>
<p>{{ $user->career_type }}</p>
<p>{{ $user->intern }}</p>

<br><br>
{{-- From,<br>
{{ config('app.name') }} --}}
{{-- @endcomponent --}}

