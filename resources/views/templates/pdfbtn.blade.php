<div class="row" style="justify-content: space-between;">
    <div class="col">
        <a href="{{route('resume.download.pdf')}}" class="btn btn-outline-danger mb-2">
            <i class="far fa-file-pdf"></i>
            <span class="d-xs-none">DownloadPDF</span>
        </a>
    </div>
    <div class="col text-right">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="d-xs-none">Select template</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ route('resume.show',1) }}">Template 1</a>
                <a class="dropdown-item" href="{{ route('resume.show',2) }}">Template 2</a>
            </div>
        </div>
    </div>
</div>