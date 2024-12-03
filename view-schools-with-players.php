<h1>Schools with Players</h1>
<div class="container">
  <div class="row">
<?php
while ($school = $schools->fetch_assoc()) {
  ?>
    <div class="col-md-4 mb-4"> 
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title"><?php echo $school['SchoolName']; ?></h5>
          <p class="card-text">
            <ul class="list-group">
<?php
  $players = selectPlayersByTeam($school['SchoolRanking']);
  while ($player = $players->fetch_assoc()) {
?>
              <li class="list-group-item"><?php echo $player['LastName']; ?>, <?php echo $player['FirstName']; ?> (<?php echo $player['Position']; ?>)</li>
<?php    
  }
?>
            </ul>
          </p>
          <p class="card-text"><small class="text-body-secondary">Top 25 Rank: <?php echo $school['SchoolRanking']; ?></small></p>
        </div>
      </div>
    </div>
<?php
}
?>
  </div>
</div>
