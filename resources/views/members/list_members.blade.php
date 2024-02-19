@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="row justify-content-center mb-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Project') }}</div>
                <div class="card-body">
                    <p class="fw-bold fs-5">
                        Project ID: {{ $project->id }}
                    </p>
                    <p class="fw-bold fs-6">
                        Project Name: {{ $project->name }}
                    </p>
                </div>
            </div>
        </div>
        </div>
        <div class="row justify-content-center">
            @include('members.add_member')
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Members') }}</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Member ID</th>
                                <th>Member Name</th>
                                <th>Member Details</th>
                                <th>Member Status</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($members as $member)
                                <tr>
                                    <td>{{ $member->id }}</td>
                                    <td>{{ $member->name }}</td>
                                    <td> {{ $member->details }} </td>
                                    <td> {{ $member->status }} </td>
                                    <td> {{ $member->created_at }} </td>
                                    <td> {{ $member->updated_at }} </td>
                                    <td>
                                        <form method="POST" action="" class="d-inline me-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footerScript')
    @if(Session::has('success'))
        <script type="text/javascript">
            $(function () {
                toastr.success("{{ Session::get('success') }}");
            })
        </script>
    @endif
    @if(Session::has('failed'))
        <script type="text/javascript">
            $(function () {
                toastr.error("{{ Session::get('failed') }}");
            })
        </script>
    @endif
@stop
