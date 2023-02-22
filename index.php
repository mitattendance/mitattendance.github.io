<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MIT ATTENDANCE</title>

    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./styletry.css" />
  </head>
  <body>
    <div class="container">
      <aside>
        <div class="top">
          <div class="logo">
            <img src="./images/20211011_095411.jpg" alt="Logo" />
            <h2>ATD<span class="danger">MIT</span></h2>
          </div>
          <div class="close" id="close-btn">
            <span class="material-icons-sharp"> close </span>
          </div>
        </div>

        <div class="sidebar">
          <a href="https://attendancemit.000webhostapp.com/index.php" class="active">
            <span class="material-icons-sharp"> dashboard </span>
            <h3>Dashboard</h3>
          </a>
          <a href="https://teams.microsoft.com/">
            <span class="material-icons-sharp"> menu_book </span>
            <h3>Course Material</h3>
          </a>
          <a href="https://lighthouse.manipal.edu/d2l/login">
            <span class="material-icons-sharp"> assignment </span>
            <h3>Assignments</h3>
          </a>
          <a href="https://attendancemit.000webhostapp.com/list.php">
            <span class="material-icons-sharp"> bar_chart </span>
            <h3>Attendance</h3>
          </a>
          <a href="mailto:mithun.kanchan@manipal.edu">
            <span class="material-icons-sharp"> mail </span>
            <h3>Contact Faculty</h3>
          </a>
          <a href="https://impartus.manipal.edu">
            <span class="material-icons-sharp"> videocam </span>
            <h3>Impartus</h3>
          </a>
          <a href="https://forms.gle/CEKbwz1MLu4qfXxD7">
            <span class="material-icons-sharp"> bug_report </span>
            <h3>Report Bug</h3>
          </a>
          <a href="https://attendancemit.000webhostapp.com/info.php">
            <span class="material-icons-sharp"> info </span>
            <h3>About</h3>
          </a>
        </div>
      </aside>

      <main>
        <h1>Dashboard</h1>
        <div class="insights">
          <!-- SALES -->
          <div class="sales">
            <span class="material-icons-sharp"> person </span>
            <div class="middle">
              <div class="left">
                <h3>Faculty In-Charge</h3>
                <h1>Mithun Kanchan</h1>
              </div>
            </div>
            <small class="text-muted"> Assistant Professor MIT Manipal </small>
          </div>

          <!-- EXPENSES -->
          <div class="expenses">
            <span class="material-icons-sharp"> precision_manufacturing </span>
            <div class="middle">
              <div class="left">
                <h3>Course Details</h3>
                <h1>Basic Mech Engineering</h1>
              </div>
            </div>
            <small class="text-muted"> MIE-1071 3 Credit Course </small>
          </div>

          <!-- INCOME -->
          <div class="income">
            <span class="material-icons-sharp"> code </span>
            <div class="middle">
              <div class="left">
                <h3>Developer</h3>
                <h1>Mandar Chaudhari</h1>
              </div>
            </div>
            <small class="text-muted"> DSE-MIT Manipal </small>
          </div>
        </div>

        <div class="recent-orders">
          <h2>Attendance BME I-Section</h2>
          <table id="recent-orders--table">
            <thead>
              <tr>
                <th>Roll Number</th>
                <th>Name</th>
                <th>Attendance Count</th>
                <th></th>
              </tr>
            </thead>
                            <?php
include_once 'conn.php';

$sql1 = "SELECT * FROM lectures;";
$result1 = mysqli_query($conn, $sql1);
$checkresult1 = mysqli_num_rows($result1);

if($checkresult1 > 0)
{
    while($row1 = mysqli_fetch_assoc($result1))
    {
        $d = $row1['dates'];

        //echo "<th>$d</th>"; 
    };
}
?>
              </tr>
            </thead>
            <tbody>

<?php
include_once 'conn.php';

$sql = "SELECT * FROM students;";
$result = mysqli_query($conn, $sql);
$checkresult = mysqli_num_rows($result);

