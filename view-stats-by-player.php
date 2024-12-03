<h1>Stats by Player</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>PAs</th>
        <th>ABs</th>
        <th>OPS</th>
        <th>Exit Velo</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($stat=$stats->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $stat['FirstName']; ?></td>
    <td><?php echo $stat['LastName']; ?></td>
    <td><?php echo $stat['PA']; ?></td>
    <td><?php echo $stat['AB']; ?></td>
    <td><?php echo $stat['OPS']; ?></td>
    <td><?php echo $stat['ExitVelo']; ?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
