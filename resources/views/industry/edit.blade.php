<x-layout>
    <x-slot name="title">Update Industry</x-slot>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <a href="{{ url('industry') }}" id="btnaddstores" class="btn btn-default btn-xm"><span
                    class="fa fa-arrow-left"></span></a>
            <div class="jumbotron">
                <h2>Update Industry</h2>
                <hr>
                <form action="{{ route('industry.update', $industry->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <x-inputs.text label="Industry" name="industry" :value="old('industry', $industry->industry)" />

                    <x-inputs.text label="Abbreviation" name="abbreviation" :value="old('abbreviation', $industry->abbreviation)" />

                    <button type="submit" class="btn btn-default">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
