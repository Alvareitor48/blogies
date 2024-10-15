<x-layout meta-title="Subscribe a new subscriber" meta-description="Form to subscribe a new subscriber">
    <h1>{{ __('Subscribe a new subscriber') }}</h1>

    <form method="POST" action="{{ route('subscribers.store') }}">
        @csrf
        <label>
            {{ __('Name') }} <br />
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')
            <br />
            <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br />
        <label>
            {{ __('Email') }} <br />
            <textarea name="email">{{ old('email') }}</textarea>
            @error('email')
            <br />
            <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br />
        <button type="submit">{{ __('Send') }}</button>
        <br />
    </form>
    <a href="{{ route('subscribers.index') }}">{{ __('Back') }}</a>
</x-layout>
