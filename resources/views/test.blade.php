{{-- {{ cookie('username') }} --}}
{{ Cookie::get('username') }}
<form action="{{ url('/test') }}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="username_1" id="">
    <button type="submit">submit</button>
</form>