<?php get_header(); ?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Logo and responsive toggle -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <span class="glyphicon glyphicon-fire"></span>
                Logo
            </a>
        </div>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Products</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="about-us">
                        <li><a href="#">Engage</a></li>
                        <li><a href="#">Pontificate</a></li>
                        <li><a href="#">Synergize</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Search -->
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<div class="jumbotron feature">
    <div class="container">
        <h1><span class="glyphicon glyphicon-equalizer"></span> <?php bloginfo('title'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
        <p><a class="btn btn-default" href="#">Engage Now</a></p>
    </div>
</div>

<!-- Content -->
<div class="container">

    <!-- Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Superior Collaboration
                <small>Visualize Quality</small>
            </h1>
            <p>Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products.</p>
        </div>
    </div>
    <!-- /.row -->

    <!-- Feature Row -->




    <div class="row">

             <div class="col-md-8">
               <?php while(have_posts() ) : the_post();  ?>

          <article class="col-md-6 article-intro">

              <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail();   ?>

              </a>
              <h3>
                  <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
                  <h6> published <?php the_time ('M-d-Y'); ?> <?php the_time(); ?> </h6>
              </h3>
              <p> <?php the_excerpt(); ?></p>
          </article>
          <?php endwhile; ?>
        </div>
             <div class="col-md-4">

                <?php dynamic_sidebar('right_sidebar'); ?>

             </div>


    </div>










    <!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer(); ?>
