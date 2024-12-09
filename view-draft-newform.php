<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newDraftModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newDraftModal" tabindex="-1" aria-labelledby="newDraftModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newDraftModalLabel">New draft data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="dID" class="form-label">Draft ID</label>
            <input type="number" class="form-control" id="dID" name="dID">
          </div>
           <div class="mb-3">
            <label for="dPID" class="form-label">Player ID</label>
            <input type="number" class="form-control" id="dPID" name="dPID">
          </div> 
          <div class="mb-3">
            <label for="dRound" class="form-label">Round drafted</label>
            <input type="number" class="form-control" id="dRound" name="dRound">
          </div> 
          <div class="mb-3">
            <label for="dPick" class="form-label">Pick drafted</label>
            <input type="number" class="form-control" id="dPick" name="dPick">
          </div>
          <div class="mb-3">
            <label for="dTeam" class="form-label">Team</label>
            <input type="text" class="form-control" id="dTeam" name="dTeam">
          </div>
          <div class="mb-3">
            <label for="dBonus" class="form-label">Signing Bonus</label>
            <input type="number" class="form-control" id="dBonus" name="dBonus">
          </div>
          <input type="hidden" name="actionType" value="Add">
          <button type="number" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
