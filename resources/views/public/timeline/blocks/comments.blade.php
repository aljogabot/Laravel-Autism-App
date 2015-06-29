<div class="blog-comment mt30">
    <div class="heading mb30">
        <h4>Comments</h4>
    </div>
    @if( Auth::check() )
        <div class="panel-default no-margin mb15">
            <form action="{{ url( 'comment/create' ) }}" method="POST" name="create-comment" id="comment-{{ $post->id }}">
                <div id="alert-message-box" class="alert"></div>
                <div>
                    <textarea style="margin-bottom:10px;" rows="5" placeholder="Type in your comment" name="comment" class="form-control counted"></textarea>
                    <h6 id="counter" class="pull-right">320 characters remaining</h6>
                    <input type="hidden" name="post_id" value="{{ $post->id }}" />
                </div>
                <button type="submit" class="btn btn-rw btn-info">Leave Comment</button>
            </form>
        </div>
    @else
        <div class="panel-default no-margin mb15">
            <p class="text-primary">You need to sign in to comment.</p>
        </div>
    @endif
    <ul class="comments">
        @foreach( $post->comments()->parentOnly()->get() as $comment )
            <li class="clearfix">
                <img alt="" class="avatar" src="http://bootdey.com/img/Content/user_1.jpg">
                <div class="post-comments">
                    <p class="meta">
                        {{ $comment->created_at->diffForHumans() }}
                        <a href="javascript:void(0);">John Doe</a> says :
                        <i class="pull-right">
                            <a href="javascript:void(0);" class="reply-to-comment"><small>Reply</small></a>
                        </i>
                    </p>
                    <p>
                        {{ $comment->comment }}
                    </p>
                </div>
                <ul class="comments">
                    @foreach( $comment->children as $child_comment )
                        <li class="clearfix">
                            <img alt="" class="avatar" src="http://bootdey.com/img/Content/user_3.jpg">
                            <div class="post-comments">
                                <p class="meta">
                                    {{ $child_comment->created_at->diffForHumans() }}
                                    <a href="javascript:void(0);">John Doe</a> says :
                                    <i class="pull-right">
                                        <a href="javascript:void(0);" class="reply-to-comment"><small>Reply</small></a>
                                    </i>
                                </p>
                                <p>
                                    {{ $child_comment->comment }}
                                </p>
                          </div>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
        <!--<li class="clearfix">
          <img alt="" class="avatar" src="http://bootdey.com/img/Content/user_1.jpg">
          <div class="post-comments">
              <p class="meta">Dec 18, 2014 <a href="#">John Doe</a> says : <i class="pull-right"><a href="#"><small>Reply</small></a></i></p>
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.xercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate tiam a sapien odio, sit amet.
              </p>
          </div>
        </li>
        <li class="clearfix">
          <img alt="" class="avatar" src="http://bootdey.com/img/Content/user_2.jpg">
          <div class="post-comments">
              <p class="meta">Dec 19, 2014 <a href="#">Jane Doe</a> says : <i class="pull-right"><a href="#"><small>Reply</small></a></i></p>
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Etiam a sapien odio, sit amet
              </p>
          </div>

          <ul class="comments">
              <li class="clearfix">
                  <img alt="" class="avatar" src="http://bootdey.com/img/Content/user_3.jpg">
                  <div class="post-comments">
                      <p class="meta">Dec 20, 2014 <a href="#">Steve Doe</a> says : <i class="pull-right"><a href="#"><small>Reply</small></a></i></p>
                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit.Integer vehicula sed justo ac dapibus. In sodales nunc non varius accumsan.Etiam a sapien odio, sit amet
                      </p>
                  </div>
              </li>
          </ul>
        </li>-->
    </ul>
</div>