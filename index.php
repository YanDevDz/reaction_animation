<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Reactions animation 👌👌</title>
    <style type="text/css">
    	.btn-img {
    		width: 25px;
    		vertical-align: text-top;
    	}
    	.img_gif {
    		width: 50px;
    	}
    	.img_gif:hover {
    		cursor: pointer;
    		transform: scale(1.2);
			top: -5px;
			position: relative;
    		transition: all 0.4s;
    	}
    	.container-gif {
    		left: 250px;
    		width: fit-content;
    		border: 1px solid #e7e7e7;
    		border-radius: 25px;
    		padding: 5px 10px;
    		box-shadow: 3px 3px 4px 0px #e7e7e7;
    		background-color: white;
    		top: -60px;
    		position: absolute;
    		transition: all 1s;
    		display: none;
    		margin: auto;
    		right: 0px;
    	}
    	.h1 {
    		margin-top: 60px;
    	}

    	.bs-tooltip-auto[x-placement^=bottom] .arrow::before,.bs-tooltip-bottom .arrow::before { 
    		border-bottom-color: transparent !important; 
    		border-radius: 25px!important;
    	} 
    	.bs-tooltip-auto[x-placement^=top] .arrow::before,.bs-tooltip-top .arrow::before { 
    		border-top-color: transparent !important; 
    		border-radius: 25px!important;
    	} 
    	.bs-tooltip-auto[x-placement^=left] .arrow::before,.bs-tooltip-left .arrow::before { 
    		border-left-color: transparent !important; 
    		border-radius: 25px!important;
    	} 
    	.bs-tooltip-auto[x-placement^=right] .arrow::before,.bs-tooltip-right .arrow::before { 
    		border-right-color: transparent !important; 
    		border-radius: 25px!important;
    	}
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  </head>
  <body style="text-align: center;">
    <h1 class="h1">Reactions animation 👌👌</h1>

    <div class="container-fluid">
    	<div class="container">
    		<div class="row" style="height: 150px;">
    			
    		</div>
    		<div class="row">
	    		<div class="col-lg-12">
	    			<form>
	    			  <div class="form-group">
	    			  	<div class="container-gif ">
	    			  		<img
	    			  			class="img_gif wow slideInUp" data-wow-duration="0.3s" data-wow-delay="0s" 
	    			  			src="./images/like.gif" 
		    			  		data-color="#6687c4" 
		    			  		data-img="ic_like_fill.png"  
		    			  		data-toggle="tooltip" 
		    			  		data-placement="top"
		    			  		data-text="Like" 
		    			  		title="Like ..">
	    			  		<img
	    			  			class="img_gif wow slideInUp" data-wow-duration="0.3s" data-wow-delay="0.1s" 
	    			  			src="./images/love.gif" 
		    			  		data-color="#ef5368" 
		    			  		data-img="love2.png"  
		    			  		data-toggle="tooltip" 
		    			  		data-placement="top"
		    			  		data-text="Love" 
		    			  		title="Love ..">
	    			  		<img
	    			  			class="img_gif wow slideInUp" data-wow-duration="0.3s" data-wow-delay="0.2s" 
	    			  			src="./images/wow.gif" 
		    			  		data-color="#ffd871" 
		    			  		data-img="wow2.png"  
		    			  		data-toggle="tooltip" 
		    			  		data-placement="top"
		    			  		data-text="Woow" 
		    			  		title="Wow ..">
	    			  		<img
	    			  			class="img_gif wow slideInUp" data-wow-duration="0.3s" data-wow-delay="0.3s" 
	    			  			src="./images/haha.gif" 
		    			  		data-color="#ffd872" 
		    			  		data-img="haha2.png"  
		    			  		data-toggle="tooltip" 
		    			  		data-placement="top"
		    			  		data-text="Haha" 
		    			  		title="Haha ..">
	    			  		<img
	    			  			class="img_gif wow slideInUp" data-wow-duration="0.3s" data-wow-delay="0.4s" 
	    			  			src="./images/sad.gif" 
		    			  		data-color="#6687c4" 
		    			  		data-img="sad2.png"  
		    			  		data-toggle="tooltip" 
		    			  		data-placement="top"
		    			  		data-text="Sad" 
		    			  		title="Sad ..">
  	    			  		<img
  	    			  			class="img_gif wow slideInUp" data-wow-duration="0.3s" data-wow-delay="0.5s" 
  	    			  			src="./images/angry.gif" 
  		    			  		data-color="#eb5d4d" 
  		    			  		data-img="angry2.png"  
  		    			  		data-toggle="tooltip" 
  		    			  		data-placement="top"
  		    			  		data-text="Angry" 
  		    			  		title="Angry ..">
	    			  	</div>
	    			    <button type="button" class="btn btn-lg btn-light" style="margin-top: 10px;">
	    			    	<img src="./images/ic_like.png" class="btn-img">
	    			    	<span class="btn-txt">Like</span>
	    			    </button>
	    			    <small id="emailHelp" class="form-text text-muted">loooong Press me</small>
	    			  </div>
	    			</form>
	    		</div>
    		</div>
    	</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
	<!-- animations -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<script type="text/javascript">
		$('[data-toggle="tooltip"]').tooltip(); 
		let $container = $(".container-gif");

		// Get a reference to an element
		var square = document.querySelector('.btn');

		// Create a manager to manager the element
		var manager = new Hammer.Manager(square);

		// Create a recognizer
		var Press = new Hammer.Press({
		  time: 500
		});

		// Add the recognizer to the manager
		manager.add(Press);

		// Subscribe to desired event
		manager.on('press', function(e) {
		  
			// $container.addClass("displayed");
			$container.fadeIn();
			new WOW().init();

		});

		// Create a recognizer
		var Tap = new Hammer.Tap({
		  taps: 1
		});

		// Add the recognizer to the manager
		manager.add(Tap);

		// Subscribe to the desired event
		manager.on('tap', function(e) {
			$(".container-gif").hide();
			if($(".btn").hasClass("clicked")) {
				$(".btn-img").attr("src","./images/ic_like.png");
				$(".btn").removeClass("clicked");
				$(".btn").css({
					"color" : "#2a2a2a"
				});
				$(".btn-txt").text("Like");
			}else{
				$(".btn-img").attr("src","./images/ic_like_fill.png");
				$(".btn").addClass("clicked");
				$(".btn").css({
					"color" : "#6687c4"
				});
				$(".btn-txt").text("Like");
			}
		});

		// event sur les GIFS...
		$(".img_gif").click(function(e){
			e.preventDefault();
			let $gif = $(this);
			let new_img = $gif.attr("data-img");
			let color = $gif.attr("data-color");
			let text = $gif.attr("data-text");

			$(".btn-img").attr("src","./images/"+new_img);
			$(".btn-txt").text(text);
			$(".btn").css({
				"color" : color
			});
		});
	</script>
  </body>
</html>