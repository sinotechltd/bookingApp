<div class="container-fluid">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="/">Production Facility</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/editing">Editing Facility</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/equipments" @disabled(true)>Equipments</a>
        </li>
    </ul>
    <div class="row">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
    </div>
    <div class="timetable">
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Monday</th>
                    <th scope="col">Tuesday</th>
                    <th scope="col">Wednesday</th>
                    <th scope="col">Thursday</th>
                    <th scope="col">Friday</th>
                    <th scope="col">Saturday</th>
                    <th scope="col">Sunday</th>
                </tr>
                <tr>
                    <th>
                        <div class="day1" id="monday">14/9/2022</div>
                    </th>
                    <td>
                        <div class="day2" id="tuesday">14/9/2022</div>
                    </td>
                    <td>
                        <div class="day3" id="wenesday">14/9/2022</div>
                    </td>
                    <td>
                        <div class="day4" id="thursday">14/9/2022</div>
                    </td>
                    <td>
                        <div class="day5" id="friday">14/9/2022</div>
                    </td>
                    <td>
                        <div class="day6" id="saturday">14/9/2022</div>
                    </td>
                    <td>
                        <div class="day7" id="sunday">14/9/2022</div>
                    </td>
                </tr>
            </thead>
            <tbody>
                <td colspan="100"> <h3>Morning</h3></td> 
                <tr>                                       
                    <td> <button class='btn btn-success'>Available</button></td>
                    <td> <button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                </tr>
                <td colspan="100"> <h5>Final Cat B</h5></td>
                <tr>                    
                    <td> <button class='btn btn-success'>Available</button></td>
                    <td> <button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                </tr>
                <td colspan="100"> <h5>Final Cat C</h5></td>
                <tr>                    
                    <td> <button class='btn btn-success'>Available</button></td>
                    <td> <button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                </tr>                
            </tbody>
            <tbody>
                <td colspan="100"> <h3>Evening</h3></td> 
                <tr>                                       
                    <td> <button class='btn btn-success'>Available</button></td>
                    <td> <button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                </tr>
                <td colspan="100"> <h5>Final Cat B</h5></td>
                <tr>                    
                    <td> <button class='btn btn-success'>Available</button></td>
                    <td> <button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                </tr>
                <td colspan="100"> <h5>Final Cat C</h5></td>
                <tr>                    
                    <td> <button class='btn btn-success'>Available</button></td>
                    <td> <button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                    <td><button class='btn btn-success'>Available</button></td>
                </tr>                
            </tbody>
        </table>
    </div>

</div>
