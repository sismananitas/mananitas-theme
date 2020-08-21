<?php
/**
 *	events.php
 * 	Home page template of mananitas
 *  Template Name: Events Template
 */
global $pinar_opt;

get_header();
?>
<div id="home-section">

<main class="container">
	<?php
		if (have_posts()) :
			global $pinar_opt;
			
			while (have_posts()) :
				the_post();
				the_content();
			endwhile;
		endif;
    ?>
</main>

<!-- Extracto -->
<div class="container">
    <div class="heading-box ">
        <h2>¡<em>Las Mañanitas</em>, una experiencia inolvidable!</h2>
    </div>

    <div class="wpb_text_column wpb_content_element ">
        <h3>Salón de Eventos CasaNueva</h3>
        <p><strong>Las Mañanitas Casanueva</strong> les ofrece un espacio ideal para <strong>disfrutar de esa experiencia inolvidable, en donde gozará de la calidad incomparable y la atención personalizada</strong>, que ha distinguido a este magnifico lugar.</p>
        <p>En CasaNueva sus bodas podrán contar con una hermosa terraza techada, adornada con una cúpula estilo colonial y rodeada de jardines con imponentes fuentes y exóticas aves.</p>
        <p><strong>Queremos compartirles toda nuestra magia, y hacer de esa fecha un momento único para disfrutar.</strong></p>
    </div>

    <div class="wpb_text_column">
        <div class="linea-span"></div>
    </div>
</div>

