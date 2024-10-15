<x-layout meta-title="Subscribers" meta-description="Site that show subscribers">

    <h1>Subscribers</h1>
    <a href="{{ route('subscribers.create') }}">Subscribe a new subscriber</a>
    @foreach($subscribers as $subscriber)
        <h2>{{ $subscriber->name }}</h2>
        <h3>{{$subscriber->email}}</h3>
        <br>
    @endforeach
</x-layout>
