@includeIf('forum.layout.header')

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 breadcrumbf">
                <a href="#">Create New account</a> 
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <li>{{ session('message') }}</li>
                </div>
                @endif
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
               
                <login-component></login-component>
              
               </div>
               
            @includeIf('forum.layout.sidebar')
        </div>
    </div>
</section>
@includeIf('forum.layout.footer')