<h1>Schools</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Top 25 Ranking</th>
        <th>Name</th>
        <th>Mascot</th>
        <th>Conference</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($school=$schools->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $school['SchoolRanking']; ?></td>
    <td><?php echo $school['SchoolName']; ?></td>
    <td><?php echo $school['SchoolMascot']; ?></td>
    <td><?php echo $school['SchoolConference']; ?></td>
    <td><a href="players-by-team.php?id=<?php echo $school['SchoolRanking']; ?>">Players</a></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
