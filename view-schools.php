<h1>Schools</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Mascot</th>
        <th>Top 25 Ranking</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($school=$Schools->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $school['SchoolID']; ?></td>
    <td><?php echo $school['SchoolName']; ?></td>
    <td><?php echo $school['SchoolMascot']; ?></td>
    <td><?php echo $school['SchoolRanking']; ?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
