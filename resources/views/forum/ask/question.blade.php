@includeIf('forum.layout.header')
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 breadcrumbf">
                <a href="#">Borderlands 2</a> <span class="diviver">&gt;</span> <a href="#">General Discussion</a> <span class="diviver">&gt;</span> <a href="#">New Topic</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                
                <ask-component></ask-component>

                <div class="row similarposts">
                    <div class="col-lg-10"><i class="fa fa-info-circle"></i> <p>Similar Posts according to your <a href="#">Topic Title</a>.</p></div>
                    <div class="col-lg-2 loading"><i class="fa fa-spinner"></i></div>
                </div>

             <!-- POST -->
             <div class="post">
                <div class="wrap-ut pull-left">
                    <div class="userinfo pull-left">
                        <div class="avatar">
                        </div>
                    </div>
                    <div class="posttext pull-left">
                        <h2>10 Kids Unaware of Their Halloween Costume</h2>
                        <p>It's one thing to subject yourself to a Halloween costume mishap because, hey, that's your prerogative.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="postinfo pull-left">
                    <div class="comments">
                        <div class="commentbg">
                            560
                            <div class="mark"></div>
                        </div>

                    </div>
                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                    <div class="time"><i class="fa fa-clock-o"></i> 24 min</div>                                    
                </div>
                <div class="clearfix"></div>
            </div><!-- POST -->


            </div>
            @includeIf('forum.layout.sidebar')
        </div>
    </div>
</section>
@includeIf('forum.layout.footer')