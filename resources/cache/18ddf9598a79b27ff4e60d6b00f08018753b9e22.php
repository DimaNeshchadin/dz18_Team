


<?php $__env->startSection('content'); ?>
    <section class="page_breadcrumbs ds background_cover background_overlay section_padding_top_65 section_padding_bottom_65">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="highlight">Team type 1</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ls page_portfolio section_padding_top_150 section_padding_bottom_130">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20">
                        <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="isotope-item col-lg-4 col-md-6 col-sm-12">
                            <div class="vertical-item content-padding with_shadow text-center rounded overflow-hidden">
                                <div class="item-media">
                                    <img src="<?php echo e($team->img); ?>" alt="" />
                                </div>
                                <div class="item-content">
                                    <p class="small-text highlight3 bottommargin_0"><?php echo e($team->position); ?></p>
                                    <h4 class="topmargin_0 hover-color3">
                                        <a href="team-single.html"><?php echo e($team->name); ?></a>
                                    </h4>
                                    <p>
                                        <?php echo e($team->title); ?>

                                    </p>
                                    <p class="color2links">
                                        <a href="<?php echo e($team->facebook); ?>" class="social-icon soc-facebook"></a>
                                        <a href="<?php echo e($team->twitter); ?>" class="social-icon soc-twitter"></a>
                                        <a href="<?php echo e($team->google); ?>" class="social-icon soc-google"></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!--                        <div class="isotope-item col-lg-4 col-md-6 col-sm-12">
                            <div class="vertical-item content-padding with_shadow text-center rounded overflow-hidden">
                                <div class="item-media">
                                    <img src="images/team/02.jpg" alt="" />
                                </div>
                                <div class="item-content">
                                    <p class="small-text highlight3 bottommargin_0">cat groomer</p>
                                    <h4 class="topmargin_0 hover-color3">
                                        <a href="team-single.html">Rosie White</a>
                                    </h4>
                                    <p>
                                        Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.
                                    </p>
                                    <p class="color2links">
                                        <a href="#" class="social-icon soc-facebook"></a>
                                        <a href="#" class="social-icon soc-twitter"></a>
                                        <a href="#" class="social-icon soc-google"></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="isotope-item col-lg-4 col-md-6 col-sm-12">
                            <div class="vertical-item content-padding with_shadow text-center rounded overflow-hidden">
                                <div class="item-media">
                                    <img src="images/team/03.jpg" alt="" />
                                </div>
                                <div class="item-content">
                                    <p class="small-text highlight3 bottommargin_0">dog groomer</p>
                                    <h4 class="topmargin_0 hover-color3">
                                        <a href="team-single.html">Estelle Marsh</a>
                                    </h4>
                                    <p>
                                        Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.
                                    </p>
                                    <p class="color2links">
                                        <a href="#" class="social-icon soc-facebook"></a>
                                        <a href="#" class="social-icon soc-twitter"></a>
                                        <a href="#" class="social-icon soc-google"></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="isotope-item col-lg-4 col-md-6 col-sm-12">
                            <div class="vertical-item content-padding with_shadow text-center rounded overflow-hidden">
                                <div class="item-media">
                                    <img src="images/team/04.jpg" alt="" />
                                </div>
                                <div class="item-content">
                                    <p class="small-text highlight3 bottommargin_0">rabbit groomer</p>
                                    <h4 class="topmargin_0 hover-color3">
                                        <a href="team-single.html">Alberta Rogers</a>
                                    </h4>
                                    <p>
                                        Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.
                                    </p>
                                    <p class="color2links">
                                        <a href="#" class="social-icon soc-facebook"></a>
                                        <a href="#" class="social-icon soc-twitter"></a>
                                        <a href="#" class="social-icon soc-google"></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="isotope-item col-lg-4 col-md-6 col-sm-12">
                            <div class="vertical-item content-padding with_shadow text-center rounded overflow-hidden">
                                <div class="item-media">
                                    <img src="images/team/05.jpg" alt="" />
                                </div>
                                <div class="item-content">
                                    <p class="small-text highlight3 bottommargin_0">cat groomer</p>
                                    <h4 class="topmargin_0 hover-color3">
                                        <a href="team-single.html">Bernard Lambert</a>
                                    </h4>
                                    <p>
                                        Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.
                                    </p>
                                    <p class="color2links">
                                        <a href="#" class="social-icon soc-facebook"></a>
                                        <a href="#" class="social-icon soc-twitter"></a>
                                        <a href="#" class="social-icon soc-google"></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="isotope-item col-lg-4 col-md-6 col-sm-12">
                            <div class="vertical-item content-padding with_shadow text-center rounded overflow-hidden">
                                <div class="item-media">
                                    <img src="images/team/06.jpg" alt="" />
                                </div>
                                <div class="item-content">
                                    <p class="small-text highlight3 bottommargin_0">rabbit groomer</p>
                                    <h4 class="topmargin_0 hover-color3">
                                        <a href="team-single.html">Frank Stephens</a>
                                    </h4>
                                    <p>
                                        Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.
                                    </p>
                                    <p class="color2links">
                                        <a href="#" class="social-icon soc-facebook"></a>
                                        <a href="#" class="social-icon soc-twitter"></a>
                                        <a href="#" class="social-icon soc-google"></a>
                                    </p>
                                </div>
                            </div>
                        </div>
-->

                    </div>
                    <!-- eof .isotope_container.row -->

                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /src/app/resources/views/team.blade.php ENDPATH**/ ?>