<form method="POST" action="{{ route('profile.update') }}">
    @csrf
    @method('PATCH')

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $user->name }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" value="{{ $user->email }}" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Save Changes</button>
</form>
