<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @isset($students[0]->name)
        @foreach ($students as $student)
            <p>Name: {{ $student->name }}</p>
            <p>Password: {{$student->pwd}}</p>
            <p>{{$student->id}}</p>
            <p>{{$student->created_at}}</p>
            <form action="{{ route('students.destroy', $student->id)}}" method="POST"> @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>

            <form action="{{ route('students.edit', $student->id)}}" method="get"> @csrf
                <input type="submit" value="Update">
            </form>
            <hr>
        @endforeach
    @else 
        <p>Xain data</p>
    @endisset
</body>
</html>