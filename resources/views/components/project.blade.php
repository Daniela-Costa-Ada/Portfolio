<section>
    @foreach ($projects as $project)
        <div class="project" id="projects">
            <p>{{ $project->title }}</p>
            <p>{{ $project->description }}</p>
            <p>{{ $project->url }}</p>
        </div>
    @endforeach
</section>
