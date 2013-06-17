<div class = "index">
		<div id = "home" class = "wrap" style = "color: white;">
			<div class = "subwrap">
				<div class = "title">BIENVENIDO</div>
				<p> <?php echo $this->Html->image('loy_intro.jpg'); ?> </p>
				<p>
					LOY RAMÍREZ<br><br>
				<i> DESARROLLADOR DE SOFTWARE INDEPENDIENTE <br>
					   LIC. EN COMPUTACIÓN DE LA UCV <br>
					   MÚSICO EMPRENDEDOR <br>
					   AMANTE DE LOS RETOS..
				</i></p>
			</div>
			<div class = "subwrap">
				<div class = "title">¿POR QUÉ NOSOTROS? </div>
				<p><i> SÓMOS UN GRUPO DE JÓVENES DINÁMICOS CON RECONOCIDA EXPERIENCIA EN LAS DISTINTAS FACETAS DEL DESARROLLO WEB Y MÓVIL. APORTAMOS SOLUCIONES ACORDE A SUS NECESIDADES,
				NO TIENE QUE SER UN EXPERTO PARA SOLICITAR NUESTROS SERVICIOS, USTED APORTE UNA IDEA Y NOSOTROS CONSTRUIMOS LA SOLUCIÓN.</i></p>
				<p><i>ADEMÁS GARANTIZAMOS:</i></p>
				<ul>
					<li>EFICIENCIA</li>
					<li>CALIDAD</li>
					<li>USO DE ÚLTIMAS TECNOLOGÍAS</li>
					<li>PRESUPUESTOS JUSTOS</li>
					<li>MÚLTIPLES SERVICIOS</li>
				</ul>
			</div>
			<div class = "subwrap">
				<div class = "title">TRABAJOS </div>
				<div class = "collage">
					<table width = "280" height = "220" >
					<tr>
					<td><?php echo $this->Html->image('works/1.jpg', array ('width' => '130px', 'height' => '100px')); ?></td>
					<td><?php echo $this->Html->image('works/2.jpg', array ('width' => '130px', 'height' => '100px')); ?></td>
					</tr>
					<tr>
					<td><?php echo $this->Html->image('works/3.jpg', array ('width' => '130px', 'height' => '100px')); ?></td>
					<td><?php echo $this->Html->image('works/4.jpg', array ('width' => '130px', 'height' => '100px')); ?></td>
					</tr>
					</table>
				</div>
			</div>
			<div class = "subwrap">
				<div class = "title">NOTICIAS</div>
				<div class = "news">
					<div class = "news_title"> ACK WEB ALMOST READY! </div>
					<p> <i>	DENTRO DE POCO LA WEB DE ACK DESING ESTARÁ CASI LISTA! </i><p>
				</div>
			</div>
		</div>
		
		<!-- ............................................................................................................ -->
		
		
		<div id = "works" class = "wrap" style = "color: white;">
			<div class = "subwrap">
				<div class = "title">BIENVENIDO</div>
			</div>
			<div class = "subwrap">
				<div class = "title">¿POR QUÉ NOSOTROS? </div>
			</div>
			<div class = "subwrap">
				<div class = "title">TRABAJOS </div>
			</div>
			<div class = "subwrap">
				<div class = "title">NOTICIAS</div>
			</div>
		</div>
		<div id = "studio" class = "wrap" style = "color: white;">
			<div class = "subwrap">
				<div class = "title">BIENVENIDO</div>
			</div>
			<div class = "subwrap">
				<div class = "title">¿POR QUÉ NOSOTROS? </div>
			</div>
			<div class = "subwrap">
				<div class = "title">TRABAJOS </div>
			</div>
			<div class = "subwrap">
				<div class = "title">NOTICIAS</div>
			</div>
		</div>
		<div id = "contact" class = "wrap" style = "color: white;">
			<div class = "subwrap">
				<div class = "title">BIENVENIDO</div>
			</div>
			<div class = "subwrap">
				<div class = "title">¿POR QUÉ NOSOTROS? </div>
			</div>
			<div class = "subwrap">
				<div class = "title">TRABAJOS </div>
			</div>
			<div class = "subwrap">
				<div class = "title">NOTICIAS</div>
			</div>
		</div>
</div>

<script>
$('.menu li a').hover(
	function () {
		$(this).animate({'color': '#D33D2C'}, 200, "easeOutCirc");	
  },
	function () {
		$(this).animate({'color': 'white'}, 200, "easeOutCirc");
	}
);

$('.menu li').click(
			function (){
				// $('.menu li a').css('color', 'white');
				// console.debug($(this).find('a').css('color', '#D33D2C'));
				$(this).find('a').addClass('selected');
				console.debug($(this).find('a'));
				$(".logo_text").slideUp("slow");
				if ($(".index").is(":hidden")) {
					$(".index").show("slow");
				}
				$('.wrap').animate({'marginLeft': '358px', 'opacity': 'hide'}, 200, "easeOutCirc");
				var name= "#";
				name= name + $(this).attr('name');
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
		})
	}
)		

</script>