if($checkresult > 0)
{
 
    while($row = mysqli_fetch_assoc($result))
    {
        $e = $row['enroll'] ;
        $n = $row['sname'] ;
        $a =  $row['attcoun'];

        echo "<tr>
                <td>$e</td>
                <td>$n</td>
                <td>$a</td>
                <td><td>";
                
                $sql1 = "SELECT * FROM lectures;";
                $result1 = mysqli_query($conn, $sql1);
                $checkresult1 = mysqli_num_rows($result1);
                
                if($checkresult1 > 0)
                {
                    while($row1 = mysqli_fetch_assoc($result1))
                    {
                        $d = $row1['dates'];
                        $sd = $row[$d];
                        //echo "<td>$sd</td>"; 
                    };
                }

            echo "</tr>"; 
    };
}
?>
          </table>
          <a href="https://attendancemit.000webhostapp.com/list.php">Show Daywise Attendance</a>
        </div>
      </main>

      <div class="right">
        <div class="top">
          <button id="menu-btn">
            <span class="material-icons-sharp"> menu </span>
          </button>
          <div class="theme-toggler">
            <span class="material-icons-sharp active"> light_mode </span>
            <span class="material-icons-sharp"> dark_mode </span>
          </div>
          <div class="profile">
            <div class="info">
              <p>Hey, <b>Students</b></p>
              <small class="text-muted">Admin</small>
            </div>
            <div class="profile-photo">
              <img src="./images/student.png" alt="Profile Picture" />
            </div>
          </div>
        </div>

        <div class="recent-updates">
          <h2>Recent Updates</h2>
          <div class="updates">
            <div class="update">
            <div class="profile-photo"> <img src="./images/exam.png">
            </div>
            <div class="message">
            <p>
            <b>Insem - 1</b>
            </p>
            <small class="text-muted">10 March 2023
            </small>
            </div>
            </div>
            
            <div class="update">
            <div class="profile-photo"> <img src="./images/exam.png">
            </div>
            <div class="message">
            <p>
            <b>Insem - 2</b>
            </p>
            <small class="text-muted">18 April 2023
            </small>
            </div>
            </div>
            
            <div class="update">
            <div class="profile-photo"> <img src="./images/exam.png">
            </div>
            <div class="message">
            <p>
            <b>EndSem</b>
            </p>
            <small class="text-muted">22 May 2023
            </small>
            </div>
            </div>
        </div>

        <div class="sales-analytics">
          <h2>Chapter List</h2>
          <div id="analytics">
              
                <div class="item online">
                <div class="icon">
                <span class="material-icons-sharp"> auto_stories </span>
                </div>
                <div class="right">
                <div class="info">
                <h3>PROPERTIES OF STEAM</h3>
                <small class="text-muted"> Chapter 1
                </small>
                </div>
                </div>
                </div>
                
                <div class="item offline">
                <div class="icon">
                <span class="material-icons-sharp"> auto_stories </span>
                </div>
                <div class="right">
                <div class="info">
                <h3>STEAM BOILERS</h3>
                <small class="text-muted"> Chapter 2
                </small>
                </div>
                </div>
                </div>
                
                <div class="item customers">
                <div class="icon">
                <span class="material-icons-sharp"> auto_stories </span>
                </div>
                <div class="right">
                <div class="info">
                <h3>POWER TRANSMISSION</h3>
                <small class="text-muted"> Chapter 3
                </small>
                </div>
                </div>
                </div>
                
                <div class="item online">
                <div class="icon">
                <span class="material-icons-sharp"> auto_stories </span>
                </div>
                <div class="right">
                <div class="info">
                <h3>MACHINE TOOLS</h3>
                <small class="text-muted"> Chapter 4
                </small>
                </div>
                </div>
                </div>
                
                <div class="item offline">
                <div class="icon">
                <span class="material-icons-sharp"> auto_stories </span>
                </div>
                <div class="right">
                <div class="info">
                <h3>IC ENGINES</h3>
                <small class="text-muted"> Chapter 5
                </small>
                </div>
                </div>
                </div>
                
                <div class="item customers">
                <div class="icon">
                <span class="material-icons-sharp"> auto_stories </span>
                </div>
                <div class="right">
                <div class="info">
                <h3>REFRIGERATION</h3>
                <small class="text-muted"> Chapter 6
                </small>
                </div>
                </div>
                </div>
                
                <div class="item online">
                <div class="icon">
                <span class="material-icons-sharp"> auto_stories </span>
                </div>
                <div class="right">
                <div class="info">
                <h3>CASTING AND FORGING</h3>
                <small class="text-muted"> Chapter 7
                </small>
                </div>
                </div>
                </div>
                
                <div class="item offline">
                <div class="icon">
                <span class="material-icons-sharp"> auto_stories </span>
                </div>
                <div class="right">
                <div class="info">
                <h3>WELDING SOLDERING & BRAZING</h3>
                <small class="text-muted"> Chapter 8
                </small>
                </div>
                </div>
                </div>
                
                <div class="item customers">
                <div class="icon">
                <span class="material-icons-sharp"> auto_stories </span>
                </div>
                <div class="right">
                <div class="info">
                <h3>ENGINEERING MATERIALS</h3>
                <small class="text-muted"> Chapter 9
                </small>
                </div>
                </div>
                </div>
                <footer class="ct-footer">
      <div class="inner-right">
        <br>
        <center><h1>Disclaimer</h1></center>
        <br>
        <center><p>This website is purely made for personal use and has no connection with the official communication channel of MIT Manipal also known as "SLCM".</p></center>
        <br>
        <center><p>Copyright © 2023 Mandar Chaudhari</p></center>
      </div>
      </footer>
          </div>
        </div>
      </div>
    </div>
    <script src="./constants/recent-order-data.js"></script>
    <script src="./constants/update-data.js"></script>
    <script src="./constants/sales-analytics-data.js"></script>
    <script src="./index.js"></script>
  </body>
</html>
