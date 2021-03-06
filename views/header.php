<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php echo $page['title'] ?>
    </title>
    <link rel="shortcut icon" href="views/img/logo.png">
    <link rel="stylesheet" href="views/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/style.css"> <!-- @todo Refactoring!!!! избавиться от style.css в пользу singlePage.css.css-->
    <link rel="stylesheet" href="views/css/singlePage.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="container-fluid">

<nav class="navbar">
    <div class="container-fluid underline">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand header-nav_logo">
                    <div class="brand-logo__icon"></div>
                    <div class="brand-logo__name">Dnarb</div>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-collapse_offset" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle navbar__browse-btn" data-toggle="dropdown" role="button"
                           aria-haspopup="true"
                           aria-expanded="false">Browse <span class="caret"></span></a>
                        <ul id="list1" class="dropdown-menu">
                            <li><a href="#" class="dropdown-menu__item dropdown-menu__item_category-name">Women</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a class="dropdown-menu__item" href="#">Dresses</a></li>
                            <li><a class="dropdown-menu__item" href="#">Tops</a></li>
                            <li><a class="dropdown-menu__item" href="#">Sweaters/Knits</a></li>
                            <li><a class="dropdown-menu__item" href="#">Jackets/Coats</a></li>
                            <li><a class="dropdown-menu__item" href="#">Blazers</a></li>
                            <li><a class="dropdown-menu__item" href="#">Denim</a></li>
                            <li><a class="dropdown-menu__item" href="#">Leggings/Pants</a></li>
                            <li><a class="dropdown-menu__item" href="#">Skirts/Shorts</a></li>
                            <li><a class="dropdown-menu__item" href="#">Accessories</a></li>
                            <li><a href="#" class="dropdown-menu__item dropdown-menu__item_category-name">Men</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a class="dropdown-menu__item" href="#">Tees/Tank tops</a></li>
                            <li><a class="dropdown-menu__item" href="#">Shirts/Polos</a></li>
                            <li><a class="dropdown-menu__item" href="#">Sweaters</a></li>
                            <li><a class="dropdown-menu__item" href="#">Sweatshirts/Hoodies</a></li>
                            <li><a class="dropdown-menu__item" href="#">Blazers</a></li>
                            <li><a class="dropdown-menu__item" href="#">Jackets/vests</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search for Item...">
                        <button type="submit" class="btn navbar-nav__submit-btn"><i class="fa fa-search"></i></button>
                    </div>

                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" class="navbar-nav__basket-icon"><img src="views/img/basket-icon.png" alt=""></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle navbar-nav__my-account-btn" data-toggle="dropdown"
                           role="button" aria-haspopup="true"
                           aria-expanded="false">My Account <span class="caret"></span></a>
                        <ul id="list2" class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </div><!-- /.container-fluid -->
</nav>
<nav class="nav">
    <div class="container">
        <ul id="list3" class="nav navbar-nav header-menu">
            <li><a class="header-menu__item  <?= $page['activeHome'] ?>" href="index.php?page=main">Home</a></li>
            <li><a class="header-menu__item <?= $page['activeMen'] ?>" href="index.php?page=man">Man</a></li>
            <li><a class="header-menu__item <?= $page['activeWomen'] ?>" href="index.php?page=single">Women</a></li>
            <li><a class="header-menu__item <?= $page['activeKids'] ?>" href="index.php?page=kids">Kids</a></li>
            <li><a class="header-menu__item <?= $page['activeAccessories'] ?>" href="index.php?page=accessories">Accessories</a></li>
            <li><a class="header-menu__item <?= $page['activeFeatured'] ?>" href="index.php?page=featured">Featured</a></li>
            <li><a class="header-menu__item <?= $page['activeHotDials'] ?>" href="index.php?page=hotDeals">Hot Deals</a></li>
        </ul>
    </div>
</nav>
