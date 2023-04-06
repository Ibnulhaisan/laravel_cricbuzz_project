@if(session('danger'))
    {{ session('danger') }}
@endif
<form action="{{route('login')}}" method="post">
    @csrf
    <input type="text" placeholder="email" name="email"> <br>
    @error('email')
    @if(is_string($message))
        <div>{{ $message }}</div>
    @endif
    @enderror
    <input type="text" placeholder="password" name="password"> <br>
    @error('password')
    @if(is_string($message))
        <div>{{ $message }}</div>
    @endif
    @enderror
    <input type="submit">
</form>
