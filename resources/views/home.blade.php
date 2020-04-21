@includeIf('forum.layout.header')


            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-xs-12 col-md-8">
                            <div class="pull-left"><a href="#" class="prevnext"></a></div>
                            <div class="pull-left">
                       
                            </div>
                            <div class="pull-left"><a href="#" class="prevnext last"></a></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">

                           @foreach ($questions as $item)
                           <div class="post">
                            <div class="wrap-ut pull-left">
                                <div class="userinfo pull-left">
                                    <div class="avatar">
                                        <img src="img/profile/{{ $item->user->avatar }}" style="height:50px; width:50px"/>
                                        <div class="status green">&nbsp;</div>
                                    </div>
                        
                                    <div class="icons">
                                        <img src="http://forum.azyrusthemes.com/images/icon1.jpg" alt="" /><img src="http://forum.azyrusthemes.com/images/icon4.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="posttext pull-left">
                                    <h2><a href="{{ route('single',['username' => $item->user->username, 'slug' => $item->slug]) }}">{{ $item->title }}</a></h2>
                                    <p>{{ $item->description }}</p>
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
                                <div class="time"><i class="fa fa-clock-o"></i> {{ $item->created_at->diffForHumans() }}</div>                                    
                            </div>
                            <div class="clearfix"></div>
                        </div>
                           @endforeach

                        </div>
                      @includeIf('forum.layout.sidebar')
                    </div>
                </div>

            </section>
@includeIf('forum.layout.footer')