<!-- resources/views/conferences/form.blade.php -->

<form method="POST" action="{{ route('conferences.store') }}">
    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control" required></textarea>
    </div>

    <div class="form-group">
        <label for="place">Place</label>
        <input type="text" name="place" id="place" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="date">Date</label>
        <input type="date" name="date" id="date" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Create Conference</button>
</form>
