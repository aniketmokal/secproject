$(document).ready(function(){
	$("#register_form,#login_form")[0].reset();
	
	$('.btn_register').click(function(){
		// alert(1);
		rec = $('#register_form').serialize();
		// console.log(rec);

		$.post("../controllers/register_action.php", rec, function(response){
			console.log(response);
			// if(response == "ok"){
			// 	$("#register_form").[0].reset();
			// }

			$(".errordiv").html(response);
		})
	})

	// $("#login_form")[0].reset();
	$(".btn_login").click(function(){
		// alert(1);
		rec=$("#login_form").serialize();
		
		// console.log(rec);
		$.post("../controllers/login_action.php",rec,function(res){
			// console.log(res);
			if(res == "success"){
				window.location.href="index.php";
			}
			else{
				$(".errordiv").html(res);
			}
			
		})
	})
})