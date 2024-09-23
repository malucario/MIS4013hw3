<h1>Instructors</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Office</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($instructor=$instructors->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $instructor['InstructorID']; ?></td>
    <td><?php echo $instructor['InstructorName']; ?></td>
    <td><?php echo $instructor['OfficeNumber']; ?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
