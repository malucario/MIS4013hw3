<h1>Players</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Position</th>
        <th></th></h>
      </tr>
    </thead>
    <tbody>
<?php
while ($player=$players->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $player['PlayerID']; ?></td>
    <td><?php echo $player['FirstName']; ?></td>
    <td><?php echo $player['LastName']; ?></td>
    <td><?php echo $player['Position']; ?></td>
    <td>
      <form method="post" action="stats-by-player.php">
        <input type="hidden" name="pid" value="<?php echo $player['PlayerID']; ?>"
        <button type="submit" class="btn btn-primary">Stats</button>
      </form>
    </td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
