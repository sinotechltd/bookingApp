<div class="container-fluid">
    <hr>
    <h5 style="text-align: center">Assign respective personel duties</h5>

    <div class="container">
        <form>
            <table class="table bordered">
                <thead>
                    <tr>
                        <th>DAY</th>
                        <th>MONDAY</th>
                        <th>TUESDAY</th>
                        <th>WEDNESDAY</th>
                        <th>THURSDAY</th>
                        <th>FRIDAY</th>
                        <th>SATURDAY</th>
                        <th>SUNDAY</th>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <th>
                            {{ $mon }}
                        </th>
                        <th>{{ $tue->format('d-m-Y') }}</th>
                        <th>{{ $wed->format('d-m-Y') }}</th>
                        <th>{{ $thurs->format('d-m-Y') }}</th>
                        <th>{{ $friday->format('d-m-Y') }}</th>
                        <th>{{ $sat->format('d-m-Y') }}</th>
                        <th>{{ $sun->format('d-m-Y') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <thead>
                        <tr>
                            <td colspan="20" style="text-align: center">
                                <h4>Suit A</h4>
                            </td>
                        </tr>
                    </thead>
                    <tr>
                        <td>
                            <label><strong>Program</strong></label>
                        </td>
                        <td>
                            @if (!$approvalSuccess)
                                <label>
                                    <button class="btn btn-sm btn-primary">Not Booked</button>
                                </label>
                            @else
                                <label>
                                    {{ $approvalSuccess->program_name }}
                                </label>
                            @endif
                        </td>
                        <td>
                            <label>
                                @if (!$tueApprovalSuccess)
                                    <label>
                                        <button class="btn btn-sm btn-primary">Not Booked</button>
                                    </label>
                                @else
                                    <label>
                                        {{ $tueApprovalSuccess->program_name }}
                                    </label>
                                @endif
                            </label>
                        </td>
                        <td>
                            <label>
                                @if (!$wedApprovalSuccess)
                                    <label>
                                        <button class="btn btn-sm btn-primary">Not Booked</button>
                                    </label>
                                @else
                                    <label>
                                        {{ $wedApprovalSuccess->program_name }}
                                    </label>
                                @endif
                            </label>
                        </td>
                        <td>
                            <label>
                                @if (!$thursApprovalSuccess)
                                    <label>
                                        <button class="btn btn-sm btn-primary">Not Booked</button>
                                    </label>
                                @else
                                    <label>
                                        {{ $thursApprovalSuccess->program_name }}
                                    </label>
                                @endif
                            </label>
                        </td>
                        <td>
                            <label>
                                @if (!$friApprovalSuccess)
                                    <label>
                                        <button class="btn btn-sm btn-primary">Not Booked</button>
                                    </label>
                                @else
                                    <label>
                                        {{ $friApprovalSuccess->program_name }}
                                    </label>
                                @endif
                            </label>
                        </td>
                        <td>
                            @if (!$satApprovalSuccess)
                                <label>
                                    <button class="btn btn-sm btn-primary">Not Booked</button>
                                </label>
                            @else
                                <label>
                                    {{ $satApprovalSuccess->program_name }}
                                </label>
                            @endif
                        </td>
                        <td>
                            @if (!$sunApprovalSuccess)
                                <label>
                                    <button class="btn btn-sm btn-primary">Not Booked</button>
                                </label>
                            @else
                                <label>
                                    {{ $sunApprovalSuccess->program_name }}
                                </label>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            @if (!$approvalSuccess)
                                <label>
                                    <p>-not booked-</p>
                                </label>
                            @else
                                <label>
                                    {{ $approvalSuccess->name }}
                                </label>
                            @endif
                        </td>
                        <td>
                            <label>
                                @if (!$tueApprovalSuccess)
                                    <label>
                                        <p>-not booked-</p>
                                    </label>
                                @else
                                    <label>
                                        {{ $tueApprovalSuccess->name }}
                                    </label>
                                @endif
                            </label>
                        </td>
                        <td>
                            <label>
                                @if (!$wedApprovalSuccess)
                                    <label>
                                        <p>-not booked-</p>
                                    </label>
                                @else
                                    <label>
                                        {{ $wedApprovalSuccess->name }}
                                    </label>
                                @endif
                            </label>

                        </td>
                        <td>
                            <label>
                                @if (!$thursApprovalSuccess)
                                    <label>
                                        <p>-not booked-</p>
                                    </label>
                                @else
                                    <label>
                                        {{ $thursApprovalSuccess->name }}
                                    </label>
                                @endif
                            </label>
                        </td>
                        <td>
                            <label>
                                @if (!$friApprovalSuccess)
                                    <label>
                                        <p>-not booked-</p>
                                    </label>
                                @else
                                    <label>
                                        {{ $friApprovalSuccess->name }}
                                    </label>
                                @endif
                            </label>
                        </td>
                        <td>
                            <label>
                                @if (!$satApprovalSuccess)
                                    <label>
                                        <p>-not booked-</p>
                                    </label>
                                @else
                                    <label>
                                        {{ $satApprovalSuccess->name }}
                                    </label>
                                @endif
                            </label>
                        </td>
                        <td>
                            <label>
                                @if (!$satApprovalSuccess)
                                    <label>
                                        <p>-not booked-</p>
                                    </label>
                                @else
                                    <label>
                                        {{ $satApprovalSuccess->name }}
                                    </label>
                                @endif
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Editor</label>
                        </td>
                        <td>
                            @if (!$approvalSuccess)
                            <p>-not booked-</p>
                            @else
                                @if ($approvalSuccess->editor > 0)
                                    <label>
                                        {{ $approvalSuccess->editor }}
                                    </label>
                                @else
                                    <form>
                                        <select class="form-select presenters" name="presentersMonMorning">
                                            <option>--Select Editor--</option>
                                            @foreach ($editor as $producer)
                                                <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <button class="btn btn-small btn-success">Assign</button>
                                    </form>
                                @endif
                            @endif
                        </td>
                        <td> @if (!$tueApprovalSuccess)
                            <p>-not booked-</p>
                            @else
                                @if ($tueApprovalSuccess->editor > 0)
                                    <label>
                                        {{ $tueApprovalSuccess->editor }}
                                    </label>
                                @else
                                    <form>
                                        <select class="form-select presenters" name="presentersMonMorning">
                                            <option>--Select Editor--</option>
                                            @foreach ($editor as $producer)
                                                <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <button class="btn btn-small btn-success">Assign</button>
                                    </form>
                                @endif
                            @endif
                        </td>
                        <td> @if (!$wedApprovalSuccess)
                            <p>-not booked-</p>
                            @else
                                @if ($wedApprovalSuccess->editor > 0)
                                    <label>
                                        {{ $wedApprovalSuccess->editor }}
                                    </label>
                                @else
                                    <form>
                                        <select class="form-select presenters" name="presentersMonMorning">
                                            <option>--Select Editor--</option>
                                            @foreach ($editor as $producer)
                                                <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <button class="btn btn-small btn-success">Assign</button>
                                    </form>
                                @endif
                            @endif
                        </td>
                        <td>
                            @if (!$thursApprovalSuccess)
                            <p>-not booked-</p>
                            @else
                                @if ($thursApprovalSuccess->editor > 0)
                                    <label>
                                        {{ $thursApprovalSuccess->editor }}
                                    </label>
                                @else
                                    <form>
                                        <select class="form-select presenters" name="presentersMonMorning">
                                            <option>--Select Editor--</option>
                                            @foreach ($editor as $producer)
                                                <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <button class="btn btn-small btn-success">Assign</button>
                                    </form>
                                @endif
                            @endif
                        </td>
                        <td>
                            @if (!$friApprovalSuccess)
                            <p>-not booked-</p>
                            @else
                                @if ($friApprovalSuccess->editor > 0)
                                    <label>
                                        {{ $friApprovalSuccess->editor }}
                                    </label>
                                @else
                                    <form>
                                        <select class="form-select presenters" name="presentersMonMorning">
                                            <option>--Select Editor--</option>
                                            @foreach ($editor as $producer)
                                                <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <button class="btn btn-small btn-success">Assign</button>
                                    </form>
                                @endif
                            @endif
                        </td>
                        <td>
                            @if (!$satApprovalSuccess)
                            <p>-not booked-</p>
                            @else
                                @if ($satApprovalSuccess->editor > 0)
                                    <label>
                                        {{ $satApprovalSuccess->editor }}
                                    </label>
                                @else
                                    <form>
                                        <select class="form-select presenters" name="presentersMonMorning">
                                            <option>--Select Editor--</option>
                                            @foreach ($editor as $producer)
                                                <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <button class="btn btn-small btn-success">Assign</button>
                                    </form>
                                @endif
                            @endif
                        </td>
                        <td>
                            @if (!$sunApprovalSuccess)
                            <p>-not booked-</p>
                            @else
                                @if ($sunApprovalSuccess->editor > 0)
                                    <label>
                                        {{ $sunApprovalSuccess->editor }}
                                    </label>
                                @else
                                    <form>
                                        <select class="form-select presenters" name="presentersMonMorning">
                                            <option>--Select Editor--</option>
                                            @foreach ($editor as $producer)
                                                <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <button class="btn btn-small btn-success">Assign</button>
                                    </form>
                                @endif
                            @endif
                        </td>
                    </tr>
                <tbody>
                    <thead>
                        <tr>
                            <td colspan="20" style="text-align: center">
                                <h4>Suit B</h4>
                            </td>
                        </tr>
                    </thead>
                    <tr>
                        <td>
                            <label><strong>Program</strong></label>
                        </td>
                        <td>
                            <label>Program Title</label>
                        </td>
                        <td>
                            <label>Program Title</label>
                        </td>
                        <td>
                            <label>Program Title</label>
                        </td>
                        <td>
                            <label>Program Title</label>
                        </td>
                        <td>
                            <label>Program Title</label>
                        </td>
                        <td>
                            <label>Program Title</label>
                        </td>
                        <td>
                            <label>Program Title</label>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Editor</label>
                        </td>
                        <td>
                            <select class="form-select presenters" name="presenters">
                                <option>--Select Editor--</option>
                                @foreach ($editor as $producer)
                                    <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                    </option>
                                @endforeach
                            </select>

                        </td>
                        <td>
                            <select class="form-select presenters" name="presenters">
                                <option>--Select Editor--</option>
                                @foreach ($editor as $producer)
                                    <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                    </option>
                                @endforeach
                            </select>

                        </td>
                        <td>
                            <select class="form-select presenters" name="presenters">
                                <option>--Select Editor--</option>
                                @foreach ($editor as $producer)
                                    <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                    </option>
                                @endforeach
                            </select>

                        </td>
                        <td>
                            <select class="form-select presenters" name="presenters">
                                <option>--Select Editor--</option>
                                @foreach ($editor as $producer)
                                    <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                    </option>
                                @endforeach
                            </select>

                        </td>
                        <td>
                            <select class="form-select presenters" name="presenters">
                                <option>--Select Editor--</option>
                                @foreach ($editor as $producer)
                                    <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                    </option>
                                @endforeach
                            </select>

                        </td>
                        <td>
                            <select class="form-select presenters" name="presenters">
                                <option>--Select Editor--</option>
                                @foreach ($editor as $producer)
                                    <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                    </option>
                                @endforeach
                            </select>

                        </td>
                        <td>
                            <select class="form-select presenters" name="presenters">
                                <option>--Select Editor--</option>
                                @foreach ($editor as $producer)
                                    <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                    </option>
                                @endforeach
                            </select>

                        </td>
                    </tr>
                <tbody>
                    <thead>
                        <tr>
                            <td colspan="20" style="text-align: center">
                                <h4>Suit C</h4>
                            </td>
                        </tr>
                    </thead>
                    <tr>
                        <td>
                            <label><strong>Program</strong></label>
                        </td>
                        <td>
                            <label>Program Title</label>
                        </td>
                        <td>
                            <label>Program Title</label>
                        </td>
                        <td>
                            <label>Program Title</label>
                        </td>
                        <td>
                            <label>Program Title</label>
                        </td>
                        <td>
                            <label>Program Title</label>
                        </td>
                        <td>
                            <label>Program Title</label>
                        </td>
                        <td>
                            <label>Program Title</label>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Editor</label>
                        </td>
                        <td>
                            <select class="form-select presenters" name="presenters">
                                <option>--Select Editor--</option>
                                @foreach ($editor as $producer)
                                    <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                    </option>
                                @endforeach
                            </select>

                        </td>
                        <td>
                            <select class="form-select presenters" name="presenters">
                                <option>--Select Editor--</option>
                                @foreach ($editor as $producer)
                                    <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                    </option>
                                @endforeach
                            </select>

                        </td>
                        <td>
                            <select class="form-select presenters" name="presenters">
                                <option>--Select Editor--</option>
                                @foreach ($editor as $producer)
                                    <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                    </option>
                                @endforeach
                            </select>

                        </td>
                        <td>
                            <select class="form-select presenters" name="presenters">
                                <option>--Select Editor--</option>
                                @foreach ($editor as $producer)
                                    <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                    </option>
                                @endforeach
                            </select>

                        </td>
                        <td>
                            <select class="form-select presenters" name="presenters">
                                <option>--Select Editor--</option>
                                @foreach ($editor as $producer)
                                    <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                    </option>
                                @endforeach
                            </select>

                        </td>
                        <td>
                            <select class="form-select presenters" name="presenters">
                                <option>--Select Editor--</option>
                                @foreach ($editor as $producer)
                                    <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                    </option>
                                @endforeach
                            </select>

                        </td>
                        <td>
                            <select class="form-select presenters" name="presenters">
                                <option>--Select Editor--</option>
                                @foreach ($editor as $producer)
                                    <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                    </option>
                                @endforeach
                            </select>

                        </td>
                    </tr>
                <tbody>
                    <thead>
                        <tr>
                            <td colspan="20">
                                <h3>EVENING</h3>
                                <h4 style="text-align: center">Suit B</h4>
                            </td>
                        </tr>
                    </thead>
                    <tr>
                        <td>
                            <label><strong>Program</strong></label>
                        </td>
                        <td>
                            <label>Program Title</label>
                        </td>
                        <td>
                            <label>Program Title</label>
                        </td>
                        <td>
                            <label>Program Title</label>
                        </td>
                        <td>
                            <label>Program Title</label>
                        </td>
                        <td>
                            <label>Program Title</label>
                        </td>
                        <td>
                            <label>Program Title</label>
                        </td>
                        <td>
                            <label>Program Title</label>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                        <td>
                            <label><strong>User</strong></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Editor</label>
                        </td>
                        <td>
                            <select class="form-select presenters" name="presenters">
                                <option>--Select Editor--</option>
                                @foreach ($editor as $producer)
                                    <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                    </option>
                                @endforeach
                            </select>

                        </td>
                        <td>
                            <select class="form-select presenters" name="presenters">
                                <option>--Select Editor--</option>
                                @foreach ($editor as $producer)
                                    <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                    </option>
                                @endforeach
                            </select>

                        </td>
                        <td>
                            <select class="form-select presenters" name="presenters">
                                <option>--Select Editor--</option>
                                @foreach ($editor as $producer)
                                    <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                    </option>
                                @endforeach
                            </select>

                        </td>
                        <td>
                            <select class="form-select presenters" name="presenters">
                                <option>--Select Editor--</option>
                                @foreach ($editor as $producer)
                                    <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                    </option>
                                @endforeach
                            </select>

                        </td>
                        <td>
                            <select class="form-select presenters" name="presenters">
                                <option>--Select Editor--</option>
                                @foreach ($editor as $producer)
                                    <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                    </option>
                                @endforeach
                            </select>

                        </td>
                        <td>
                            <select class="form-select presenters" name="presenters">
                                <option>--Select Editor--</option>
                                @foreach ($editor as $producer)
                                    <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                    </option>
                                @endforeach
                            </select>

                        </td>
                        <td>
                            <select class="form-select presenters" name="presenters">
                                <option>--Select Editor--</option>
                                @foreach ($editor as $producer)
                                    <option value="{{ $producer->full_name }}">{{ $producer->full_name }}
                                    </option>
                                @endforeach
                            </select>

                        </td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary newbooking">SAVE</button>
        </form>
    </div>
</div>
