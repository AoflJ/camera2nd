<?php $file_name =basename($_SERVER['SCRIPT_FILENAME'],".php"); ?>
<nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-dark bg-alpha">
            
            <div class="container">
                <a class="navbar-brand" href="index.php">
                        <img src="images/logo.jpg"
                        width="50" height="30" class="d-inline-block align-top" alt="">
                        Camera2nd
                </a>
            
                <button class="navbar-toggler" type="button" 
                data-toggle="collapse" data-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" 
                aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse text-center" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item dropdown <?php echo $file_name == 'index' ? 'active': '' ?>">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Products
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="dslr.php">DSLR</a>
                                <a class="dropdown-item" href="canonmrr.php">Mirrorless</a>
                                <a class="dropdown-item" href="canonlen.php">Lens</a>
                                <a class="dropdown-item" href="tripods.php">Tripods</a>
                                <a class="dropdown-item" href="bags.php">Bags</a>
                                <a class="dropdown-item" href="filter.php">Filter</a>
                            </div>
                        </li>
                        <li class="nav-item <?php echo $file_name == 'contact' ? 'active': '' ?>">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0" method ="post" action ="search.php">
                        <input class="form-control mr-sm-2 search" type="search" placeholder="Search" aria-label="Search" style="width: 300px;" name="txtsearch" >
                        <button class="btn btn btn-outline-light my-2 my-sm-0 " type="submit"style="border-radius: 15px;">Search</button>
                    </form> 
                    <?php if(isset($_SESSION['id'])) {?>
                        <form class="form-inline my-2 my-lg-0 ml-auto">
                                <button class="btn btn btn-outline-light my-2 my-sm-0 mr-2 " type="submit"style="border-radius: 10px; ">
                                <?php echo $_SESSION['name'];?>
                                </button>
                        </form>
                        <form class="form-inline my-2 my-lg-0" action="logout.php">        
                                <button class="btn btn btn-outline-light my-2 my-sm-0  " type="submit"style="border-radius: 10px; ">Log Out</button>
                        </form> 
                    <?php }else {?>
                        <form class="form-inline my-2 my-lg-0 ml-auto" action="login.php">
                                <button class="btn btn btn-outline-light my-2 my-sm-0 mr-2 " type="submit"style="border-radius: 10px; ">Log In</button>
                        </form>
                        <form class="form-inline my-2 my-lg-0" action="signup.php">       
                                <button class="btn btn btn-outline-light my-2 my-sm-0  " type="submit"style="border-radius: 10px; ">Sign Up</button>
                        </form> 
                    <?php } ?> 
                </div>
            </div>
        </nav>