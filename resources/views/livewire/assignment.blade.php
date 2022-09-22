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
                            {{$mon}}
                        </th>
                        <th>{{$tue->format('d-m-Y')}}</th>
                        <th>{{$wed->format('d-m-Y')}}</th>
                        <th>{{$thurs->format('d-m-Y')}}</th>
                        <th>{{$friday->format('d-m-Y')}}</th>
                        <th>{{$sat->format('d-m-Y')}}</th>
                        <th>{{$sun->format('d-m-Y')}}</th>
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
                            <label>
                                {{-- {{$ApprovalSuccess->program_title}} --}}
                            </label>
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
