<?php
ob_start();
include __DIR__ . "/includes/auth.php";

$pageTitle = "exam"; // change title per page
include __DIR__ . "/includes/app_header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Exam Schedule</title>

  <link rel="stylesheet" href="../assets/css/common.css">
</head>
<body>

<div class="exam-page">

  <!-- ===== HEADER ===== -->
  <div class="timetable-header">
    <a href="dashboard.php">←</a>
    Exam Schedule
  </div>

  <!-- ===== CONTENT (ONLY THIS SCROLLS) ===== -->
  <div class="exam-content">

    <!-- ===== CODING ===== -->
    <div class="exam-card">
      <div class="exam-title">Coding</div>

      <div class="exam-row">
        <div>
          <div class="exam-label">Questions Attended</div>
          <div class="exam-value">440</div>
        </div>
        <div>
          <div class="exam-label">Solved Correctly</div>
          <div class="exam-value">397</div>
        </div>
      </div>

      <div class="exam-bottom">
        <div class="score-box">
          <div class="score-label">Your Score</div>
          <div class="score-value">3980</div>
        </div>

        <div class="accuracy">
          <div class="accuracy-label">Accuracy</div>
          <div class="accuracy-value green">90.44%</div>
        </div>
      </div>
    </div>

    <!-- ===== PROJECTS ===== -->
    <div class="exam-card">
      <div class="exam-title">Projects</div>

      <div class="exam-row">
        <div>
          <div class="exam-label">Major Attended</div>
          <div class="exam-value">0</div>
        </div>
        <div>
          <div class="exam-label">Minor Attended</div>
          <div class="exam-value">0</div>
        </div>
      </div>

      <div class="exam-bottom">
        <div class="score-box">
          <div class="score-label">Your Score</div>
          <div class="score-value">0</div>
        </div>
      </div>
    </div>

    <!-- ===== MCQ ===== -->
    <div class="exam-card">
      <div class="exam-title">MCQ</div>

      <div class="exam-row">
        <div>
          <div class="exam-label">Questions Attended</div>
          <div class="exam-value">429</div>
        </div>
        <div>
          <div class="exam-label">Solved Correctly</div>
          <div class="exam-value">373</div>
        </div>
      </div>

      <div class="exam-bottom">
        <div class="score-box">
          <div class="score-label">Your Score</div>
          <div class="score-value">374</div>
        </div>

        <div class="accuracy">
          <div class="accuracy-label">Accuracy</div>
          <div class="accuracy-value green">87.06%</div>
        </div>
      </div>
    </div>

  </div>
</div>

</body>
</html>


