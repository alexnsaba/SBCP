@component('mail::message')
# You have some reminders to follow up. Below are their details:

@component('mail::table')
{{--|Reminder|Lead name|Phone|--}}
|Reminder|Email|

{{--|:-------|:--------|:----|--}}
|:-------|:--------|

@foreach($reminders as $reminder)
{{--|{{$reminder['reminder']}}|{{$reminder['lead']['name']}}|{{$reminder['lead']['phone']}}--}}
|{{$reminder['reminder']}}|{{$reminder['email']}}|

@endforeach
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
