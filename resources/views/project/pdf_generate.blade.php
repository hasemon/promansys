<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Updated At</th>
    </tr>
    </thead>
    <tbody>
    @foreach($projects as $project)
        <tr>
            <td>{{ $project->id }}</td>
            <td>{{ $project->name }}</td>
            <td> {{ $project->description }} </td>
            <td>{{ $project->start_date }}</td>
            <td>{{ $project->end_date }}</td>
            <td>{{ $project->status }}</td>
            <td>{{ $project->created_at }}</td>
            <td>{{ $project->updated_at }}</td>

        </tr>
    @endforeach
    </tbody>
</table>
