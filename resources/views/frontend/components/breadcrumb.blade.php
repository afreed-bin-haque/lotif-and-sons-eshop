<div class="pagetitle">
    <h1>{{ str_replace(array("/","-",".","_") , " ",strtoupper(request()->route()->getName())) }}</h1>
    <nav>
        <ol class="breadcrumb">
            <li >{{ config('siteConfig.app.name') }} &#128073; {{ request()->path() }}</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
