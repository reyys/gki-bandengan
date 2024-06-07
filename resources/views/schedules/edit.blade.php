<div>
    <form action="{{ route('schedules.update', $schedule->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input name="title" placeholder="Title" value="{{ old('title', $schedule->title) }}" />
        @error('title')
            <p>{{ $message }}</p>
        @enderror
        <input name="topic" placeholder="Topic" value="{{ old('topic', $schedule->title) }}" />
        @error('description')
            <p>{{ $message }}</p>
        @enderror
        <button type="submit">Submit</button>
    </form>
</div>
