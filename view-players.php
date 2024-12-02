<h1>Players</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>School</th>
        <th>Position</th>
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
    <td><?php echo $player['School']; ?></td>
    <td><?php echo $player['Position']; ?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
