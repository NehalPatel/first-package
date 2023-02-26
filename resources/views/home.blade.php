<x-first-package::app-layout>
    <h1>Laravel Testing Package</h1>
    <h3>{{ trans('first-package::message.welcome') }}</h3>
    <p>{{ $message }}</p>
    <p>JSON Translation: {{ __('Salutation') }}</p>
</x-first-package::app-layout>