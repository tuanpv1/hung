<?php
if (isset($new) && !empty($new)) {
    /** @var $new \common\models\News */
    ?>

    <div class="motopress-wrapper content-holder clearfix">
        <div class="container">
            <div class="row">
                <div class="span12" data-motopress-wrapper-type="content">
                    <div class="row">
                        <div class="span12">
                            <section class="title-section">
                                <h1 class="title-header">
                                    <?= $new->title ?> </h1>
                                <!-- BEGIN BREADCRUMBS-->
                                <ul class="breadcrumb breadcrumb__t">
                                    <li><a href="<?= \yii\helpers\Url::toRoute(['site/index']) ?>">Home</a></li>
                                    <li class="divider"></li>
                                    <li><a href="">Web
                                            design</a></li>
                                    <li class="divider"></li>
                                    <li class="active"><?= $new->title ?> </li>
                                </ul>            <!-- END BREADCRUMBS -->
                            </section><!-- .title-section -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="span8 right right" id="content" data-motopress-type="loop"
                             data-motopress-loop-file="">
                            <article id="post-67"
                                     class="post-67 post type-post status-publish format-standard has-post-thumbnail hentry category-webdesign tag-lorem tag-sit-amet post__holder cat-5-id">
                                <figure class="featured-thumbnail thumbnail large"><img src="//"
                                                                                        data-src="https://livedemo00.template-help.com/wordpress_53761/wp-content/uploads/2015/04/post-4-770x371.jpg"
                                                                                        alt="Etiam dictum egestas">
                                </figure>
                                <!-- Post Content -->
                                <div class="post_content">
                                    <h3>Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis
                                        dignissim, pulvinar ac, lorem.</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum
                                        molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit
                                        varius mi. Cum sociis natoque penatibus et magnis dis parturient montes,
                                        nascetur
                                        ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida
                                        at,
                                        cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies
                                        pharetra
                                        magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit
                                        amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet
                                        aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend,
                                        elit.
                                        Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer
                                        rutrum
                                        ante eu lacus.</p>
                                    <h3>Praesent justo dolor, lobortis quis.</h3>
                                    <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum
                                        sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                        mus.
                                        Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus
                                        nec,
                                        luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna.
                                        Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet,
                                        consectetuer adipiscing elit.</p>
                                    <div class="clear"></div>
                                </div>
                                <!-- //Post Content -->

                                <!-- Post Meta -->
                                <div class="post_meta meta_type_line">
                                    <div class="post_meta_unite clearfix">
                                        <div class="meta_group clearfix">
                                            <div class="post_category">
                                                <i class="icon-bookmark"></i>
                                                <a href="https://livedemo00.template-help.com/wordpress_53761/category/webdesign/"
                                                   rel="category tag">Web design</a></div>
                                            <div class="post_date">
                                                <i class="icon-calendar"></i>
                                                <time datetime="2013-02-14T20:26:57">February 14, 2013</time>
                                            </div>
                                            <div class="post_author">
                                                <i class="icon-user"></i>
                                                <a href="https://livedemo00.template-help.com/wordpress_53761/author/admin/"
                                                   title="Posts by admin" rel="author">admin</a></div>
                                            <div class="post_comment">
                                                <i class="icon-comments"></i>
                                                <a href="https://livedemo00.template-help.com/wordpress_53761/webdesign/etiam-dictum-egestas/#comments"
                                                   class="comments-link" title="Comment on Etiam dictum egestas">3
                                                    comments</a></div>
                                        </div>
                                        <div class="meta_group clearfix"></div>
                                        <div class="meta_group clearfix"></div>
                                    </div>
                                </div><!--// Post Meta -->
                            </article><!-- .share-buttons -->

                            <!-- Facebook Like Button -->
                            <script>(function (d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) {
                                        return;
                                    }
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));
                            </script>

                            <!-- Google+ Button -->
                            <script type="text/javascript">
                                (function () {
                                    var po = document.createElement('script');
                                    po.type = 'text/javascript';
                                    po.async = true;
                                    po.src = '//apis.google.com/js/plusone.js';
                                    var s = document.getElementsByTagName('script')[0];
                                    s.parentNode.insertBefore(po, s);
                                })();
                            </script>
                            <ul class="share-buttons unstyled clearfix">
                                <li class="twitter">
                                    <a href="//twitter.com/share" class="twitter-share-button">Tweet this article</a>
                                    <script>!function (d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                            if (!d.getElementById(id)) {
                                                js = d.createElement(s);
                                                js.id = id;
                                                js.src = p + '://platform.twitter.com/widgets.js';
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }
                                        }(document, 'script', 'twitter-wjs');</script>
                                </li>
                                <li class="facebook">
                                    <div id="fb-root"></div>
                                    <div class="fb-like"
                                         data-href="https://livedemo00.template-help.com/wordpress_53761/webdesign/etiam-dictum-egestas/"
                                         data-send="false" data-layout="button_count" data-width="100"
                                         data-show-faces="false" data-font="arial"></div>
                                </li>
                                <li class="google">
                                    <div class="g-plusone" data-size="medium"
                                         data-href="https://livedemo00.template-help.com/wordpress_53761/webdesign/etiam-dictum-egestas/"></div>
                                </li>
                                <li class="pinterest">
                                    <a href="javascript:void((function(){var e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)})());"><img
                                            src='//assets.pinterest.com/images/PinExt.png' alt=""/></a>
                                </li>
                            </ul><!-- //.share-buttons -->

                            <div class="post-author clearfix">
                                <h3 class="post-author_h">Written by <a
                                        href="https://livedemo00.template-help.com/wordpress_53761/author/admin/"
                                        title="Posts by admin" rel="author">admin</a></h3>
                                <p class="post-author_gravatar"><img alt=''
                                                                     src='https://1.gravatar.com/avatar/b263802e2004e058851acabb4111135e?s=80&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D80&amp;r=G'
                                                                     class='avatar avatar-80 photo' height='80'
                                                                     width='80'/>
                                </p>
                                <div class="post-author_desc">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum
                                    molestie
                                    lacus. Aenean non ummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi.
                                    Cum
                                    sociis sere natoque penati bus et magnis dis. Lorem ipsum dolor. Lorem ipsum dolor
                                    sit
                                    amet, consectetuer adipiscing elit lorem. Praesent vestibulum molestie lacus. Aenean
                                    nonummy hendrerit mauris.
                                    <div class="post-author_link">
                                        <p>View all posts by: <a
                                                href="https://livedemo00.template-help.com/wordpress_53761/author/admin/"
                                                title="Posts by admin" rel="author">admin</a></p>
                                    </div>
                                </div>
                            </div><!--.post-author-->

                            <div class="related-posts"><h3 class="related-posts_h">Related Posts</h3>
                                <ul class="related-posts_list clearfix">
                                    <li class="related-posts_item">
                                        <figure class="thumbnail featured-thumbnail"><a
                                                href="https://livedemo00.template-help.com/wordpress_53761/coding/aliquam-erat-volutpat/"
                                                title="Aliquam erat volutpat"><img
                                                    data-src="https://livedemo00.template-help.com/wordpress_53761/wp-content/uploads/2015/04/post-1-170x174.jpg"
                                                    alt="Aliquam erat volutpat"/></a></figure>
                                        <a href="https://livedemo00.template-help.com/wordpress_53761/coding/aliquam-erat-volutpat/">Aliquam
                                            erat volutpat</a></li>
                                    <li class="related-posts_item">
                                        <figure class="thumbnail featured-thumbnail"><a
                                                href="https://livedemo00.template-help.com/wordpress_53761/css3/phasellus-fringilla/"
                                                title="Phasellus fringilla"><img
                                                    data-src="https://livedemo00.template-help.com/wordpress_53761/wp-content/uploads/2015/04/post-5-170x174.jpg"
                                                    alt="Phasellus fringilla"/></a></figure>
                                        <a href="https://livedemo00.template-help.com/wordpress_53761/css3/phasellus-fringilla/">Phasellus
                                            fringilla</a></li>
                                    <li class="related-posts_item">
                                        <figure class="thumbnail featured-thumbnail"><a
                                                href="https://livedemo00.template-help.com/wordpress_53761/css3/vivamus-vel-sem-at/"
                                                title="Vivamus vel sem at"><img
                                                    data-src="https://livedemo00.template-help.com/wordpress_53761/wp-content/uploads/2015/04/post-1-170x174.jpg"
                                                    alt="Vivamus vel sem at"/></a></figure>
                                        <a href="https://livedemo00.template-help.com/wordpress_53761/css3/vivamus-vel-sem-at/">Vivamus
                                            vel sem at</a></li>
                                    <li class="related-posts_item">
                                        <figure class="thumbnail featured-thumbnail"><a
                                                href="https://livedemo00.template-help.com/wordpress_53761/html5/etiam-commodo-convallis/"
                                                title="Etiam commodo convallis"><img
                                                    data-src="https://livedemo00.template-help.com/wordpress_53761/wp-content/uploads/2015/04/post-2-170x174.jpg"
                                                    alt="Etiam commodo convallis"/></a></figure>
                                        <a href="https://livedemo00.template-help.com/wordpress_53761/html5/etiam-commodo-convallis/">Etiam
                                            commodo convallis</a></li>
                                </ul>
                            </div><!-- BEGIN Comments -->
                            <div id="comments" class="comment-holder">
                                <h3 class="comments-h">3 Responses</h3>
                                <div class="pagination">

                                </div>
                                <ol class="comment-list clearfix">
                                    <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 clearfix"
                                        id="li-comment-13">
                                        <div id="comment-13" class="comment-body clearfix">
                                            <div class="wrapper">
                                                <div class="comment-author vcard">
                                                    <img alt=''
                                                         src='https://1.gravatar.com/avatar/53444f91e698c0c7caa2dbc3bdbf93fc?s=80&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D80&amp;r=G'
                                                         class='avatar avatar-80 photo' height='80' width='80'/> <span
                                                        class="author">admin</span></div>
                                                <div class="extra-wrap">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent
                                                    vestibulum molestie lacus. Aenean non ummy hendrerit mauris.
                                                    Phasellus
                                                    porta. Fusce suscipit varius mi. Cum sociis sere natoque penati bus
                                                    et
                                                    magnis dis. Lorem ipsum dolor. Lorem ipsum dolor sit amet,
                                                    consectetuer
                                                    adipiscing elit lorem. Praesent vestibulum molestie lacus. Aenean
                                                    nonummy hendrerit mauris.
                                                    <div class="extra-wrap comment-meta-wrap">
                                                        <div class="reply">
                                                            <a class='comment-reply-link'
                                                               href='/wordpress_53761/webdesign/etiam-dictum-egestas/?replytocom=13#respond'
                                                               onclick='return addComment.moveForm( "comment-13", "13", "respond", "67" )'
                                                               aria-label='Reply to admin'>Reply</a></div>
                                                        <div class="comment-meta commentmetadata">May 26, 2014</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li class="comment byuser comment-author-admin bypostauthor odd alt depth-2 clearfix"
                                                id="li-comment-14">
                                                <div id="comment-14" class="comment-body clearfix">
                                                    <div class="wrapper">
                                                        <div class="comment-author vcard">
                                                            <img alt=''
                                                                 src='https://1.gravatar.com/avatar/53444f91e698c0c7caa2dbc3bdbf93fc?s=80&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D80&amp;r=G'
                                                                 class='avatar avatar-80 photo' height='80' width='80'/>
                                                            <span class="author">admin</span></div>
                                                        <div class="extra-wrap">
                                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                            Praesent vestibulum molestie lacus. Aenean non ummy
                                                            hendrerit
                                                            mauris. Phasellus porta. Fusce suscipit varius mi. Cum
                                                            sociis
                                                            sere natoque penati bus et magnis dis. Lorem ipsum dolor.
                                                            Lorem
                                                            ipsum dolor sit amet, consectetuer adipiscing elit lorem.
                                                            Praesent vestibulum molestie lacus. Aenean nonummy hendrerit
                                                            mauris.
                                                            <div class="extra-wrap comment-meta-wrap">
                                                                <div class="reply">
                                                                    <a class='comment-reply-link'
                                                                       href='/wordpress_53761/webdesign/etiam-dictum-egestas/?replytocom=14#respond'
                                                                       onclick='return addComment.moveForm( "comment-14", "14", "respond", "67" )'
                                                                       aria-label='Reply to admin'>Reply</a></div>
                                                                <div class="comment-meta commentmetadata">May 26, 2014
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="children">
                                                    <li class="comment byuser comment-author-admin bypostauthor even depth-3 clearfix"
                                                        id="li-comment-15">
                                                        <div id="comment-15" class="comment-body clearfix">
                                                            <div class="wrapper">
                                                                <div class="comment-author vcard">
                                                                    <img alt=''
                                                                         src='https://1.gravatar.com/avatar/53444f91e698c0c7caa2dbc3bdbf93fc?s=80&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D80&amp;r=G'
                                                                         class='avatar avatar-80 photo' height='80'
                                                                         width='80'/> <span class="author">admin</span>
                                                                </div>
                                                                <div class="extra-wrap">
                                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                                    elit. Praesent vestibulum molestie lacus. Aenean non
                                                                    ummy hendrerit mauris. Phasellus porta. Fusce
                                                                    suscipit
                                                                    varius mi. Cum sociis sere natoque penati bus et
                                                                    magnis
                                                                    dis. Lorem ipsum dolor. Lorem ipsum dolor sit amet,
                                                                    consectetuer adipiscing elit lorem. Praesent
                                                                    vestibulum
                                                                    molestie lacus. Aenean nonummy hendrerit mauris.
                                                                    <div class="extra-wrap comment-meta-wrap">
                                                                        <div class="reply">
                                                                            <a class='comment-reply-link'
                                                                               href='/wordpress_53761/webdesign/etiam-dictum-egestas/?replytocom=15#respond'
                                                                               onclick='return addComment.moveForm( "comment-15", "15", "respond", "67" )'
                                                                               aria-label='Reply to admin'>Reply</a>
                                                                        </div>
                                                                        <div class="comment-meta commentmetadata">May
                                                                            26,
                                                                            2014
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li><!-- #comment-## -->
                                                </ul><!-- .children -->
                                            </li><!-- #comment-## -->
                                        </ul><!-- .children -->
                                    </li><!-- #comment-## -->
                                </ol>
                                <div class="pagination">

                                </div>
                            </div>


                            <div id="respond">

                                <h3>Leave a comment</h3>

                                <div class="cancel-comment-reply">
                                    <small><a rel="nofollow" id="cancel-comment-reply-link"
                                              href="/wordpress_53761/webdesign/etiam-dictum-egestas/#respond"
                                              style="display:none;">Click here to cancel reply.</a></small>
                                </div>


                                <form action="https://livedemo00.template-help.com/wordpress_53761/wp-comments-post.php"
                                      method="post" id="commentform">


                                    <p class="field"><input type="text" name="author" id="author" value="Name*"
                                                            onfocus="if(this.value=='Name*'){this.value=''}"
                                                            onblur="if(this.value==''){this.value='Name*'}" size="22"
                                                            tabindex="1" aria-required='true'/></p>

                                    <p class="field"><input type="text" name="email" id="email"
                                                            value="Email (will not be published)*"
                                                            onfocus="if(this.value=='Email (will not be published)*'){this.value=''}"
                                                            onblur="if(this.value==''){this.value='Email (will not be published)*'}"
                                                            size="22" tabindex="2" aria-required='true'/></p>

                                    <p class="field"><input type="text" name="url" id="url" value="Website"
                                                            onfocus="if(this.value=='Website'){this.value=''}"
                                                            onblur="if(this.value==''){this.value='Website'}" size="22"
                                                            tabindex="3"/></p>


                                    <!-- <p>You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: <code>&lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </code></small></p> -->

                                    <p><textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"
                                                 onfocus="if(this.value=='Your comment*'){this.value=''}"
                                                 onblur="if(this.value==''){this.value='Your comment*'}">Your comment*</textarea>
                                    </p>

                                    <p class="comment_submit"><input name="submit" type="submit" class="btn btn-primary"
                                                                     id="submit" tabindex="5" value="Submit Comment"/>
                                        <input type='hidden' name='comment_post_ID' value='67' id='comment_post_ID'/>
                                        <input type='hidden' name='comment_parent' id='comment_parent' value='0'/>
                                    </p>

                                </form>

                            </div>

                            <!-- END Comments -->

                        </div>
                        <div class="span4 sidebar" id="sidebar" data-motopress-type="static-sidebar"
                             data-motopress-sidebar-file="sidebar.php">

                            <div id="categories-3" class="widget"><h3>Categories</h3>
                                <ul>
                                    <li class="cat-item cat-item-2"><a
                                            href="https://livedemo00.template-help.com/wordpress_53761/category/coding/">Coding</a>
                                    </li>
                                    <li class="cat-item cat-item-3"><a
                                            href="https://livedemo00.template-help.com/wordpress_53761/category/css3/">CSS3</a>
                                    </li>
                                    <li class="cat-item cat-item-4"><a
                                            href="https://livedemo00.template-help.com/wordpress_53761/category/html5/">HTML5</a>
                                    </li>
                                    <li class="cat-item cat-item-5"><a
                                            href="https://livedemo00.template-help.com/wordpress_53761/category/webdesign/">Web
                                            design</a>
                                    </li>
                                </ul>
                            </div>
                            <div id="archives-2" class="widget"><h3>Archives</h3>
                                <ul>
                                    <li><a href='https://livedemo00.template-help.com/wordpress_53761/2014/05/'>May
                                            2014</a>
                                    </li>
                                    <li><a href='https://livedemo00.template-help.com/wordpress_53761/2013/03/'>March
                                            2013</a></li>
                                    <li><a href='https://livedemo00.template-help.com/wordpress_53761/2013/02/'>February
                                            2013</a></li>
                                    <li><a href='https://livedemo00.template-help.com/wordpress_53761/2013/01/'>January
                                            2013</a></li>
                                    <li><a href='https://livedemo00.template-help.com/wordpress_53761/2012/12/'>December
                                            2012</a></li>
                                    <li><a href='https://livedemo00.template-help.com/wordpress_53761/2012/05/'>May
                                            2012</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php }
?>