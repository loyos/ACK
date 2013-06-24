<div class = "index">
		<div id = "home" class = "wrap" style = "color: white;">
			<div class = "subwrap">
				<div class = "title">BIENVENIDO</div>
				<p> <?php echo $this->Html->image('loy_intro.jpg'); ?> </p>
				<p>
					LOY RAMÍREZ LOCO<br><br>
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
		
			<!-- ............................................................................................................ -->
			
			
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
		
			<!-- ............................................................................................................ -->
		
		<div id = "contact" class = "wrap" style = "color: white;">
			<div class = "midwrap">
				<div class = "title">COMUNÍCATE</div>
				<div class = "foto_contacto">
					<?php echo $this->Html->image('foto_contactanos.jpg', array('height' => '200px', 'width' => '300px')); ?>
				</div>
				<div class = "contacto_info">
					Puedes localizarnos llamando a los teléfonos 0416-5383821 o 0414-1112233 <br>
					O si prefieres, contáctanos llenado el formulario, responderémos tan pronto como sea posible.
				</div>
			</div>
			<div class = "midwrap">
				<div class = "title">FORMULARIO DE CONTACTO</div>		
				<div class = "contact_form">
					<?php
					
					//echo "hola";
						echo $this->Form->create(false, array('class' => 'a'));
						echo "<div class = 'fleft'>";
							echo $this->Form->input('Nombre', array ('label' => 'NOMBRE: <br>'));
							echo $this->Form->input('Email', array ('label' => 'EMAIL: <br>'));
							echo $this->Form->input('Teléfono', array ('label' => 'TELÉFONO: <br>'));
						echo "</div>";
						echo "<div class = 'fright'>";
							echo $this->Form->input('Mensaje', array ('label' => 'MENSAJE: <br>', 'type' => 'textarea'));
						echo "</div >";
						echo "<div class = 'fright'>";
							echo $this->Form->submit('ENVIAR');
						echo "</div>";
						echo $this->Form->end();
					?>
				
				</div>
				
			</div>
		</div>
</div>

<script>
$('.menu li').hover(
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
				// $(this).find('a').addClass('selected');
				// console.debug($(this).find('a'));
				$(".logo_text").slideUp("slow");
				if ($(".index").is(":hidden")) {
					$(".index").show("slow");
				}								
				if ($(".wrap").is(":visible")) {
					$('.wrap').animate({'left': '300px', 'opacity': 'hide'}, 200, "easeOutCirc", function(){
						$('.wrap').css("opacity", "0");
					});
				}		
				var name= "#";
				name= name + $(this).attr('name');
				$('.wrap').promise().done(function(){
					$(name).animate({'display': 'show', 'marginLeft': '50%', 'left':  -$('.wrap').width()/2, 'opacity': '1'}, 500, "easeOutCirc");
				});
			}
		);
		
$('.logo').click(
	function prueba(){
		$('.index').children().animate({ 'opacity': '0'}, 200, "easeOutCirc", function(){
		$('.wrap').css( "margin-left", "auto" );
			}
		);
		$('.index').children().promise().done(function(){
			$(".index").slideUp('slow');
			$(".logo_text").slideDown("slow");
		})
	}
)		

</script>