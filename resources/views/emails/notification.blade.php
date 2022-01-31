@component('mail::message')
# Your thing has been updated;

The body of your message.

@component('mail::button', ['url' => ''])
Check it out
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
