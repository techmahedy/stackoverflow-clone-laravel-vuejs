@includeIf('forum.layout.header')


<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 breadcrumbf">
                <a href="#">Borderlands 2</a> <span class="diviver">&gt;</span> <a href="#">General Discussion</a> <span class="diviver">&gt;</span> <a href="#">Topic Details</a>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">

                <!-- POST -->
                <div class="post beforepagination">
                    <div class="topwrap">
                        <div class="userinfo pull-left">
                            <div class="avatar">
                                <img src="/img/profile/{{ $slug->user->avatar }}" style="height:50px; width:50px"/>
                                <div class="status green">&nbsp;</div>
                            </div>
                        </div>
                        <div class="posttext pull-left">
                            <h2>{{ $slug->title }}</h2>
                            <p>{{ $slug->description }}</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>                              
                    <div class="postinfobot">

                        <dislike-component :ques_id="{{ $slug->id }}"></dislike-component>

                        <div class="prev pull-left">                                        
                            <a href="#"><i class="fa fa-reply"></i></a>
                        </div>

                        <div class="posted pull-left"><i class="fa fa-clock-o"></i> Posted on : {{ $slug->created_at->diffForHumans() }} </div>

                        <div class="next pull-right">                                        
                            <a href="#"><i class="fa fa-share"></i></a>

                            <a href="#"><i class="fa fa-flag"></i></a>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div><!-- POST -->

  
<!--Reply goes here --!>


                <!-- POST -->
                <div class="post">
                    <form action="#" class="form" method="post">
                        <div class="topwrap">
                            <div class="userinfo pull-left">
                                <div class="avatar">
                                    <img src="/img/profile/{{ $slug->user->avatar }}" style="height:50px; width:50px"/>
                                    <div class="status red">&nbsp;</div>
                                </div>
                            </div>
                            <div class="posttext pull-left">
                                <div class="textwraper">
                                    <div class="postreply">Post a Reply</div>
                                    <textarea name="reply" id="reply" placeholder="Type your message here"></textarea>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>                              
                        <div class="postinfobot">

                            <div class="notechbox pull-left">
                                <input type="checkbox" name="note" id="note" class="form-control" />
                            </div>

                            <div class="pull-left">
                                <label for="note"> Email me when some one post a reply</label>
                            </div>

                            <div class="pull-right postreply">
                                <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                                <div class="pull-left"><button type="submit" class="btn btn-primary">Post Reply</button></div>
                                <div class="clearfix"></div>
                            </div>


                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div><!-- POST -->


            </div>
        

            @includeIf('forum.layout.sidebar')
        </div>
    </div>
</section>
@includeIf('forum.layout.footer')
