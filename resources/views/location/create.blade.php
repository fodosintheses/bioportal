<x-layout>
    <x-slot name="title">Create Location</x-slot>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <a href="{{ url('/location') }}" id="btnaddstores" class="btn btn-default btn-xm"><span
                    class="fa fa-arrow-left"></span></a>
            <div class="jumbotron">
                <h2>Create Location</h2>
                <hr>
                <form action="{{ url('location') }}" method="POST">
                    @csrf
                    <x-inputs.text name="location" placeholder="Enter Location" label="Location" />
                    <x-inputs.text name="abbreviation" placeholder="Enter Abbreviation" label="Abbreviation" />
                    <button type="submit" class="btn btn-default">Create</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
