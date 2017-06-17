
<div class="bg-content">       
  <!--============================== content =================================-->      
   <div id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November19, 2012!</div>
    <div class="container">
          <div class="row">
        <article class="span8">
         <div class="inner-1">         
          <ul class="list-blog">

          <?php foreach($blogs as $k => $v){?>
            <li>  
            <h3><?php echo $v->title?></h3>     
            <time datetime="<?php echo  date('Y.m.d',$v->pubtime) ;?>" class="date-1"><?php echo  date('Y.m.d',$v->pubtime) ;?></time>
            <div class="name-author">by <a href="#"><?php echo $v->ad_name?></a></div>
            <a href="#" class="comments">11 comments</a> 
            <div class="clear"></div>            
              <!--<img alt="" src="<?php //echo $base; ?>img/page4-img1.jpg">                               -->
              <p><?php echo $v->article?></p>
              <a href="#" class="btn btn-1">Read More</a>          
            </li>  
            <?php }?>
            
                                 
          </ul>
          </div>  
        </article>



        <div class="" >
        <article class="span4">
          <h3 class="extra">Search</h3>
          <form id="search" action="/fweb/search" method="GET" accept-charset="utf-8" >
            <div class="clearfix">
              <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" >
              <a href="#" onClick="document.getElementById('search').submit()" class="btn btn-1">Search</a> </div>
          </form>
          <h3>Categories</h3>
          <ul class="list extra extra1">           
          <?php foreach($cats as $v){?>
            <li><a href="#"><?php echo $v->cat_name ?></a></li>
          <?php }?>
            <!--<li><a href="#">Quis nostrud exerci tation ullamcorper</a></li>-->
          </ul>
          <!--<h3>Archive</h3>
         <div class="wrapper">
          <ul class="list extra2 list-pad ">
            <li><a href="#">November 2012</a></li>
            <li><a href="#">October 2012</a></li>
            <li><a href="#">September 2012</a></li>
            <li><a href="#">August 2012</a></li>
            <li><a href="#">July 2012</a></li>
            <li><a href="#">June 2012</a></li>
          </ul>
            <ul class="list extra2">
            <li><a href="#">May 2012</a></li>
            <li><a href="#">April 2012</a></li>
            <li><a href="#">March 2012</a></li>
            <li><a href="#">February 2012</a></li>
            <li><a href="#">January 2012</a></li>
            <li><a href="#">December 2011</a></li>
          </ul>-->
          
          </div>
        </article>
        </div>
      </div>
     </div>
  </div>
 </div>

<!--============================== footer =================================-->
<footer>
      <div class="container clearfix">
       <ul class="list-social pull-right">
          <li><a class="icon-1" href="#"></a></li>
          <li><a class="icon-2" href="#"></a></li>
          <li><a class="icon-3" href="#"></a></li>
          <li><a class="icon-4" href="#"></a></li>
        </ul>
    <div class="privacy pull-left">Website Template designed by <a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">TemplateMonster.com</a> </div>
  </div>
    </footer>
<script type="text/javascript" src="<?php echo $base; ?>js/bootstrap.js"></script>
</body>
</html>