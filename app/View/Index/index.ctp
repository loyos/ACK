<div class = "index">
		<div id = "home" class = "wrap" style = "color: white;">
			HOME
		</div>
		<div id = "works" class = "wrap" style = "color: white;">
			WORKS
		</div>
		<div id = "studio" class = "wrap" style = "color: white;">
			ESTUDIO
		</div>
		<div id = "contact" class = "wrap" style = "color: white;">
			CONTACTO
		</div>
</div>
<script>

$('.menu li').click(
			function (){
				$(".logo_text").slideUp("slow");
				if ($(".index").is(":hidden")) {
					$(".index").show("slow");
				}
				$('.wrap').animate({'marginLeft': '358px', 'opacity': 'hide'}, 200, "easeOutCirc");
				var name= "#";
				name= name + $(this).attr('name');
				// alert(name);
				$(name).animate({'display': 'show', 'marginLeft': '-470px', 'opacity': '1'}, 300, "easeOutCirc");
			}
		);
		
$('.logo').click(
	function prueba(){
		$('.index').children().animate({'marginLeft': '358px', 'opacity': '0'}, 200, "easeOutCirc", function(){
			}
		);
		$('.index').children().promise().done(function(){
			$(".index").slideUp('slow');
			$(".logo_text").slideDown("slow");
			// $(name).animate({'display': 'show', 'marginLeft': '-470px', 'opacity': '1'}, 300, "easeOutCirc");
			// alert("listo!");
		})
	}
)		

</script>