<?php
ob_start();
include __DIR__ . "/includes/auth.php";

/* =========================
   PAGE CONFIG
   ========================= */
$pageTitle = "attendance";
include __DIR__ . "/includes/app_header.php";

/* =========================
   ATTENDANCE LOGIC
   ========================= */

// MANUAL ATTENDANCE DATA
$attendance = [
    "2025-01-11"=>["A","A","A","A","A"],
    "2025-01-10"=>["A","A","A","A","A"],
    "2025-01-09"=>["A","A","A","A","A"],
    "2025-01-08"=>["A","A","A","A","A"],
    "2025-01-06"=>["P","P","P","P","-"],
    "2025-01-05"=>["P","P","P","P","-"],
    "2025-01-02"=>["P","P","P","P","-"],
    "2026-01-01"=>["A","P","P","A","A"],
    "2025-12-30"=>["P","P","P","P","P"],
    "2025-12-29"=>["A","A","-","-","-"],
    "2025-12-27"=>["P","P","P","P","-"],
    "2025-12-26"=>["P","P","P","P","-"],
    "2025-12-23"=>["P","P","A","A","A"],
    "2025-12-22"=>["A","A","-","-","-"],
    "2025-12-19"=>["P","-","-","-","-"],
    "2025-12-18"=>["P","P","P","P","A"],
    "2025-12-16"=>["P","P","P","P","A"],
    "2025-12-13"=>["P","P","P","A","-"],
    "2025-12-12"=>["P","P","P","P","-"],
    "2025-12-11"=>["P","P","P","P","P"],
    "2025-12-09"=>["P","P","P","P","P"],
    "2025-12-08"=>["P","P","P","P","-"],
    "2025-12-05"=>["P","P","P","P","-"],
    "2025-12-04"=>["P","P","P","P","P"],
    "2025-12-02"=>["P","P","P","P","P"],
    "2025-12-01"=>["P","P","P","P","-"],
    "2025-11-28"=>["P","P","P","A","-"],
    "2025-11-27"=>["P","P","P","P","P"],
    "2025-11-25"=>["P","P","P","P","P"],
    "2025-11-24"=>["P","P","P","-","-"],
];

// CALCULATE TOTALS
$totalPresent = 0;
$totalSlots   = 0;

foreach ($attendance as $slots) {
  foreach ($slots as $s) {
    if ($s === "P") $totalPresent++;
    if ($s === "P" || $s === "A") $totalSlots++;
  }
}

$percent  = $totalSlots > 0 ? round(($totalPresent / $totalSlots) * 100, 2) : 0;
$maxSlots = 5;

// DAY NAME FUNCTION
function getDayName($date) {
  return date("D", strtotime($date));
}

// SUBJECT-WISE DATA
$subjects = [
    "Operating Systems"            => ["present"=>18,"total"=>20],
    "Operating Systems Lab"        => ["present"=>4,"total"=>6],
    "Python"                       => ["present"=>11,"total"=>16],
    "Python Lab"                   => ["present"=>3,"total"=>3],
    "Networking"                   => ["present"=>13,"total"=>16],
    "Networking Lab"               => ["present"=>4,"total"=>6],
    "Software Engineering"         => ["present"=>13,"total"=>16],
    "Software Engineering Lab"     => ["present"=>4,"total"=>7],
    "Cryptography"                 => ["present"=>10,"total"=>14],
    "Cryptography Lab"             => ["present"=>1,"total"=>3],
    "PGPD"                         => ["present"=>4,"total"=>6],
    "PALO ALTO COURSE"             => ["present"=>2, "total"=>3],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Attendance</title>
  <link rel="stylesheet" href="../assets/css/common.css">
</head>

<body>

<div class="attendance-page">

  <!-- HEADER -->
  <div class="attendance-header">
    <a href="dashboard.php">←</a>
    Attendance
  </div>

  <!-- SCROLLABLE CONTENT -->
  <div class="attendance-content">

    <!-- INFO BANNER -->
    <div style="background:#000;color:#fff;padding:12px;border-radius:10px;text-align:center;font-weight:600;font-size:14px;margin-bottom:12px;">
      ⏳ Attendance updates daily at 3:00 AM • Weekly summary below
    </div>

    <!-- TOP CARD -->
    <div class="att-card">
      <div class="att-title">Sem 4</div>
      <div class="att-sub">A.Y. 2025–26 • Even</div>

      <div class="att-bar">
        <div class="att-bar-fill" style="width: <?= $percent ?>%;"></div>
      </div>

      <div class="att-percent"><?= $percent ?>%</div>
    </div>

    <!-- STATUS -->
    <div class="att-status-box">
      <div class="att-ok">Present: <b><?= $totalPresent ?> / <?= $totalSlots ?></b></div>
      <div class="att-bad">Absent: <b><?= $totalSlots - $totalPresent ?></b></div>
      <div class="att-mid">Pending: <b>0</b></div>
      <div class="att-info">No Attendance: <b>0</b></div>
    </div>

    <div class="att-legend">P = Present, A = Absent, – = No Lecture/Lab</div>

    <!-- DATE TABLE -->
    <div class="att-table">

      <div class="att-header">
        <div class="att-col">Date</div>
        <?php for ($i=1; $i <= $maxSlots; $i++): ?>
          <div class="att-col">Slot <?= $i ?></div>
        <?php endfor; ?>
      </div>

      <?php foreach ($attendance as $date => $slots): ?>
        <div class="att-row">

          <div class="att-col">
            <?= date("d-M-y", strtotime($date)) ?><br>
            <span style="font-size:12px;color:#777;"><?= getDayName($date) ?></span>
          </div>

          <?php for ($i=0; $i < $maxSlots; $i++): ?>
            <div class="att-col">
              <?php
                if (!isset($slots[$i]))       echo '<div class="att-slot-n">-</div>';
                elseif ($slots[$i] === "P")   echo '<div class="att-slot-p">P</div>';
                elseif ($slots[$i] === "A")   echo '<div class="att-slot-a">A</div>';
                else                          echo '<div class="att-slot-n">-</div>';
              ?>
            </div>
          <?php endfor; ?>

        </div>
      <?php endforeach; ?>

    </div>

    <!-- SUBJECT WISE -->
    <br>
    <h4>Subject Wise Attendance</h4>

    <?php foreach ($subjects as $name => $data): 
      $present = $data["present"];
      $total   = $data["total"];
      $absent  = $total - $present;
    ?>
      <div class="sub-card">
        <div class="sub-name"><?= $name ?></div>
        <div class="sub-info">
          Present: <b><?= $present ?></b> / <?= $total ?><br>
          Absent: <b><?= $absent ?></b> / <?= $total ?>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</div>

</body>
</html>

