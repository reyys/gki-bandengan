<x-layout>
    <p>Course List</p>
    <a href="{{ route('courses.create') }}">Create Course</a>
    @foreach ($courses as $course)
        <p>This is course {{ $course->id }}</p>
    @endforeach
</x-layout>
