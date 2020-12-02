<?php get_header(); ?>

<div class="container-fluid">
    <div class="row secondary-menu">
        <div class="col-sm-12 float-right nav-links1">
            <nav class="navbar1">
                <a class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
                <div class="navbar-links1">
                    <ul class="nav nav-tabs float-right" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active play" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                1. Welcome Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="your-options-tab" data-toggle="tab" href="#your-options" role="tab" aria-controls="your-options" aria-selected="false">
                                2. Your Options
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="why-home-tab" data-toggle="tab" href="#why-home" role="tab" aria-controls="why-home" aria-selected="false">
                                3. Why Home Instead
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="support-tab" data-toggle="tab" href="#support" role="tab" aria-controls="support" aria-selected="false">
                                4. Support when you need it
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                5. Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

<div class="tab-content" id="myTabContent">
    
    <?php
        get_template_part( 'template-parts/tab1', 'welcomeHome' );
        get_template_part( 'template-parts/tab2', 'yourOptions' );
        get_template_part( 'template-parts/tab3', 'whyHome' );
        get_template_part( 'template-parts/tab4', 'support' );
        get_template_part( 'template-parts/tab5', 'contactUs' );
    ?>

</div>

<?php get_footer(); ?>