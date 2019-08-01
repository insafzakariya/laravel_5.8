<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>{{$page_header}}</h4>
                    <span>{{$description}}</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
       