<div class="container-fluid">
    <hr>
    <h5 style="text-align: center">Assign respective personel duties</h5>

    <div class="container">
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
                @if (Session::get('Success'))
                    <div class="alert alert-success">
                        {{ Session::get('Success') }}
                    </div>
                @endif
                @if (Session::get('Failed'))
                    <div class="alert alert-danger">
                        {{ Session::get('Failed') }}
                    </div>
                @endif
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
                                <span class="badge bg-secondary">Not Booked</span>
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
                                    <span class="badge bg-secondary">Not Booked</span>
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
                                    <span class="badge bg-secondary">Not Booked</span>
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
                                    <span class="badge bg-secondary">Not Booked</span>
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
                                    <span class="badge bg-secondary">Not Booked</span>
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
                                <span class="badge bg-secondary">Not Booked</span>
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
                                <span class="badge bg-secondary">Not Booked</span>
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
                        <label><strong>Editor</strong></label>
                    </td>
                    <td>
                        @if (!$approvalSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$approvalSuccess->editor_id)
                                <form action="{{ route('assignmoa', $approvalSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $approvalSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$approvalMEname)
                                @else
                                    <label>
                                        {{ $approvalMEname->full_name }}
                                    </label>
                                @endif

                            @endif
                        @endif
                    </td>
                    <td>
                        @if (!$tueApprovalSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$tueApprovalSuccess->editor_id)
                                <form action="{{ route('assignmoa', $tueApprovalSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $tueApprovalSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$tueApprovalSuccess)
                                @else
                                    <label>
                                        {{ $approvalTEname->full_name }}
                                    </label>
                                @endif
                            @endif
                        @endif
                    </td>
                    <td>
                        @if (!$wedApprovalSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$wedApprovalSuccess->editor_id)
                                <form action="{{ route('assignmoa', $wedApprovalSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $wedApprovalSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$approvalWEname)
                                @else
                                    <label>
                                        {{ $approvalWEname->full_name }}
                                    </label>
                                @endif
                            @endif
                        @endif
                    </td>
                    <td>
                        {{-- djshd --}}
                        @if (!$thursApprovalSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$thursApprovalSuccess->editor_id)
                                <form action="{{ route('assignmoa', $thursApprovalSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $thursApprovalSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$approvalTHEname)
                                @else
                                    <label>
                                        {{ $approvalTHEname->full_name }}
                                    </label>
                                @endif
                            @endif
                        @endif
                    </td>
                    <td>
                        @if (!$friApprovalSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$friApprovalSuccess->editor_id)
                                <form action="{{ route('assignmoa', $friApprovalSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $friApprovalSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$approvalFREname)
                                @else
                                    <label>
                                        {{ $approvalFREname->full_name }}
                                    </label>
                                @endif
                            @endif
                        @endif
                    </td>
                    <td>
                        @if (!$satApprovalSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$satApprovalSuccess->editor_id)
                                <form action="{{ route('assignmoa', $satApprovalSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $satApprovalSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$approvalSAEname)
                                @else
                                    <label>
                                        {{ $approvalSAEname->full_name }}
                                    </label>
                                @endif

                            @endif
                        @endif
                    </td>
                    <td>
                        @if (!$sunApprovalSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$sunApprovalSuccess->editor_id)
                                <form action="{{ route('assignmoa', $sunApprovalSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $sunApprovalSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$approvalSuEname)
                                @else
                                    <label>
                                        {{ $approvalSuEname->full_name }}
                                    </label>
                                @endif
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
                        @if (!$approvalBSuccess)
                            <label>
                                <span class="badge bg-secondary">Not Booked</span>
                            </label>
                        @else
                            <label>
                                {{ $approvalBSuccess->program_name }}
                            </label>
                        @endif
                    </td>
                    <td>
                        <label>
                            @if (!$tueApprovalBSuccess)
                                <label>
                                    <span class="badge bg-secondary">Not Booked</span>
                                </label>
                            @else
                                <label>
                                    {{ $tueApprovalBSuccess->program_name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        <label>
                            @if (!$wedApprovalBSuccess)
                                <label>
                                    <span class="badge bg-secondary">Not Booked</span>
                                </label>
                            @else
                                <label>
                                    {{ $wedApprovalBSuccess->program_name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        <label>
                            @if (!$thursApprovalBSuccess)
                                <label>
                                    <span class="badge bg-secondary">Not Booked</span>
                                </label>
                            @else
                                <label>
                                    {{ $thursApprovalBSuccess->program_name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        <label>
                            @if (!$friApprovalBSuccess)
                                <label>
                                    <span class="badge bg-secondary">Not Booked</span>
                                </label>
                            @else
                                <label>
                                    {{ $friApprovalBSuccess->program_name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        @if (!$satApprovalBSuccess)
                            <label>
                                <span class="badge bg-secondary">Not Booked</span>

                            </label>
                        @else
                            <label>
                                {{ $satApprovalBSuccess->program_name }}
                            </label>
                        @endif
                    </td>
                    <td>
                        @if (!$sunApprovalBSuccess)
                            <label>
                                <span class="badge bg-secondary">Not Booked</span>
                            </label>
                        @else
                            <label>
                                {{ $sunApprovalBSuccess->program_name }}
                            </label>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        <label><strong>User</strong></label>
                    </td>
                    <td>
                        @if (!$approvalBSuccess)
                            <label>
                                <p>-not booked-</p>
                            </label>
                        @else
                            <label>
                                {{ $approvalBSuccess->name }}
                            </label>
                        @endif
                    </td>
                    <td>
                        <label>
                            @if (!$tueApprovalBSuccess)
                                <label>
                                    <p>-not booked-</p>
                                </label>
                            @else
                                <label>
                                    {{ $tueApprovalBSuccess->name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        <label>
                            @if (!$wedApprovalBSuccess)
                                <label>
                                    <p>-not booked-</p>
                                </label>
                            @else
                                <label>
                                    {{ $wedApprovalBSuccess->name }}
                                </label>
                            @endif
                        </label>

                    </td>
                    <td>
                        <label>
                            @if (!$thursApprovalBSuccess)
                                <label>
                                    <p>-not booked-</p>
                                </label>
                            @else
                                <label>
                                    {{ $thursApprovalBSuccess->name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        <label>
                            @if (!$friApprovalBSuccess)
                                <label>
                                    <p>-not booked-</p>
                                </label>
                            @else
                                <label>
                                    {{ $friApprovalBSuccess->name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        <label>
                            @if (!$satApprovalBSuccess)
                                <label>
                                    <p>-not booked-</p>
                                </label>
                            @else
                                <label>
                                    {{ $satApprovalBSuccess->name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        <label>
                            @if (!$satApprovalBSuccess)
                                <label>
                                    <p>-not booked-</p>
                                </label>
                            @else
                                <label>
                                    {{ $satApprovalBSuccess->name }}
                                </label>
                            @endif
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label><strong>Editor</strong></label>
                    </td>
                    <td>
                        @if (!$approvalBSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$approvalBSuccess->editor_id)
                                <form action="{{ route('assignmoa', $approvalBSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $approvalBSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$approvalBMEname)
                                @else
                                    <label>
                                        {{ $approvalBMEname->full_name }}
                                    </label>
                                @endif

                            @endif
                        @endif
                    </td>
                    <td>
                        @if (!$tueApprovalBSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$tueApprovalBSuccess->editor_id)
                                <form action="{{ route('assignmoa', $tueApprovalBSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $tueApprovalBSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$approvalBTEname)
                                @else
                                    <label>
                                        {{ $approvalBTEname->full_name }}
                                    </label>
                                @endif
                            @endif
                        @endif
                    </td>
                    <td>
                        @if (!$wedApprovalBSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$wedApprovalBSuccess->editor_id)
                                <form action="{{ route('assignmoa', $wedApprovalBSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $wedApprovalBSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$approvalWBEname)
                                @else
                                    <label>
                                        {{ $approvalWBEname->full_name }}
                                    </label>
                                @endif
                            @endif
                        @endif
                    </td>
                    <td>
                        {{-- djshd --}}
                        @if (!$thursApprovalBSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$thursApprovalBSuccess->editor_id)
                                <form action="{{ route('assignmoa', $thursApprovalBSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $thursApprovalBSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$approvalBTHEname)
                                @else
                                    <label>
                                        {{ $approvalBTHEname->full_name }}
                                    </label>
                                @endif
                            @endif
                        @endif
                    </td>
                    <td>
                        @if (!$friApprovalBSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$friApprovalBSuccess->editor_id)
                                <form action="{{ route('assignmoa', $friApprovalBSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $friApprovalBSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$approvalBFREname)
                                @else
                                    <label>
                                        {{ $approvalBFREname->full_name }}
                                    </label>
                                @endif
                            @endif
                        @endif
                    </td>
                    <td>
                        @if (!$satApprovalBSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$satApprovalBSuccess->editor_id)
                                <form action="{{ route('assignmoa', $satApprovalBSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $satApprovalBSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$approvalBSAEname)
                                @else
                                    <label>
                                        {{ $approvalBSAEname->full_name }}
                                    </label>
                                @endif
                            @endif
                        @endif
                    </td>
                    <td>
                        @if (!$sunApprovalBSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$sunApprovalBSuccess->editor_id)
                                <form action="{{ route('assignmoa', $sunApprovalBSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $sunApprovalBSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$approvalBSuEname)
                                @else
                                    <label>
                                        {{ $approvalBSuEname->full_name }}
                                    </label>
                                @endif
                            @endif
                        @endif
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
                        @if (!$approvalCSuccess)
                            <label>
                                <span class="badge bg-secondary">Not Booked</span>
                            </label>
                        @else
                            <label>
                                {{ $approvalCSuccess->program_name }}
                            </label>
                        @endif
                    </td>
                    <td>
                        <label>
                            @if (!$tueApprovalCSuccess)
                                <label>
                                    <span class="badge bg-secondary">Not Booked</span>
                                </label>
                            @else
                                <label>
                                    {{ $tueApprovalCSuccess->program_name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        <label>
                            @if (!$wedApprovalCSuccess)
                                <label>
                                    <span class="badge bg-secondary">Not Booked</span>
                                </label>
                            @else
                                <label>
                                    {{ $wedApprovalCSuccess->program_name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        <label>
                            @if (!$thursApprovalCSuccess)
                                <label>
                                    <span class="badge bg-secondary">Not Booked</span>
                                </label>
                            @else
                                <label>
                                    {{ $thursApprovalCSuccess->program_name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        <label>
                            @if (!$friApprovalCSuccess)
                                <label>
                                    <span class="badge bg-secondary">Not Booked</span>
                                </label>
                            @else
                                <label>
                                    {{ $friApprovalCSuccess->program_name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        @if (!$satApprovalCSuccess)
                            <label>
                                <span class="badge bg-secondary">Not Booked</span>
                            </label>
                        @else
                            <label>
                                {{ $satApprovalCSuccess->program_name }}
                            </label>
                        @endif
                    </td>
                    <td>
                        @if (!$sunApprovalCSuccess)
                            <label>
                                <span class="badge bg-secondary">Not Booked</span>
                            </label>
                        @else
                            <label>
                                {{ $sunApprovalCSuccess->program_name }}
                            </label>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        <label><strong>User</strong></label>
                    </td>
                    <td>
                        @if (!$approvalCSuccess)
                            <label>
                                <p>-not booked-</p>
                            </label>
                        @else
                            <label>
                                {{ $approvalCSuccess->name }}
                            </label>
                        @endif
                    </td>
                    <td>
                        <label>
                            @if (!$tueApprovalCSuccess)
                                <label>
                                    <p>-not booked-</p>
                                </label>
                            @else
                                <label>
                                    {{ $tueApprovalCSuccess->name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        <label>
                            @if (!$wedApprovalCSuccess)
                                <label>
                                    <p>-not booked-</p>
                                </label>
                            @else
                                <label>
                                    {{ $wedApprovalCSuccess->name }}
                                </label>
                            @endif
                        </label>

                    </td>
                    <td>
                        <label>
                            @if (!$thursApprovalCSuccess)
                                <label>
                                    <p>-not booked-</p>
                                </label>
                            @else
                                <label>
                                    {{ $thursApprovalCSuccess->name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        <label>
                            @if (!$friApprovalCSuccess)
                                <label>
                                    <p>-not booked-</p>
                                </label>
                            @else
                                <label>
                                    {{ $friApprovalCSuccess->name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        <label>
                            @if (!$satApprovalCSuccess)
                                <label>
                                    <p>-not booked-</p>
                                </label>
                            @else
                                <label>
                                    {{ $satApprovalCSuccess->name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        <label>
                            @if (!$satApprovalCSuccess)
                                <label>
                                    <p>-not booked-</p>
                                </label>
                            @else
                                <label>
                                    {{ $satApprovalCSuccess->name }}
                                </label>
                            @endif
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label><strong>Editor</strong></label>
                    </td>
                    <td>
                        @if (!$approvalCSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$approvalCSuccess->editor_id)
                                <form action="{{ route('assignmoa', $approvalCSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $approvalCSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$approvalCMEname)
                                @else
                                    <label>
                                        {{ $approvalCMEname->full_name }}
                                    </label>
                                @endif

                            @endif
                        @endif
                    </td>
                    <td>
                        @if (!$tueApprovalCSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$tueApprovalCSuccess->editor_id)
                                <form action="{{ route('assignmoa', $tueApprovalCSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $tueApprovalCSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$approvalCTEname)
                                @else
                                    <label>
                                        {{ $approvalCTEname->full_name }}
                                    </label>
                                @endif
                            @endif
                        @endif
                    </td>
                    <td>
                        @if (!$wedApprovalCSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$wedApprovalCSuccess->editor_id)
                                <form action="{{ route('assignmoa', $wedApprovalCSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $wedApprovalCSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$approvalWCEname)
                                @else
                                    <label>
                                        {{ $approvalWCEname->full_name }}
                                    </label>
                                @endif
                            @endif
                        @endif
                    </td>
                    <td>
                        {{-- djshd --}}
                        @if (!$thursApprovalCSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$thursApprovalCSuccess->editor_id)
                                <form action="{{ route('assignmoa', $thursApprovalCSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $thursApprovalCSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$approvalCTHEname)
                                @else
                                    <label>
                                        {{ $approvalCTHEname->full_name }}
                                    </label>
                                @endif
                            @endif
                        @endif
                    </td>
                    <td>
                        @if (!$friApprovalCSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$friApprovalCSuccess->editor_id)
                                <form action="{{ route('assignmoa', $friApprovalCSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $friApprovalCSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$approvalCFREname)
                                @else
                                    <label>
                                        {{ $approvalCFREname->full_name }}
                                    </label>
                                @endif
                            @endif
                        @endif
                    </td>
                    <td>
                        @if (!$satApprovalCSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$satApprovalCSuccess->editor_id)
                                <form action="{{ route('assignmoa', $satApprovalCSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $satApprovalCSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$approvalCSAEname)
                                @else
                                    <label>
                                        {{ $approvalCSAEname->full_name }}
                                    </label>
                                @endif

                            @endif
                        @endif
                    </td>
                    <td>
                        @if (!$sunApprovalCSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$sunApprovalCSuccess->editor_id)
                                <form action="{{ route('assignmoa', $sunApprovalCSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $sunApprovalCSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$approvalCSuEname)
                                @else
                                    <label>
                                        {{ $approvalCSuEname->full_name }}
                                    </label>
                                @endif
                            @endif
                        @endif
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
                        @if (!$EapprovalBSuccess)
                            <label>
                                <span class="badge bg-secondary">Not Booked</span>
                            </label>
                        @else
                            <label>
                                {{ $EapprovalBSuccess->program_name }}
                            </label>
                        @endif
                    </td>
                    <td>
                        <label>
                            @if (!$EtueApprovalBSuccess)
                                <label>
                                    <span class="badge bg-secondary">Not Booked</span>
                                </label>
                            @else
                                <label>
                                    {{ $EtueApprovalBSuccess->program_name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        <label>
                            @if (!$EwedApprovalBSuccess)
                                <label>
                                    <span class="badge bg-secondary">Not Booked</span>
                                </label>
                            @else
                                <label>
                                    {{ $EwedApprovalBSuccess->program_name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        <label>
                            @if (!$EthursApprovalBSuccess)
                                <label>
                                    <span class="badge bg-secondary">Not Booked</span>
                                </label>
                            @else
                                <label>
                                    {{ $EthursApprovalBSuccess->program_name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        <label>
                            @if (!$EfriApprovalBSuccess)
                                <label>
                                    <span class="badge bg-secondary">Not Booked</span>
                                </label>
                            @else
                                <label>
                                    {{ $EfriApprovalBSuccess->program_name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        @if (!$EsatApprovalBSuccess)
                            <label>
                                <span class="badge bg-secondary">Not Booked</span>
                            </label>
                        @else
                            <label>
                                {{ $EsatApprovalBSuccess->program_name }}
                            </label>
                        @endif
                    </td>
                    <td>
                        @if (!$EsunApprovalBSuccess)
                            <label>
                                <span class="badge bg-secondary">Not Booked</span>
                            </label>
                        @else
                            <label>
                                {{ $EsunApprovalBSuccess->program_name }}
                            </label>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        <label><strong>User</strong></label>
                    </td>
                    <td>
                        @if (!$EapprovalBSuccess)
                            <label>
                                <p>-not booked-</p>
                            </label>
                        @else
                            <label>
                                {{ $EapprovalBSuccess->name }}
                            </label>
                        @endif
                    </td>
                    <td>
                        <label>
                            @if (!$EtueApprovalBSuccess)
                                <label>
                                    <p>-not booked-</p>
                                </label>
                            @else
                                <label>
                                    {{ $EtueApprovalBSuccess->name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        <label>
                            @if (!$EwedApprovalBSuccess)
                                <label>
                                    <p>-not booked-</p>
                                </label>
                            @else
                                <label>
                                    {{ $EwedApprovalBSuccess->name }}
                                </label>
                            @endif
                        </label>

                    </td>
                    <td>
                        <label>
                            @if (!$EthursApprovalBSuccess)
                                <label>
                                    <p>-not booked-</p>
                                </label>
                            @else
                                <label>
                                    {{ $EthursApprovalBSuccess->name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        <label>
                            @if (!$EfriApprovalBSuccess)
                                <label>
                                    <p>-not booked-</p>
                                </label>
                            @else
                                <label>
                                    {{ $EfriApprovalBSuccess->name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        <label>
                            @if (!$EsatApprovalBSuccess)
                                <label>
                                    <p>-not booked-</p>
                                </label>
                            @else
                                <label>
                                    {{ $EsatApprovalBSuccess->name }}
                                </label>
                            @endif
                        </label>
                    </td>
                    <td>
                        <label>
                            @if (!$EsunApprovalBSuccess)
                                <label>
                                    <p>-not booked-</p>
                                </label>
                            @else
                                <label>
                                    {{ $EsunApprovalBSuccess->name }}
                                </label>
                            @endif
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label><strong>Editor</strong></label>
                    </td>
                    <td>
                        @if (!$EapprovalBSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$EapprovalBSuccess->editor_id)
                                <form action="{{ route('assignmoa', $EapprovalBSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $EapprovalBSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$EapprovalBMEname)
                                @else
                                    <label>
                                        {{ $EapprovalBMEname->full_name }}
                                    </label>
                                @endif

                            @endif
                        @endif
                    </td>
                    <td>
                        @if (!$EtueApprovalBSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$EtueApprovalBSuccess->editor_id)
                                <form action="{{ route('assignmoa', $EtueApprovalBSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $EtueApprovalBSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$EapprovalBTEname)
                                @else
                                    <label>
                                        {{ $EapprovalBTEname->full_name }}
                                    </label>
                                @endif
                            @endif
                        @endif
                    </td>
                    <td>
                        @if (!$EwedApprovalBSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$EwedApprovalBSuccess->editor_id)
                                <form action="{{ route('assignmoa', $EwedApprovalBSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $EwedApprovalBSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$EapprovalBTWEname)
                                @else
                                    <label>
                                        {{ $EapprovalBTWEname->full_name }}
                                    </label>
                                @endif
                            @endif
                        @endif
                    </td>
                    <td>
                        {{-- djshd --}}
                        @if (!$EthursApprovalBSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$EthursApprovalBSuccess->editor_id)
                                <form action="{{ route('assignmoa', $EthursApprovalBSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $EthursApprovalBSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$EapprovalBTHEname)
                                @else
                                    <label>
                                        {{ $EapprovalBTHEname->full_name }}
                                    </label>
                                @endif
                            @endif
                        @endif
                    </td>
                    <td>
                        @if (!$EfriApprovalBSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$EfriApprovalBSuccess->editor_id)
                                <form action="{{ route('assignmoa', $EfriApprovalBSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $EfriApprovalBSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$EapprovalBFREname)
                                @else
                                    <label>
                                        {{ $EapprovalBFREname->full_name }}
                                    </label>
                                @endif
                            @endif
                        @endif
                    </td>
                    <td>
                        @if (!$EsatApprovalBSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$EsatApprovalBSuccess->editor_id)
                                <form action="{{ route('assignmoa', $EsatApprovalBSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $EsatApprovalBSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$EapprovalBSAEname)
                                @else
                                    <label>
                                        {{ $EapprovalBSAEname->full_name }}
                                    </label>
                                @endif

                            @endif
                        @endif
                    </td>
                    <td>
                        @if (!$EsunApprovalBSuccess)
                            <p>-not booked-</p>
                        @else
                            @if (!$EsunApprovalBSuccess->editor_id)
                                <form action="{{ route('assignmoa', $EsunApprovalBSuccess->id) }}" method="POST">
                                    @csrf
                                    <select class="form-select presenters" name="editorMonMorning">
                                        <option>--Select Editor--</option>
                                        @foreach ($editor as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a class="btn-group" role="group"
                                        href="{{ url('/assignMonA', $EsunApprovalBSuccess->id) }}">
                                        <button type="submit" class="btn btn-sm btn-success">Assign</button>
                                    </a>
                                </form>
                            @else
                                @if (!$EapprovalBSuEname)
                                @else
                                    <label>
                                        {{ $EapprovalBSuEname->full_name }}
                                    </label>
                                @endif
                            @endif
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
