
    <div class="row footer footer-pre mt-5">
        <div class="col-xl-2 col-lg-4 col-6">
            <a href="/diseno-programacion-gestion-proyectos-web/">
                <img src="/wp-content/uploads/2020/01/program.jpg" 
                alt="Diseño, programación y gestión de proyectos web" 
                title="Diseño, programación y gestión de proyectos web"
                class="img-fluid">
            </a>
        </div>
        <div class="col-xl-2 col-lg-4 col-6">
            <a href="/administracion-de-servidores/">
                <img src="/wp-content/uploads/2020/01/servers.jpg" 
                alt="Servidores, microservicios o arquitecturas server-less" 
                title="Servidores, microservicios o arquitecturas server-less"
                class="img-fluid">
            </a>
        </div>
        <div class="col-xl-2 col-lg-4 col-6">
            <a href="/administracion-de-estaciones-de-trabajo-y-ordenadores-personales/">
                <img src="/wp-content/uploads/2020/01/workstations.jpg" 
                alt="Administración de estaciones de trabajo y ordenadores personales" 
                title="Administración de estaciones de trabajo y ordenadores personales"
                class="img-fluid">
            </a>
        </div>
        <div class="col-xl-2 col-lg-4 col-6">
            <a href="/sistemas-embebidos/">
                <img src="/wp-content/uploads/2020/01/embeddedsystems.jpg" 
                alt="Sistemas embebidos" 
                title="Sistemas embebidos"
                class="img-fluid">
            </a>
        </div>
        <div class="col-xl-2 col-lg-4 col-6">
            <a href="/seo-sem-y-marketing-para-webs/">
                <img src="/wp-content/uploads/2020/01/seo-sem-marketing.jpg" 
                alt="SEO, SEM y marketing para webs" 
                title="SEO, SEM y marketing para webs"
                class="img-fluid">
            </a>
        </div>
        <div class="col-xl-2 col-lg-4 col-6">
            <a href="/consultoria-asesoramiento-informatico/">
                <img src="/wp-content/uploads/2020/01/contact.jpg" 
                alt="Consultoría y asesoramiento informático" 
                title="Consultoría y asesoramiento informático"
                class="img-fluid">
            </a>
        </div>
    </div>
    <div class="row footer footer-main">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-4 sidebar">
                    <?php dynamic_sidebar('sidebar-footer-left'); ?>
                </div>
                <div class="col-md-4 sidebar">
                    <?php dynamic_sidebar('sidebar-footer-center'); ?>
                </div>
                <div class="col-md-4 sidebar">
                    <?php dynamic_sidebar('sidebar-footer-right'); ?>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row footer footer-post">
        <div class="col-md-6 sign">
            <p>© <?= date('Y'); ?> JnjSite.com - MIT license</p>
            <p>Sitio hecho sobre <span class="icon-wordpress"></span> WordPress, diseño y programación del 
            <a href="https://github.com/jaimenj/looking-for-the-100-points"
            target="_blank">tema</a> por Jnj.</p>
        </div>
        <div class="col-md-6">
            <div class="socials">
                <a rel="nofollow noopener noreferrer" 
                class="social-icon" 
                title="E-mail" 
                aria-label="E-mail" 
                href="mailto:info@jnjsite.com" 
                target="_blank" 
                data-wpel-link="external">
                    <span class="icon-mail4"></span>    
                </a>
                <a rel="noopener noreferrer nofollow external" 
                class="social-icon" 
                title="Linkedin"
                aria-label="Contáctame en LinkedIn" 
                href="https://es.linkedin.com/in/jaimeninoles" 
                target="_blank" 
                data-wpel-link="external">
                    <span class="icon-linkedin"></span>
                </a>
                <a rel="noopener noreferrer nofollow external" 
                class="social-icon" 
                title="Facebook" 
                aria-label="Sígueme en Facebook" 
                href="https://www.facebook.com/jaimeninolesinformatico/" 
                target="_blank" 
                data-wpel-link="external">
                    <span class="icon-facebook2"></span>
                </a>
                <a rel="noopener noreferrer nofollow external" 
                class="social-icon" 
                title="Twitter" 
                aria-label="Sígueme en Twitter" 
                href="https://twitter.com/jaimeninoles" 
                target="_blank" 
                data-wpel-link="external">
                    <span class="icon-twitter"></span>
                </a>
                <a rel="noopener noreferrer nofollow external" 
                class="social-icon" 
                title="Github" 
                aria-label="Sígueme en Github" 
                href="https://github.com/jaimenj" 
                target="_blank" 
                data-wpel-link="external">
                    <span class="icon-github"></span>
                </a>
                <a rel="nofollow noopener noreferrer" 
                class="social-icon" 
                title="Suscríbete a mi feed RSS"
                aria-label="Suscríbete a mi feed RSS" 
                href="https://jnjsite.com/feed/rss/" 
                target="_blank" 
                data-wpel-link="internal">
                    <span class="icon-rss"></span>
                </a>
            </div>
        </div>
    </div>

    <?php
    wp_footer();
    ?>

</body>
</html>
