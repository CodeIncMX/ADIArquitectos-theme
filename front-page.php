<?php
/**
 * The front page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ADIArquitectos
 */

get_header();
?>
<main>

    <div class="hero-bg collapsed"></div>

<div class="container-fluid">

    <div class="hero show">
        <div class="row">
            <div class="col-1 col-md-3"></div>
            <div class="col-10 col-md-6">
                <h2>Arquitectura<br/>Diseño Integral</h2>
            </div>
            <div class="col-1 col-md-3"></div>
            <div class="col-2 col-md-3"></div>
            <div class="col-8 col-md-6">
                <h3>Tu mejor aliado en proyectos creativos</h2>
            </div>
            <div class="col-2 col-md-3"></div>
        </div> <!-- .row -->
    </div> <!-- .hero -->

	<div class="hero-contact hidden">
        <div class="content">
            <ul class="social">
                <li><a class="facebook" href="https://www.facebook.com/adiproyectos/"></a></li>
                <li><a class="twitter" href="https://twitter.com/AdiArquitectos"></a></li>
                <li><a class="instagram" href="https://www.instagram.com/adiproyectos/"></a></li>
            </ul>
            <ul class="contact">
            <li><a class="phone" href="tel:+5215554762417"></a></li>
                <li><a class="mail" href="mailto:proyectos@adiarquitectos.com"></a></li>
            </ul>
        </div>
	</div>


    <div class="hero-footer">
            <div class="row">
                <div class="col-3">
                    <img class="left-frame d-lg-none">
                    <img class="lateral-frame d-none d-lg-block">
                </div>
                <div class="col-6 copy">
                    <span>  
                        © ADI Copyright<br/>Desarrollador por <a>Code Inc México</a>
                    </span>
                </div>
                <div class="col-3">
                    <img class="right-frame">
                </div>
            </div> <!-- .row -->
        </div> <!-- .hero-footer -->
        
    </div> <!-- container -->
</main> <!-- #main -->
<?php
get_footer();