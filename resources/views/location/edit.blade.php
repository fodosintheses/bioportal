<x-layout>
    <x-slot name="title">Update Location</x-slot>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <a href="{{ url('location') }}" id="btnaddstores" class="btn btn-default btn-xm"><span
                    class="fa fa-arrow-left"></span></a>
            <div class="jumbotron">
                <h2>Update Location</h2>
                <hr>
                <form action="{{ route('location.update', $location->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <x-inputs.text label="Location" name="location" :value="old('location', $location->location)" />

                    <x-inputs.text label="Abbreviation" name="abbreviation" :value="old('abbreviation', $location->abbreviation)" />

                    <button type="submit" class="btn btn-default">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
