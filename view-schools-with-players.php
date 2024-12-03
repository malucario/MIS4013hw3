<h1>Schools with Players</h1>
<div class="card-group">
<?php
while ($school=$schools->fetch_assoc()) {
  ?>
    <div class="card">>
    <div class="card-body">
      <h5 class="card-title"><?php echo $school['SchoolName']; ?></h5>
      <p class="card-text">
<?php
  $players= selectPlayersByTeam($school['SchoolRanking']);
  while ($player=$players->fetch_assoc()) {
?>
<?php    
  }
?>
      </p>
      <p class="card-text"><small class="text-body-secondary">Conference: <?php echo $school['SchoolConference']; ?></small></p>
    </div>
  </div>
<?php
}
?>
</div>
