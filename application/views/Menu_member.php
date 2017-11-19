<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        
        <div class="container">
            
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()."Welcome/About_member"?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()."Welcome/Services_member"?>">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()."Welcome/Contact_member"?>">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="h" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Produk
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                            <a class="dropdown-item" href="<?php echo base_url()."Welcome/Produk_member"?>">Produk</a>
                            <a class="dropdown-item" href="<?php echo base_url()."Welcome/Tentang_produk_member"?>">Tentang Produk</a>
                            
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()."Welcome/Other_page_member"?>">Other Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()."LoginMember/logout"?>">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
