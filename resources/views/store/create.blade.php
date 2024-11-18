<x-layout>
    <x-slot name="title">Create Store</x-slot>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <a href="{{ url('/store') }}" id="btnaddstores" class="btn btn-default btn-xm"><span
                    class="fa fa-arrow-left"></span></a>
            <div class="jumbotron">
                <h2>Add Store</h2>
                <hr>
                <form action="{{ url('store') }}" method="POST">
                    @csrf
                    <x-inputs.text name="store_name" placeholder="Enter Store" label="Store" />
                    <x-inputs.text name="store_code" placeholder="Enter Store Code" label="Store Code" />

                    <div class="form-group">
                        <label class="col-form-label">Industry</label>
                        <select name="industry_id" class="form-control">
                            <option value="">Select Industry</option>
                            @foreach ($industries as $industry)
                                <option value="{{ $industry->id }}">{{ ucwords(strtoupper($industry->industry)) }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Location</label>
                        <select name="location_id" class="form-control">
                            <option value="">Select Location</option>
                            @foreach ($locations as $location)
                                <option value="{{ $location->id }}">{{ ucwords(strtoupper($location->location)) }}
                                </option>
                            @endforeach
                        </select>
                    </div>



                    <button type="submit" class="btn btn-default">Create</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
