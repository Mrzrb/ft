<div class="container">
	<div class="row">

		<div class="col-sm-9">


			<!-- the comment box -->
			<div class="well">
					<form role="form" method="post" action="/ablog/addblog">

				<h3>Input the title:</h4>
						<div class="form-group">
							<input type="text" name="title" class="form-control" rows="2">
							<!--<textarea class="form-control" rows="2" name="title"></textarea>-->
						</div>

				<h3>Edit the article:</h4>
						<div class="form-group">
							<textarea class="form-control" rows="20" name="article"></textarea>
						</div>
				<h3>Edit a tag</h3>
						<div class="form-group">
							<textarea class="form-control" rows="2" name="tag_name"></textarea>
						</div>

				<h3>Select a catgory</h3>
						<div class="form-group">

							<?php if(isset($cats)){ ?>
							<select class="selectpicker col-sm-12" name="cat">
                                    <?php foreach($cats as $v){?>
                                        <option value="<?php echo $v->cat_id;?>"><?php echo $v->cat_name;?></option>
                                    <?php }?>
                                    </select>
							<?php }?>
						</div>
						<!--<button  class="btn btn-primary"><a href="/ablog/addblog" style="color:white">Add one article</a></button>-->
					
				<h3>Push the article</h3>
						<div class="form-group">
							<input type="submit" value="Push one article" class="btn btn-primary btn-block">
						</div>
					</form>
			</div>

			<hr>
		</div>
	</div>
</div>

</body>

</html>
