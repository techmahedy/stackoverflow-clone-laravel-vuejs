@includeIf('forum.layout.header')

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 breadcrumbf">
                <a href="#">Create New account</a> 
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">

               <register-component></register-component>

               </div>
               
            @includeIf('forum.layout.sidebar')
        </div>
    </div>
</section>
@includeIf('forum.layout.footer')


