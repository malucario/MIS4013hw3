<h1>Instructors</h1>
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
while ($instructor=$instructors->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $instructor['PlayerID']; ?></td>
    <td><?php echo $instructor['FirstName']; ?></td>
    <td><?php echo $instructor['LastName']; ?></td>
    <td><?php echo $instructor['School']; ?></td>
    <td><?php echo $instructor['Position']; ?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
