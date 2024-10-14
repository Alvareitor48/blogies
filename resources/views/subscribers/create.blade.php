<x-layout meta-title="Subscribe a new subscriber" meta-description="Form to subscribe a new subscriber">
    <h1>{{ __('Subscribe a new subscriber') }}</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label>
            {{ __('Title') }} <br />
            <input type="text" name="title" value="{{ old('title') }}">
            @error('title')
            <br />
            <small style="color: red">{{ $message }}</small>
            @enderror
        </label>create a new Post
        <br />
        <label>
            {{ __('Body') }} <br />
            <textarea name="body">{{ old('body') }}</textarea>
            @error('body')
            <br />
            <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br />
        <button type="submit">{{ __('Send') }}</button>
        <br />
    </form>
    <a href="{{ route('posts.index') }}">{{ __('Back') }}</a>
</x-layout>
