<form method="post" action="/update">

    <div class="mb-3">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" value="{{ $user->id }}">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="" name="name" value="{{ $user->name }}" id="name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="text" class="" value="{{ $user->email }}" name="email" id="email">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="" value="{{ $user->phone }}" name="phone" id="phone">
      </div>
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>