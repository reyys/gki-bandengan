<div>
    <form action="{{ route('schedules.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input placeholder="Input schedule title" name="title" required />
        @error('title')
            <span>{{ $message }}</span>
        @enderror
        <input placeholder="Input schedule topic" name="topic" required />
        @error('topic')
            <span>{{ $message }}</span>
        @enderror
        <button type="submit">Create new schedule</button>
    </form>
</div>
