<div>
    <form wire:submit.prevent="store">
        <div class="form-group">
            <label for="title">Title</label>
                <input wire:model="title" type="text"
                    class="form-control @error('title') is-invalid @enderror" autofocus>
                @error('title')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
      
                <button type="submit" class="btn btn-primary mt-2">
                    Create
                </button>
        
    </form>
    <table class="table mt-5">
        <thead>
            <tr>
                <th>Title</th>
                <th>Slug</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
            <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->slug }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>