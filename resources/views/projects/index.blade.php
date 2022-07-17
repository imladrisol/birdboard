<html>
<body>
    @forelse($projects as $project)
        <div>
            <a href="/projects/{{$project->id}}">{{$project->title}}</a>
        </div>
    @empty
        No projects yet.
    @endforelse
</body>
</html>
