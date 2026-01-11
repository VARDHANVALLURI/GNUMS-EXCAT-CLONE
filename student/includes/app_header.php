<div class="app-header">

    <?php if (!empty($showBackButton) && $showBackButton === true): ?>
        <div class="back-container" onclick="goDashboard()">
            <span class="back-icon">&#x2190;</span>
        </div>
    <?php endif; ?>

    <div class="app-title">
        <?php echo $pageTitle ?? 'Dashboard'; ?>
    </div>

</div>

<script>
function goDashboard() {
    window.location.href = "/student/dashboard.php";
}
</script>
