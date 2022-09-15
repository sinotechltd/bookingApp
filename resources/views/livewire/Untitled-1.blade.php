
<!-- pop up view form Modal -->
<div wire:ignore.self class="modal fade" id="viewData" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" style="width:1250px;">
        <div class="modal-content">
            <form wire:submit.prevent='approveRecord'>                
                <div class="modal-header">
                    <h5 class="modal-title" id="" style="text-align: center;">Approve
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click='closeModal'
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label">Program title</label>
                                <input type="text" wire:model='ptitle' class="form-control ptitle" value="{{ $listBooking->program_title }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Topic</label>
                                <input type="text" wire:model='program_topic' class="form-control program_topic" value="{{ $listBooking->program_title }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Team/Shift Leader</label>
                                <select class="form-select" wire:model='team_leader'></select>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Producer/Director</label>
                                <select class="form-select" wire:model='producer'></select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Operation Crew</label>
                                <input type="text" class="form-control" wire:model='operation_crew'>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Date</label>
                                <input class="form-control" wire:model='bookingdate'>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Recording Time</label>
                                <input class="form-control" wire:model='recordingtime'>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Setting/Rigging time</label>
                                <input class="form-control" wire:model='settingtime'>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Rehearsal Time</label>
                                <input class="form-control" wire:model='rehearsal_time'>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Location</label>
                                <input type="text" wire:model='location' class="form-control location">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Designer</label>
                                <input type="text" class="form-control" wire:model='designer'>

                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Guests</label>
                                <input type="text" class="form-control" wire:model='guests'>

                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Equipments</label>
                                <select class="form-select" wire:model='equiments'>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Presenters</label>
                                <select class="form-select presenters" name="presenters"
                                    wire:model='presenters'></select>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Special Remarks</label>
                                <textarea class="form-control" wire:model='remarks'></textarea>
                                <div class="form-text">Enter your remarks here</div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        wire:click='closeModal'>Close</button>
                    <button type="button" class="btn btn-danger">Reject</button>
                    <button type="button" class="btn btn-success">Approve</button>
                </div>>
            </form>
        </div>
    </div>
</div>

$userId=session('LoggedUser');
$bookingline= Master_booking::find($bookingid);

$bookingline->approval_level1 ='Approved';
$bookingline->approver1_id = $userId; 
$bookingline->save();

return redirect()->back();

