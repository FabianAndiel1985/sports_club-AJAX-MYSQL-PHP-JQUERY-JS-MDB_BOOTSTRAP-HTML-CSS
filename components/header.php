
    <header>
      <div class="container">
         <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark #000000 black">
          <!-- Navbar brand -->
          <a class="navbar-brand" href="#">Navbar</a>
          <!-- Collapse button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Collapsible content -->
          <div class="collapse navbar-collapse" id="basicExampleNav">
            <!-- Links -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="main.php">Courses
                  <span class="sr-only">(current)</span>
                </a>
              </li>

              <?php

              if ($_SESSION['user_status'] == 'admin') { ?>

                <li class="nav-item">
                  <a class="nav-link" href="admin_new_course.php">Create new course</a>
                </li>

              <?php } ?>

              <?php if ($_SESSION['user_status'] == 'admin' || $_SESSION['user_status'] == 'trainer') { ?>

                <li class="nav-item">
                  <a class="nav-link" href="trainer_members_display.php">Members in courses</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="trainer_business.php">Business</a>
                </li>

              <?php } ?>

              <?php if ($_SESSION['user_status'] == 'member' || $_SESSION['user_status'] == 'trainer') { ?>

                <li class="nav-item">
                  <a class="nav-link" href="contact_us.php">Contact Us</a>
                </li>

              <?php } ?>

              <?php if ($_SESSION['user_status'] == 'admin') { ?>

                <li class="nav-item">
                  <a class="nav-link" href="admin_messages.php">Messages</a>
                </li>

              <?php } ?>
              
            </ul>
            <!-- Links -->
           
          </div>
          <!-- Collapsible content -->
        </nav>
        <!--/.Navbar-->
      
      </div> <!-- end bs container -->
    </header>