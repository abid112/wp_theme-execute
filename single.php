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



<!-- Content -->
<div class="container">

    <!-- Heading -->
  
    <!-- /.row -->

    <!-- Feature Row -->
    
    
    
    
       <?php while(have_posts() ) : the_post();  ?> 
    <div class="row">
        
        <article class="col-md-12 article-intro">
            <div>
                <?php the_post_thumbnail() ?>
                <!-- <img class="img-responsive img-rounded" src="holder.js/700x300" alt=""> -->
            </div>
            <h3>
                <p> <?php the_title(); ?></p>
                <h6> published <?php the_time ('M-d-Y'); ?> <?php the_time(); ?> </h6>
            </h3>
            <p> <?php the_content(); ?></p>
        </article>
        <?php endwhile; ?>
        
    </div>
        
        
        
    
    
    
    
    
    <!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer(); ?>
