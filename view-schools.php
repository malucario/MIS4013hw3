<div class="row">
  <div class="col">
    <h1>Schools</h1>
  </div>
  <div class="col-auto">
<?php
  Include "view-schools-newform.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Top 25 Ranking</th>
        <th>Name</th>
        <th>Mascot</th>
        <th>Conference</th>
        <th></th>
        <th></th>
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
    <td>
<?php
Include "view-schools-editform.php";
?>
    </td>
    <td>
      <form method="post" action="">
        <input type="hidden" name="sRanking" value="<?php echo $school['SchoolRanking']; ?>">
        <input type="hidden" name="actionType" value="Delete">
        <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to delete this school?');">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
          </svg>
        </button>
      </form>
    </td>
    <td><a href="players-by-team.php?id=<?php echo $school['SchoolRanking']; ?>">Players</a></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
