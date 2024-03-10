@component('mail::message')
# Register Camp {{ $checkout->Camp->title }}

Hi {{ $checkout->User->name }}
<br>
Thank You for register on <b>{{ $checkout->Camp->title }}</b>, please see payment instructiom by click the button below.

@component('mail::button', ['url' => route('dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
