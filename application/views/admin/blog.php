

       <div class="container">
            <div class="row">
               
                <div class="col-sm-9">


                <?php if(isset($blogs)){?>
                <?php foreach($blogs as $v){?>
                    <div class="row">
                        <div class="col-xs-12">
                            <h2><?php echo $v->title;?></h2>
                            <p>
                                <?php echo $v->article ;?>
                            </p>
                            <div class="text-center">
                                <span><?php echo 'Publisher:'.$v->ad_name.'&emsp;'.'<small>tag:</small> '.$v->tag_name."&emsp;&emsp;&emsp;";?></span>
                                <a href="#"><i class="fa fa-plus"></i>Full Story</a>
                                <a href="#"><i class="fa fa-comment"></i>12 Comments</a>
                                <a href="#"><i class="fa fa-share"></i>11 Shares</a>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <?php }?>
                    <?php }?>



                    <!-- the comment box -->
                    <div class="well">
                        <!--<h4>Leave a Comment:</h4>
                        <form role="form">
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>-->

                           <a href="/ablog/pushblog" style="color:white"> <button  class="btn btn-primary">Add one article</button></a>
                        <!--</form>-->
                    </div>

                    <hr>

                    

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