<div class="container">
    <div class="wpb_text_column heading-box bold">
        <h2>Servicios</h2>
    </div>
    <div class="flex py-3">
        <div class="vc_col-md-4">
            <figure class="vc_figure marco">
                <img
                    alt=""
                    data-srcset="https://lasmananitas.com.mx/wp-content/uploads/2017/04/IMG_7660.jpg 800w, https://lasmananitas.com.mx/wp-content/uploads/2017/04/IMG_7660-200x300.jpg 200w, https://lasmananitas.com.mx/wp-content/uploads/2017/04/IMG_7660-768x1152.jpg 768w, https://lasmananitas.com.mx/wp-content/uploads/2017/04/IMG_7660-683x1024.jpg 683w"
                    sizes="(max-width: 800px) 100vw, 800px"
                    data-src="https://lasmananitas.com.mx/wp-content/uploads/2017/04/IMG_7660.jpg"
                    class="vc_single_image-img attachment-full lazyloaded"
                    src="https://lasmananitas.com.mx/wp-content/uploads/2017/04/IMG_7660.jpg"
                    loading="lazy"
                    srcset="https://lasmananitas.com.mx/wp-content/uploads/2017/04/IMG_7660.jpg 800w, https://lasmananitas.com.mx/wp-content/uploads/2017/04/IMG_7660-200x300.jpg 200w, https://lasmananitas.com.mx/wp-content/uploads/2017/04/IMG_7660-768x1152.jpg 768w, https://lasmananitas.com.mx/wp-content/uploads/2017/04/IMG_7660-683x1024.jpg 683w"
                    width="800"
                >
                <noscript>
                    <img
                        alt=""
                        width="800"
                        src="https://lasmananitas.com.mx/wp-content/uploads/2017/04/IMG_7660.jpg"
                        class="vc_single_image-img attachment-full"
                        srcset="https://lasmananitas.com.mx/wp-content/uploads/2017/04/IMG_7660.jpg 800w, https://lasmananitas.com.mx/wp-content/uploads/2017/04/IMG_7660-200x300.jpg 200w, https://lasmananitas.com.mx/wp-content/uploads/2017/04/IMG_7660-768x1152.jpg 768w, https://lasmananitas.com.mx/wp-content/uploads/2017/04/IMG_7660-683x1024.jpg 683w"
                        sizes="(max-width: 800px) 100vw, 800px"
                    />
                </noscript>
            </figure>
        </div>
        <div class="vc_col-md-8">
            <ul>
                <li>Lugar con capacidad de hasta 600 personas</li>
                <li class="li1"><span class="s2">Ó bien podemos ofrecer únicamente el servicio de banquete en el lugar de su preferencia</span></li>
                <li>Lugar para oficiar ceremonia religiosa y civil</li>
                <li>Asesoría especializada</li>
                <li>Planeación y coordinación total de su evento</li>
                <li>Valet Parking</li>
                <li>Mobiliario y Equipo</li>
                <li>Contamos con menús de alta cocina, siendo reconocidos a nivel internacional por nuestra calidad y variedad de platillos, que van desde tradicionales recetas de la cocina mexicana hasta exquisitos platillos de la comida internacional</li>
            </ul>
        </div>
    </div>
    <div class="flex py-3">
        <div class="vc_col-md-6">
            <ul>
                <li>Personal de seguridad</li>
                <li>Personal de apoyo para la recepción de sus invitados</li>
                <li>Para-médico</li>
                <li>Personal de baños</li>
                <li>Baño exclusivo para la Novia</li>
                <li>Salón para proveedores</li>
                <li>Guardarropa</li>
                <li>Planta de luz</li>
                <li>1 habitación en cortesía para los Novios</li>
            </ul>
        </div>
        <div class="vc_col-md-6">
            <figure class="vc_figure marco">
                <img
                    alt="Bodas en Las Mañanitas"
                    data-srcset="https://lasmananitas.com.mx/wp-content/uploads/2017/04/bodas04.jpg 990w, https://lasmananitas.com.mx/wp-content/uploads/2017/04/bodas04-300x205.jpg 300w, https://lasmananitas.com.mx/wp-content/uploads/2017/04/bodas04-768x524.jpg 768w"
                    sizes="(max-width: 990px) 100vw, 990px"
                    data-src="https://lasmananitas.com.mx/wp-content/uploads/2017/04/bodas04.jpg"
                    class="vc_single_image-img attachment-full lazyloaded"
                    src="https://lasmananitas.com.mx/wp-content/uploads/2017/04/bodas04.jpg"
                    loading="lazy"
                    srcset="https://lasmananitas.com.mx/wp-content/uploads/2017/04/bodas04.jpg 990w, https://lasmananitas.com.mx/wp-content/uploads/2017/04/bodas04-300x205.jpg 300w, https://lasmananitas.com.mx/wp-content/uploads/2017/04/bodas04-768x524.jpg 768w"
                    width="990"
                >
                <noscript>
                    <img
                        width="990"
                        src="https://lasmananitas.com.mx/wp-content/uploads/2017/04/bodas04.jpg"
                        class="vc_single_image-img attachment-full"
                        alt="Bodas en Las Mañanitas"
                        srcset="https://lasmananitas.com.mx/wp-content/uploads/2017/04/bodas04.jpg 990w, https://lasmananitas.com.mx/wp-content/uploads/2017/04/bodas04-300x205.jpg 300w, https://lasmananitas.com.mx/wp-content/uploads/2017/04/bodas04-768x524.jpg 768w"
                        sizes="(max-width: 990px) 100vw, 990px"
                    />
                </noscript>
            </figure>
        </div>
    </div>
    <section class="flex mt-2">
        <div class="vc_col-12 vc_col-md-6">
            <figure class="marco vc_figure">
                <img
                    alt="Bodas"
                    width="100%"
                    data-srcset="https://lasmananitas.com.mx/wp-content/uploads/2017/04/bodas05.jpg 1020w, https://lasmananitas.com.mx/wp-content/uploads/2017/04/bodas05-300x148.jpg 300w, https://lasmananitas.com.mx/wp-content/uploads/2017/04/bodas05-768x379.jpg 768w"
                    sizes="(max-width: 1020px) 100vw, 1020px"
                    data-src="https://lasmananitas.com.mx/wp-content/uploads/2017/04/bodas05.jpg"
                    class="vc_single_image-img attachment-full"
                    src="https://lasmananitas.com.mx/wp-content/uploads/2017/04/bodas05.jpg"
                    loading="lazy"
                    srcset="https://lasmananitas.com.mx/wp-content/uploads/2017/04/bodas05.jpg 1020w, https://lasmananitas.com.mx/wp-content/uploads/2017/04/bodas05-300x148.jpg 300w, https://lasmananitas.com.mx/wp-content/uploads/2017/04/bodas05-768x379.jpg 768w"
                >
            </figure>
        </div>
        <div class="marco vc_col-12 vc_col-md-6">
            <div class="wpb_text_column">
                <p><span style="color: #959595;">contamos con:</span></p>
                <p>Servicio de Catering</p>
                <p><span style="color: #c2a16d;">certificación Kosher</span></p>
            </div>
            <figure class="wpb_wrapper vc_figure" style="text-align: center">
                <img
                    alt="logo kosher"
                    data-src="https://lasmananitas.com.mx/wp-content/uploads/2017/04/log2.png"
                    class="vc_single_image-img attachment-full"
                    src="https://lasmananitas.com.mx/wp-content/uploads/2017/04/log2.png"
                    loading="lazy"
                    width="188"
                    height="144"
                >
            </figure>
        </div>
    </section>
    <div class="flex text-center py-3">
        <p class="w-100"><a href="https://lasmananitas.com.mx/contacto">CLICK PARA MÁS INFORMACIÓN</a></p>
    </div>
</div>

<div class="linea-marco-res py-3" style="text-align: center;">
    <div class="wpb_text_column reser">
        <p><strong>Reservaciones y Ventas:</strong></p>
    </div>
    <div class="wpb_text_column tel-boda">
        <p><strong>Teléfono: </strong><a href="tel:+527773620023">+52 (777) 362 00 23</a></p>
        <p>Ext. 303, 322</p>
    </div>
    <div class="wpb_text_column tel-boda">
        <p><strong>Correo: </strong><a href="mailto:callcenter@lasmananitas.com.mx" target="_blank" rel="noopener noreferrer">callcenter@lasmananitas.com.mx</a></p>
    </div>
</div>
<!-- Fin extracto -->
<?php
get_footer();