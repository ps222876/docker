<x-app-layout>
<div>
    <form method="POST" action="{{ route('calenders.store') }}">
        @csrf

        <div class="mb-3">
            <label for="date" class="form-label">Date:</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>

        <div class="mb-3">
            <label for="start_time" class="form-label">Start Time:</label>
            <input type="time" class="form-control" id="start_time" name="start_time" required>
        </div>

        <div class="mb-3">
            <label for="finish_time" class="form-label">Finish Time:</label>
            <input type="time" class="form-control" id="finish_time" name="finish_time" required>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">User:</label>
            <select class="form-control" id="user_id" name="user_id" required>
                <option value="" disabled selected>Select User</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</x-app-layout>