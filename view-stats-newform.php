<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newStatsModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newStatsModal" tabindex="-1" aria-labelledby="newStatsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newStatsModalLabel">New stats</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="stID" class="form-label">Stats ID</label>
            <input type="number" class="form-control" id="stID" name="stID">
          </div>
           <div class="mb-3">
            <label for="stPID" class="form-label">Player ID</label>
            <input type="number" class="form-control" id="stPID" name="stPID">
          </div> 
          <div class="mb-3">
            <label for="stPA" class="form-label">Plate Appearances</label>
            <input type="number" class="form-control" id="stPA" name="stPA">
          </div> 
          <div class="mb-3">
            <label for="stAB" class="form-label">At-bats</label>
            <input type="number" class="form-control" id="stAB" name="stAB">
          </div>
          <div class="mb-3">
            <label for="stOPS" class="form-label">OPS</label>
            <input type="number" class="form-control" id="stOPS" name="stOPS" step="0.001">
          </div>
          <div class="mb-3">
            <label for="stEV" class="form-label">Exit Velocity</label>
            <input type="number" class="form-control" id="stEV" name="stEV" step="0.1">
          </div>
          <input type="hidden" name="actionType" value="Add">
          <button type="number" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
