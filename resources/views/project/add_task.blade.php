@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Task') }}</div>
                    <div class="card-body">
                        <form action="{{ route('store.task', $project->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="projectName">Name:</label>
                                <input type="text" class="form-control" id="projectName" name="projectName"
                                value="{{ $project->name }}" readonly
                                >
                            </div>
                            <div class="form-group">
                                <label for="name">Task Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <input type="text" class="form-control" id="description" name="description" required>
                            </div>
                            <div class="form-group">
                                <label for="start_date">Due date:</label>
                                <input type="date" class="form-control" id="due_date" name="due_date" required>
                            </div>
                            <div class="form-group">
                                <label for="status">Status:</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footerScript')
    @if(Session::has('success'))
        <script type="text/javascript">
            $(function() {
                toastr.success("{{ Session::get('success') }}");
            })
        </script>
    @endif
    @if(Session::has('failed'))
        <script type="text/javascript">
            $(function() {
                toastr.error("{{ Session::get('failed') }}");
            })
        </script>
    @endif
@stop
