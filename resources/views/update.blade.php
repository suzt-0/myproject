<div>
    <form action="{{route('students.update', $student->id)}}" method="POST"> @csrf
        @method('put')
        <div>Name:<input type="text" name="name" value="{{$student->name}}"></div>
        <div>Password:<input type="password" name="pwd" value="{{$student->pwd}}"></div>
        <div><input type="submit" value="Submit"  ></div>
    </form>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif
</div>
