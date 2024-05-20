<div>
    <form action="/courses" method="POST">
        @csrf
        <input placeholder="Input course title" name="title" />
        @error('title')
            <span>{{ $message }}</span>
        @enderror
        <input placeholder="Input course description" name="description" />
        @error('description')
            <span>{{ $message }}</span>
        @enderror
        <button type="submit">Create new course</button>
    </form>
</div>
