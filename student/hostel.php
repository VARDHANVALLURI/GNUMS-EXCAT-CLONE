<?php
ob_start();
include __DIR__ . "/includes/auth.php";

$pageTitle = "Attendance"; // change title per page
include __DIR__ . "/includes/app_header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Hostel</title>

  <link rel="stylesheet" href="../assets/css/common.css">
</head>
<body>

<div class="hostel-page">

  <!-- HEADER -->
  <div class="hostel-header">
    <a href="dashboard.php">←</a>
    Hostel
  </div>

  <!-- CONTENT -->
  <div class="hostel-content">

    <!-- HOSTEL DETAILS -->
    <div class="hostel-card">
      <div class="hostel-title">Hostel Details</div>

      <div class="hostel-row"><b>Reg No:</b> 42043</div>
      <div class="hostel-row"><b>Block:</b> TAGORE BHAWAN - C (Non AC)</div>
      <div class="hostel-row"><b>Room:</b> Floor 3 | Room C-361 | Bed 3</div>
      <div class="hostel-row"><b>Duration:</b> 01-07-2025 → 30-06-2026</div>
      <div class="hostel-row"><b>City:</b> EAST GODAVARI</div>
      <div class="hostel-row"><b>Address:</b> HOUSE NO-1-18 MAIN ROAD, NELAPARTHIPADU, DRAKSHARAMAM</div>
    </div>

    <!-- GATE PASSES -->
    <div class="hostel-card">
      <div class="hostel-title">Recent Gate Passes</div>

      <div class="gate-card">
        <b>Holiday</b> • HOME<br>
        17-10-2025 → 02-11-2025<br>
        <span class="gate-status status-ok">Approved</span>
      </div>

      <div class="gate-card">
        <b>Personal</b> • PAVGADH<br>
        19-07-2025 → 19-07-2025<br>
        <span class="gate-status status-ok">Approved</span>
      </div>

      <div style="text-align:center;font-size:12px;color:#555;margin-top:8px;">
        <b>NOTE:</b> ONLY RECENT GATE PASSES WILL BE SHOWN.
      </div>
    </div>

    <!-- MESS MENU -->
    <div class="hostel-card">
      <div class="hostel-title">Mess Menu</div>

      <div class="mess-tabs">
        <button class="active" onclick="openMenu('mon',this)">Mon</button>
        <button onclick="openMenu('tue',this)">Tue</button>
        <button onclick="openMenu('wed',this)">Wed</button>
        <button onclick="openMenu('thu',this)">Thu</button>
        <button onclick="openMenu('fri',this)">Fri</button>
        <button onclick="openMenu('sat',this)">Sat</button>
        <button onclick="openMenu('sun',this)">Sun</button>
      </div>

      <div id="mon" class="mess-box">
        <b>Breakfast:</b> Veg Upma & Chutney | Tea/Coffee<br>
        <b>Lunch:</b> Dudhi Sabji, Dal, Rice, Papad<br>
        <b>Dinner:</b> Dum Aloo, Rice, Roti
      </div>

      <div id="tue" class="mess-box" style="display:none;">
        <b>Breakfast:</b> Idly & Peanut Chutney | Tea/Coffee<br>
        <b>Lunch:</b> Palak Dal, Rice<br>
        <b>Dinner:</b> Beetroot Dal Curry, Rice
      </div>

      <div id="wed" class="mess-box" style="display:none;">
        <b>Breakfast:</b> Imli Rice | Tea/Coffee<br>
        <b>Lunch:</b> Jeera Aloo, Tomato Dal<br>
        <b>Dinner:</b> Brinjal Curry, Rice
      </div>

      <div id="thu" class="mess-box" style="display:none;">
        <b>Breakfast:</b> Onion Pakoda | Tea/Coffee<br>
        <b>Lunch:</b> Cabbage Matar, Dal<br>
        <b>Dinner:</b> Veg Biryani + Raita
      </div>

      <div id="fri" class="mess-box" style="display:none;">
        <b>Breakfast:</b> Veg Pasta | Tea/Coffee<br>
        <b>Lunch:</b> Drumstick Dal<br>
        <b>Dinner:</b> Tomato Curry, Roti
      </div>

      <div id="sat" class="mess-box" style="display:none;">
        <b>Breakfast:</b> Semia Upma | Tea/Coffee<br>
        <b>Lunch:</b> Aloo Palak, Dal<br>
        <b>Dinner:</b> Dry Cauliflower
      </div>

      <div id="sun" class="mess-box" style="display:none;">
        <b>Breakfast:</b> Bread Jam<br>
        <b>Lunch:</b> Chole, Puri, Jeera Rice, Sweet<br>
        <b>Dinner:</b> Sambar Rice
      </div>

    </div>

  </div>
</div>

<script>
function openMenu(day, btn) {
  document.querySelectorAll('.mess-box').forEach(m => m.style.display = 'none');
  document.getElementById(day).style.display = 'block';

  document.querySelectorAll('.mess-tabs button').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
}
</script>

</body>
</html>

