<hr />

<div class="container">

<div class="row">
		<div class="text-center">
			<h1>Main Page</h1>
		</div>
		<?php if(isset($imgs)){
		 foreach($imgs as $v){?>
		<div class="col-md-4">
			<div class="well">
				<img class="thumbnail img-responsive" alt="Bootstrap template" src="<?php echo $admin_url .'/'.$v->img_src;?>"
				/>
				<span><button class="btn btn-primary"> 
					<a href="/Mimg/delete/<?php echo $v->img_id?>" style="color:white"> delete </a></button>
				</span>
			</div>
		</div>
		<?php } }?>
	</div>

	<div class="row">
		<form action="/mimg/upload" id='' enctype="multipart/form-data" method="post" accept-charset="utf-8">
			<div class="form-group">  
				<label class="col-sm-2 control-label">图片上传:</label>  
				<div class="col-sm-4">  
					<input id="file" name="userfile" type="file" data-show-caption="true">  
					<p class="help-block">支持jpg、jpeg、png格式，大小不超过2.0M</p>  
				</div>  
			</div>
			<div>
			<input type="submit" class="btn btn-primary" value="upload">
			
			</div>
		</form> 





		

		<!--<button class="btn btn-primary" onclick="uploadImg()"> upload </button>-->
	</div>

		<div class="row">
	<!--</div>
			<?php //echo form_open_multipart('/test/rec');?>

			<input type="file" name="userfile" size="20" />

			<br /><br />

			<input type="submit" value="upload" />

			</form>
</div>-->
</div>
</div>

</body>

<!-- img ajax -->


<script type="text/javascript">
	function initFileInput(ctrlName,uploadUrl) {      
        var control = $('#' + ctrlName);   
        control.fileinput({  
            language: 'zh', //设置语言  
            uploadUrl: uploadUrl,  //上传地址  
            showUpload: false, //是否显示上传按钮  
            showRemove:true,  
            dropZoneEnabled: false,  
            showCaption: true,//是否显示标题  
            allowedPreviewTypes: ['image'],  
			allowedFileTypes: ['image'],  
			allowedFileExtensions:  ['jpg', 'png'],  
			maxFileSize : 20000,  
            maxFileCount: 1,  
			uploadAsync: true, //同步上传  
            //initialPreview: [   
                    //预览图片的设置  
              //      "<img src='http://127.0.0.1:8080/NewsManageSys/plugin/umeditor1_2_2/jsp/upload/20161030/55061                       477813913474.jpg' class='file-preview-image' alt='肖像图片' title='肖像图片'>",  
            //],  
              
        }).on("filebatchselected", function(event, files) {  
            $(this).fileinput("upload");  
            })  
            .on("fileuploaded", function(event, data) {  
                $("#path").attr("value",data.response);  
        });  
    }  
      
    $(function () {  
        var path="";  
        initFileInput("file",path);  
          
    })  
</script>

<script type="text/javascript">
	
	function uploadImg(){
		item = document.getElementById('test');
		form = new FormData();
		form.append("upload",item);
		item.submit();
		
	}

	
</script>


</html>
