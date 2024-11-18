<x-layout>
    <x-slot name="title">Create Industry</x-slot>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <a href="{{ url('/industry') }}" id="btnaddstores" class="btn btn-default btn-xm"><span
                    class="fa fa-arrow-left"></span></a>
            <div class="jumbotron">
                <h2>Create Indusstry</h2>
                <hr>
                <form action="{{ url('industry') }}" method="POST">
                    @csrf
                    <x-inputs.text name="industry" placeholder="Enter Industry" label="industry" />
                    <x-inputs.text name="abbreviation" placeholder="Enter Abbreviation" label="Abbreviation" />
                    <button type="submit" class="btn btn-default">Create</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
