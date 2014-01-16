<script type="text/javascript">
	var image1=new Image()
	image1.src="<?php echo $this->webroot; ?>img/home/pr1.jpg"
	var image2=new Image()
	image2.src="<?php echo $this->webroot; ?>img/home/pr2.jpg"
	var image3=new Image()
	image3.src="<?php echo $this->webroot; ?>img/home/pr3.jpg"
	var image4=new Image()
	image4.src="<?php echo $this->webroot; ?>img/home/pr4.jpg"
	var image5=new Image()
	image5.src="<?php echo $this->webroot; ?>img/home/pr5.jpg"
	var image6=new Image()
	image6.src="<?php echo $this->webroot; ?>img/home/pr6.jpg"
	var image7=new Image()
	image7.src="<?php echo $this->webroot; ?>img/home/pr7.jpg"
	var image8=new Image()
	image8.src="<?php echo $this->webroot; ?>img/home/pr8.jpg"
	var image9=new Image()
	image9.src="<?php echo $this->webroot; ?>img/home/pr9.jpg"
	var image10=new Image()
	image10.src="<?php echo $this->webroot; ?>img/home/pr10.jpg"
	var image11=new Image()
	image11.src="<?php echo $this->webroot; ?>img/home/pr11.jpg"
					
	var step=1
	function slideit()
	{
		if (!document.images)
			return
			document.images.slide.src=eval("image"+step+".src")
			if (step<11)
				step++
			else
				step=1
			setTimeout("slideit()",3000)
	}
	slideit();
					
</script>