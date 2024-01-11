<div>
    <form action="{{route('students.store')}}" method="POST"> @csrf
        <div>Name:<input type="text" name="name" ></div>
        <div>Password:<input type="password" name="pwd" ></div>
        <div><input type="submit" value="Submit"  ></div>
    </form>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif
</div>
