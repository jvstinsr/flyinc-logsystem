<nav class="navbar navbar-expand-lg navbar-light bg-white mx-0 px-sm-5 text-l" id="navbar">
    <a class="navbar-brand cursor-pointer" onclick="location.href='<?php echo base_url();?>/home'">
        <img src="img/wappen.png" height="30" alt=""><span> First Black Platoon</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item px-0 px-sm-3">
                <?php $result = $active==HOME ? ' active' : null;
                echo anchor('home', HOME, 'class="nav-link text-primary' . $result . '"'); ?>
            </li>
            <li class="nav-item px-0 px-sm-3">
                <?php $result = $active==GALLERY ? ' active' : null;
                echo anchor('gallery?page=1&categorie=training', GALLERY, 'class="nav-link text-primary' . $result . '"'); ?>
            </li>
            <li class="nav-item px-0 px-sm-3">
                <?php $result = $active==CALENDAR ? ' active' : null;
                echo anchor('calendar?categorie=upcoming', CALENDAR, 'class="nav-link text-primary' . $result . '"'); ?>
            </li>
        </ul>
    </div>
</nav>