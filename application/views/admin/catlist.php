

       <div class="container">
            <div class="row">
               
                <div class="col-sm-9">


                    <?php foreach($cats as $v){?>
                    <div class="row">
                        <div class="col-xs-12">
                            <h2><?php  echo  $v->cat_name;?></h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                    Aliquam in felis sit amet augue.
                            </p>
                            <div class="text-center">
                                <a href="#"><i class="fa fa-plus"></i>Full Story</a>
                                <a href="#"><i class="fa fa-comment"></i>12 Comments</a>
                                <a href="#"><i class="fa fa-share"></i>11 Shares</a>
                            </div>
                        </div>
                    
                    </div>

                    <?php }?>
                    <hr />
                    
                    <hr />

                    <!-- the comment box -->
                    <div class="well">
                            <a href="/acatcontroller/catadd"><button type="submit" class="btn btn-primary">Add new category</button></a>
                    </div>

                    <hr>

                    <!-- the comments -->
                    <h3>Blog contents
                    <small>2014/03/07 11:43 PM</small>
                    </h3>
                    <p>This is a very interesting blog, well structured and organized. Would be great if you included more information on other IT topics as well.</p>

                    <h3>Contacts
                    <small>2014/03/09 12:11 PM</small>
                    </h3>
                    <p>I wanted to get in touch with the author of the blog, but I see no way to do this.</p>

                </div>
                 <div class="col-sm-3">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2>Side</h2>
                            <div class="panel panel-default">
                                <div class="panel-heading">News</div>
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                                </div>
                                <div class="text-center">
                                    <a href="#"><i class="fa fa-plus"></i>Full Story</a>
                                </div>
                            </div>
                            <hr />
                            <div class="panel panel-default">
                                <div class="panel-heading">News</div>
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                </div>
                                <div class="text-center">
                                    <a href="#"><i class="fa fa-plus"></i>Full Story</a>
                                </div>
                            </div>
                            <hr />
                            <div class="panel panel-default">
                                <div class="panel-heading">News</div>
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                                </div>
                                <div class="text-center">
                                    <a href="#"><i class="fa fa-plus"></i>Full Story</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
