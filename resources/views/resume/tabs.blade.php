<div class="row no-gutters resume-tab">
    <div class="col">
        <a href="{{route('resume.get.basics')}}"
            class="btn btn-outline-success btn-block text-capitalize p-3 {{ request()->route()->getName()=='resume.get.basics' ? 'active' : 'disabled' }}">
            <i class="far fa-id-card d-block mx-auto"></i>personal info
        </a>
    </div>
    <div class="col">
        <a href="{{route('resume.get.works')}}"
            class="btn btn-outline-success btn-block text-capitalize p-3 {{ request()->route()->getName()=='resume.get.works' ? 'active' : 'disabled' }}">
            <i class="fas fa-briefcase d-block mx-auto"></i>works
        </a>
    </div>
    <div class="col">
        <a href="{{route('resume.get.educations')}}"
            class="btn btn-outline-success btn-block text-capitalize p-3 {{ request()->route()->getName()=='resume.get.educations' ? 'active' : 'disabled' }}">
            <i class="fas fa-graduation-cap d-block mx-auto"></i>educations
        </a>
    </div>
    <div class="col">
        <a href="{{route('resume.get.skills')}}"
            class="btn btn-outline-success btn-block text-capitalize p-3 {{ request()->route()->getName()=='resume.get.skills' ? 'active' : 'disabled' }}">
            <i class="fas fa-user-cog d-block mx-auto"></i>skills
        </a>
    </div>
    <div class="col">
        <a href="{{route('resume.get.references')}}"
            class="btn btn-outline-success btn-block text-capitalize p-3 {{ request()->route()->getName()=='resume.get.references' ? 'active' : 'disabled' }}">
            <i class="far fa-comment-dots d-block mx-auto"></i>references
        </a>
    </div>
    <div class="col">
        <a href="{{route('resume.get.summary')}}"
            class="btn btn-outline-success btn-block text-capitalize p-3 {{ request()->route()->getName()=='resume.get.summary' ? 'active' : 'disabled' }}">
            <i class="far fa-file-alt d-block mx-auto "></i>summary
        </a>
    </div>
</div>
<hr>