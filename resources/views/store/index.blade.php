<x-layout>
    <x-slot name="title">AGC - BIOPORTAL | STORE</x-slot>
    <div class="row">

        <a id="btnaddstores" href="{{ url('store/create') }}" class="btn btn-danger"><span class="fa fa-plus-circle"></span>
            Add Stores</a>
        <div class="jumbotron">

            <h2>Stores List</h2>
            <hr>

            <div>
                <h3>Chowking</h3>
                <p></p>
                <ul class="list-group">
                    @foreach ($chowking as $ck)
                        <li class="list-group-item">
                            <span class="badge">
                                <a href=""><span class="fa fa-trash"></span></a>
                            </span>
                            <span class="badge">
                                <a href=""><span class="fa fa-edit"></span></a>
                            </span>
                            {{ $loop->iteration . '.' . ' ' . ucwords(strtolower($ck->store_name) . ' | ' . $ck->store_code . ' | ' . $ck->location->abbreviation) }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h3>Greenwich</h3>
                <ul class="list-group">
                    @foreach ($greenwich as $gw)
                        <li class="list-group-item">
                            <span class="badge">
                                <a href=""><span class="fa fa-trash"></span></a>
                            </span>
                            <span class="badge">
                                <a href=""><span class="fa fa-edit"></span></a>
                            </span>
                            {{ $loop->iteration . '.' . ' ' . ucwords(strtolower($gw->store_name) . ' | ' . $gw->store_code . ' | ' . $gw->location->abbreviation) }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h3>Jollibee</h3>
                <ul class="list-group">
                    @foreach ($jollibee as $jb)
                        <li class="list-group-item">
                            <span class="badge">
                                <a href=""><span class="fa fa-trash"></span></a>
                            </span>
                            <span class="badge">
                                <a href=""><span class="fa fa-edit"></span></a>
                            </span>
                            {{ $loop->iteration . '.' . ' ' . ucwords(strtolower($jb->store_name) . ' | ' . $jb->store_code . ' | ' . $jb->location->abbreviation) }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h3>Mang Inasal</h3>
                <ul class="list-group">
                    @foreach ($manginasal as $mi)
                        <li class="list-group-item">
                            <span class="badge">
                                <a href=""><span class="fa fa-trash"></span></a>
                            </span>
                            <span class="badge">
                                <a href=""><span class="fa fa-edit"></span></a>
                            </span>
                            {{ $loop->iteration . '.' . ' ' . ucwords(strtolower($mi->store_name) . ' | ' . $mi->store_code . ' | ' . $mi->location->abbreviation) }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h3>Red Ribbon</h3>
                <ul class="list-group">
                    @foreach ($redribbon as $rr)
                        <li class="list-group-item">
                            <span class="badge">
                                <a href=""><span class="fa fa-trash"></span></a>
                            </span>
                            <span class="badge">
                                <a href=""><span class="fa fa-edit"></span></a>
                            </span>
                            {{ $loop->iteration . '.' . ' ' . ucwords(strtolower($rr->store_name) . ' | ' . $rr->store_code . ' | ' . $rr->location->abbreviation) }}
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>

    </div>

</x-layout>
