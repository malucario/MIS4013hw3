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
while ($players=$players->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $players['PlayerID']; ?></td>
    <td><?php echo $players['FirstName']; ?></td>
    <td><?php echo $players['LastName']; ?></td>
    <td><?php echo $players['School']; ?></td>
    <td><?php echo $players['Position']; ?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
