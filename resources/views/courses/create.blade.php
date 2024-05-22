<div>
    <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input placeholder="Input course title" name="title" required />
        @error('title')
            <span>{{ $message }}</span>
        @enderror
        <input placeholder="Input course description" name="description" required />
        @error('description')
            <span>{{ $message }}</span>
        @enderror
        <input type="file" placeholder="Input course description" name="image" required />
        @error('image')
            <span>{{ $message }}</span>
        @enderror
        <button type="submit">Create new course</button>
    </form>
</div>
