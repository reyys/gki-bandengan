<div>
    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input name="title" placeholder="Title" value="{{ old('title', $course->title) }}" />
        @error('title')
            <p>{{ $message }}</p>
        @enderror
        <input name="description" placeholder="Description" value="{{ old('title', $course->title) }}" />
        @error('description')
            <p>{{ $message }}</p>
        @enderror
        <button type="submit">Submit</button>
    </form>
</div>
