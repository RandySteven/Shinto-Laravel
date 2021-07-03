@component('mail::message')
# Introduction

<h1>{{ $diary->title }}</h1>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent
Write by . {{ $diary->user->name }}

{!! nl2br($diary->body) !!}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
