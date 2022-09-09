<!-- Button trigger modal -->
<!--Edit  Modal -->
<div class="modal fade" id="editentry" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" style="width:1250px;">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Edit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label">Program title</label>
                                <select class="form-select" name="ptitle">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="form-text">Select your program</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Team/Shift Leader</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="John">John</option>
                                    <option value="Mark">Mark</option>
                                    <option value="Yvonne">Yvonne</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Topic</label>
                                <input type="text" name="program_topic" class="form-control">
                                <div class="form-text">Topic</div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Producer/Director</label>
                                <select class="form-select" name="producer" aria-label="Default select example">
                                    <option value="0">first</option>
                                    <option value="1">1</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="form-text">Select your producer</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Operation Crew</label>
                                <input type="text" name="operation_crew" class="form-control">
                                <div class="form-text">Type operation crew names</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Date</label>
                                <input type="date" name="bookingdate" class="form-control">
                                <div class="form-text">Select date</div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Recording Time</label>
                                <input type="time" name="recordingtime" class="form-control">
                                <div class="form-text">Select recording time</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Setting/Rigging time</label>
                                <input type="time" name="settingtime" class="form-control">
                                <div class="form-text">Select setting time</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Rehearsal Time</label>
                                <input type="time" name="rehearsal_time" class="form-control">
                                <div class="form-text">Select your producer</div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Location</label>
                                <input type="text" name="location" class="form-control">
                                <div class="form-text">Enter setting location</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Designer</label>
                                <input type="text" name="designer" class="form-control">
                                <div class="form-text">Enter designer</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Guests</label>
                                <input type="text" name="guests" class="form-control">
                                <div class="form-text">Enter quests names separated with comma (,)</div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Equipments</label>
                                <select class="form-select" name="equiments">
                                    <option value="Camera">Camera</option>
                                    <option value="Mixer">Mixer</option>
                                    <option value="microphone">microphone</option>
                                </select>
                                <div class="form-text">Select Equipment to be used</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Presenters</label>
                                <select class="form-select" name="presenters">
                                    <option value="John">John</option>
                                    <option value="Titus">Titus</option>
                                    <option value="Ben">Ben</option>
                                </select>
                                <div class="form-text">Select Your presenter</div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Special Remarks</label>
                                <textarea name="remarks" class="form-control" placeholder="Enter your remarks here"></textarea>
                                <div class="form-text">Enter your remarks here</div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Book</button>
                </div>
        </div>
        </form>
    </div>
</div>
</div>