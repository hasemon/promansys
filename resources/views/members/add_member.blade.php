<div class="col-md-3">
    <div class="card">
        <div class="card-header">{{ __('Add Member') }}</div>
        <div class="card-body">
            <form class="p-2" method="POST" action="{{route('store.member', ['id' => $project->id])}}">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control" name="name" required autofocus
                           placeholder="Member Name">
                </div>
                <div class="form-group row">
                    <label for="details" class="col-md-4 col-form-label text-md-right">{{ __('Details') }}</label>
                    <textarea id="details" class="form-control" name="details" required autofocus placeholder="Member Details"></textarea>
                </div>
                <div class="form-group row">
                    <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                    <select class="form-control" id="status" name="status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-3 mt-3">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Add Member') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
