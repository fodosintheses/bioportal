<x-layout>
    <x-slot name="title">AGC - BIOPORTAL | INDUSTRY</x-slot>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <a id="btnaddstores" href="{{ url('industry/create') }}" class="btn btn-danger"><span
                    class="fa fa-plus-circle"></span> Add Industries</a>
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
                        @foreach ($industries as $industry)
                            <tr>
                                <td id="td1">
                                    <center>{{ $loop->iteration }}</center>
                                </td>
                                <td id="td1">{{ ucwords(strtolower($industry->industry)) }}</td>
                                <td id="td1">{{ ucwords(strtoupper($industry->abbreviation)) }}</td>
                                <td>
                                    <center>
                                        <a href="{{ route('industry.edit', $industry->id) }}"
                                            class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            data-original-title="Edit"><span class="fa fa-edit"></span></a>

                                        {{-- <a href="{{ url('delete_industry', $industry->id) }}"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this industry?')"
                                            onclick="return false;">
                                            <span class="fa fa-trash"></span>
                                        </a> --}}
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
