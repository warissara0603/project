<?php
session_start();

require_once "../connectDB.php";

if (!$_SESSION['userid']) {
  header("Location: index.php");
} else {

?>

<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- title -->
  <title>Hedkorleaw</title>

  <!-- favicon -->
  <link rel="shortcut icon" type="image/png" href="../assets/img/firstpage/logo_one.png" />
  <!-- google font -->
  <link
    href="https://fonts.googleapis.com/css?family=Noto Sans Thai"
    rel="stylesheet"
  />
  <!-- Tailwind is included -->
  <link rel="stylesheet" href="css/main.css?v=1628755089081">

  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png"/>
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png"/>
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png"/>
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#00b4b6"/>

  <meta name="description" content="Admin One - free Tailwind dashboard">

  <meta property="og:url" content="https://justboil.github.io/admin-one-tailwind/">
  <meta property="og:site_name" content="JustBoil.me">
  <meta property="og:title" content="Admin One HTML">
  <meta property="og:description" content="Admin One - free Tailwind dashboard">
  <meta property="og:image" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1920">
  <meta property="og:image:height" content="960">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="Admin One HTML">
  <meta property="twitter:description" content="Admin One - free Tailwind dashboard">
  <meta property="twitter:image:src" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
  <meta property="twitter:image:width" content="1920">
  <meta property="twitter:image:height" content="960">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130795909-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-130795909-1');
  </script>
<style>
  td img{
    height: 100px;
  }
  td{
    height: 130px;
  }
</style>
</head>
<body>

<div id="app">
  <nav id="navbar-main" class="navbar is-fixed-top">
    <div class="navbar-brand">
      <a class="navbar-item mobile-aside-button">
        <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
      </a>
      
    </div>
    <div class="navbar-brand is-right">
      <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
        <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
      </a>
    </div>
    <div class="navbar-menu" id="navbar-menu">
      <div class="navbar-end">
        </div>
        <div class="navbar-item dropdown has-divider has-user-avatar">
          <a class="navbar-link">
            <div class="is-user-name"><span>ผู้ดูแลระบบ</span></div>
            <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
          </a>
          <div class="navbar-dropdown">
            <a href="profile.php" class="navbar-item">
              <span class="icon"><i class="mdi mdi-account"></i></span>
              <span>My Profile</span>
            </a>
            <a class="navbar-item">
              <span class="icon"><i class="mdi mdi-settings"></i></span>
              <span>ตั้งค่า</span>
            </a>
            <hr class="navbar-divider">
          <a href="../logout.php" class="navbar-item" >
            <span class="icon"><i class="mdi mdi-logout"></i></span>
            <span>ออกจากระบบ</span>
          </a>
        </div>
      </div>
      <a href="../logout.php" title="Log out" class="navbar-item desktop-icon-only">
        <span class="icon"><i class="mdi mdi-logout"></i></span>
        <span>Log out</span>
      </a>
      </div>
    </div>
  </nav>
  
  <aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
      <div>
        <img src="../assets/img/logo_four_white.png" alt="">
      </div>
    </div>
    <div class="menu is-menu-main">
      <ul class="menu-list">
        <li class="active">
          <a href="index.php">
            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
            <span class="menu-item-label">หน้าหลัก</span>
          </a>
        </li>
      </ul>
      <p class="menu-label">เมนู</p>
      <ul class="menu-list">
        <li>
          <a class="dropdown">
            <span class="icon"><i class="mdi mdi-account-circle"></i></span>
            <span class="menu-item-label">ข้อมูลผู้ใช้</span>
            <span class="icon"><i class="mdi mdi-plus"></i></span>
          </a>
          <ul>
            <li>
              <a href="employeetables.php">
                <span>พนักงาน</span>
              </a>
            </li>
            <li>
              <a href="membertables.php">
                <span>สมาชิก</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="--set-active-tables-html">
          <a href="#">
            <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
            <span class="menu-item-label">ข่าวประชาสัมพันธ์</span>
          </a>
        </li>
        <li class="--set-active-forms-html">
          <a href="board.php">
            <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
            <span class="menu-item-label">โปรโมชั่นสินค้า</span>
          </a>
        </li>
        
          </ul>
        </li>
      </ul>
    </div>
  </aside>
<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <li>ผู้ดูแลระบบ</li>
      <li>ข่าวประชาสัมพันธ์</li>
    </ul>
    
  </div>
</section>
  <section class="section main-section">
    
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
        
          ข่าวประชาสัมพันธ์
        </p>
        <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>
      </header>
      <div class="card-content">
        <table>
          <thead>
          <tr>
            <th style="width: 300px; padding-left: 20px;">รูป</th>
            <th style="width: 500px;">ชื่อประชาสัมพันธ์</th>
            <th style="width: 500px;">รายละเอียดประชาสัมพันธ์</th>
            <th></th>
          </tr>
          </thead>
          <?php

              $sql = "SELECT * FROM `new`;";
              $result = mysqli_query($conn,$sql);
              while($row = mysqli_fetch_array($result)){
            ?>
          <tbody>
          <tr>
            
            <td data-label="username" style="padding-left: 20px;"><img src="../assets/img/latest-news/<?php echo $row['pic_new']?>" alt=""></td>
            <td data-label="number"><?php echo $row['title']?></td>
            <td data-label="number"><?php echo $row['detail']?></td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small green --jb-modal"  data-target="sample-modal-2" type="button">
                  <a href="editornews.php?id=<?php echo $row['new_id']?>"><span class="icon"><i class="mdi mdi-eye"></i></span></a>
                </button>
                <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                  <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>

          </tbody>
          <?php } ?>
        </table>
        <div class="table-pagination">
          <div class="flex items-center justify-between">
            <div class="buttons">
              <button type="button" class="button active">1</button>
              <button type="button" class="button">2</button>
              <button type="button" class="button">3</button>
            </div>
            <small>Page 1 of 3</small>
          </div>
        </div>
      </div>
    </div>

  </section>

  <footer class="footer">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
      <div class="flex items-center justify-start space-x-3">
        <div>
          Copyrights © 
        </div>
        <script>
          document.write(new Date().getFullYear());
        </script>
        <div>
          <p><a href="../index.php" target="_blank">hedkorleawOTOP,</a> All Rights
            Reserved.</p>
        </div>
      </div>

    </div>
</footer>
<div id="sample-modal" class="modal">
  <div class="modal-background --jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">ลบข่าวประชาสัมพ์</p>
    </header>
    <section class="modal-card-body">
      <p>คุณต้องการที่จะลบข่าวประชาสัมพ์นี้ใช่หรือไม่</p>

    </section>
    <footer class="modal-card-foot">
      <button class="button --jb-modal-close">ยกเลิก</button>
      <a href="CRUDnews/deletenews.php?id=<?php echo $row['new_id']?>"><button class="button red --jb-modal-close">ยืนยันการลบ</button></a>
    </footer>
  </div>
</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="js/main.min.js?v=1628755089081"></script>


<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '658339141622648');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=658339141622648&ev=PageView&noscript=1"/></noscript>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>
</html>
<?php } ?>