<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
}
?>
<?php include_once "header.php"; ?>

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!----======== CSS ======== -->
  <link rel="stylesheet" href="css/sidebars.css" />
  <link rel="stylesheet" href="css/innerNav.css" />
  <link rel="stylesheet" href="css/cards.css" />
  <!-- <link rel="stylesheet" href="style.css" /> -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

  <!----===== Boxicons CSS ===== -->
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />

  <!--<title>Dashboard Sidebar Menu</title>-->
</head>

<body>
  <nav class="sidebar close">
    <header>
      <div class="image-text">
        <span class="image">
          <!--<img src="logo.png" alt="">-->
        </span>

        <div class="text logo-text">
          <span class="name">Ed-Pool</span>
          <span class="profession">Acedemy</span>
        </div>
      </div>

      <i class="bx bx-chevron-right toggle"></i>
    </header>

    <div class="menu-bar">
      <div class="menu">
        <li class="search-box">
          <i class="bx bx-search icon"></i>
          <input type="text" placeholder="Search..." />
        </li>

        <ul class="menu-links">
          <li class="nav-link">
            <a href="dashboard.php">
              <i class="bx bxs-dashboard icon"></i>
              <span class="text nav-text">Dashboard</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="homepage.php">
              <i class="bx bx-home-alt icon"></i>
              <span class="text nav-text">Homepage</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="test.php">
              <i class="bx bx-math icon"></i>
              <span class="text nav-text">Tests/assessment</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="resource.php">
              <i class="bx bx-pie-chart-alt icon"></i>
              <span class="text nav-text">resources</span>
            </a>
          </li>
        </ul>
      </div>

      <?php
      $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
      if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
      }
      ?>

      <div class="bottom-content">
        <li class="">
          <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">
            <i class="bx bx-log-out icon"></i>
            <span class="text nav-text">Logout</span>
          </a>

        </li>

        <li class="mode">
          <div class="sun-moon">
            <i class="bx bx-moon icon moon"></i>
            <i class="bx bx-sun icon sun"></i>
          </div>
          <span class="mode-text text">Dark mode</span>

          <div class="toggle-switch">
            <span class="switch"></span>
          </div>
        </li>
      </div>
    </div>
  </nav>

  <section class="home">
    <div class="innernav">
      <div class="text">Dashboard</div>
      <div class="cards-1">
        <div class="row">
          <div class="col-sm-3" style="width:100%; padding: 5px;">
            <div class="card">
              <div class="card-body">
                <iframe src="audio/audio.php" width="100%" scrolling="no" height="90px" style="border:none;overflow:hidden;margin:0px;border-radius:13px;">
                </iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cards-2">
      <div class="row" style="height:790px;">
        <div class="col-sm-3" style="width:80%;">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Special title treatment</h5> -->
              <div class="text">Trignometry </div>
              <p class="card-text" style="margin-left:50px">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
              </p>
              <br>
              <iframe src="https://show.zohopublic.in/publish/6yygdce6d32bf9adc43508c57fce9a3326c8d" width="100%" height="600px" frameborder="0">This is an embedded <a target="_blank" href="https://office.com">Microsoft Office</a> presentation, powered by <a target="_blank" href="https://office.com/webapps">Office</a>.</iframe>
              <br>
              <a href="dashboard.php" class="btn btn-primary">Go Back </a>
            </div>
          </div>
        </div>
        <div class="col-sm-3" style="width:20%;">
          <div class="card">
            <div class="card-body">
              <iframe src="users.php" width="100%" height="600" style="border:none;overflow:hidden;margin:0px;border-radius:13px;">
              </iframe>
              <h5 class="card-title">AD/Chat<h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="javascript/users.js"></script>
  <script src="javascript/chat.js"></script>
  <script>
    const body = document.querySelector("body"),
      sidebar = body.querySelector("nav"),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");

    toggle.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    });

    searchBtn.addEventListener("click", () => {
      sidebar.classList.remove("close");
    });

    modeSwitch.addEventListener("click", () => {
      body.classList.toggle("dark");

      if (body.classList.contains("dark")) {
        modeText.innerText = "Light mode";
      } else {
        modeText.innerText = "Dark mode";
      }
    });

    // navbar Script

    const navBar = document.querySelector(".navbar");
    allLi = document.querySelectorAll("li");

    allLi.forEach((li, index) => {
      li.addEventListener("click", (e) => {
        // e.preventDefault(); //preventing from submitting
        navBar.querySelector(".active").classList.remove("active");
        li.classList.add("active");

        const indicator = document.querySelector(".indicator");
        indicator.style.transform = `translateX(calc(${index * 90}px))`;
      });
    });
  </script>

</body>

</html>