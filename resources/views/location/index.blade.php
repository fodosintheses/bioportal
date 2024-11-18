<x-layout>
    <x-slot name="title">AGC - BIOPORTAL | LOCATION</x-slot>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <a id="btnaddstores" href="{{ url('location/create') }}" class="btn btn-danger"><span
                    class="fa fa-plus-circle"></span> Add Location</a>
            <div class="jumbotron">


                <h2>Location</h2>
                <hr>
                <table class="table table-bordered" width="100%" border="1">
                    <thead>
                        <tr>
                            <th width="1">No.</th>
                            <th width="100">Location</th>
                            <th width="100">Abbreviation</th>
                            <th width="65"></th>
                            {{-- <th></th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($locations as $location)
                            <tr>
                                <td id="td1">
                                    <center>{{ $loop->iteration }}</center>
                                </td>
                                <td id="td1">{{ ucwords(strtolower($location->location)) }}</td>
                                <td id="td1">{{ ucwords(strtoupper($location->abbreviation)) }}</td>
                                <td>
                                    <center>
                                        <a href="{{ route('location.edit', $location->id) }}"
                                            class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            data-original-title="Edit"><span class="fa fa-edit"></span></a>

                                        {{-- <a href="{{ url('delete_location', $location->id) }}"
                                            class="btn btn-danger btn-sm"><span class="fa fa-trash"
                                                onclick="return confirm('Are you sure you want to delete this location?')"></span></a> --}}
                                    </center>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</x-layout>
