<?php

/*
Template Name: Sidebar
*/
?>

<?php get_header(); ?>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-globe"></span> Logo</a>
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
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search</button>
                </form>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container-fluid">

        <!-- Left Column -->
        <div class="col-sm-3">

            <!-- List-Group Panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">Execute Side Bar 1</h1>
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item">Resource Taxing</a>
                    <a href="#" class="list-group-item">Premier Niche Markets</a>
                    <a href="#" class="list-group-item">Dynamically Innovate</a>
                    <a href="#" class="list-group-item">Objectively Innovate</a>
                    <a href="#" class="list-group-item">Proactively Envisioned</a>
                </div>
            </div>

            <!-- Text Panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">Execute Side Bar 2</h1>
                </div>

                <div class="panel-body">
                    <p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</p>

                </div>
            </div>

            <!-- Text Panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Side Bar 3
                    </h3>
                </div>
                <div class="panel-body">
                    <p>Proactively envisioned multimedia based expertise and cross-media growth strategies.</p>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default">Button 1</button>
                        <button type="button" class="btn btn-default">Button 2</button>
                        <button type="button" class="btn btn-default">Button 3</button>
                    </div>
                </div>
            </div>

        </div>
        <!--/Left Column-->


        <!-- Center Column -->
        <div class="col-sm-6">


            <!-- Articles -->
            <?php while(have_posts() ) : the_post();  ?>
            <div class="row">
                <article class="col-xs-12">
                  <h2>  <a  href="<?php the_permalink(); ?>"> <?php the_title(); ?></a> </h2>
                      <p> <?php the_content(); ?></p>

                    <p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
                    <ul class="list-inline">
                        <li><a href="#">Today</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-comment"></span> 2 Comments</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-share"></span> 8 Shares</a></li>
                    </ul>
                </article>
                  <?php endwhile; ?>
            </div>
            <hr>


        </div>
        <!--/Center Column-->


        <!-- Right Column -->
        <div class="col-sm-3">

            <!-- Form -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-log-in"></span> Log In
                    </h3>
                </div>
                <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="uid" name="uid" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-default">Log In</button>
                    </form>
                </div>
            </div>

            <!-- Progress Bars -->

            <!-- Carousel -->


        </div>
        <!--/Right Column -->

    </div>
    <!--/container-fluid-->



</body>
<?php get_footer(); ?>
