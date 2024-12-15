@extends('manager.layout')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">إضافة قاعة</h1>
    <form action="{{ route('manager.hall.store') }}" method="POST" enctype="multipart/form-data">
        @csrf


        <div class="row">
            @include('components.form-input', [
                'name' => 'name',
                'classes' => 'col-6',
                'label' => 'الاسم',
                'required' => 'required',
                'type' => 'text',
                'value' => old('name'),
                'extra_attr' => 'min=0 max=100 ',
            ])
            @include('components.form-input', [
                'name' => 'capacity',
                'label' => ' عدد المقاعد',
                'classes' => 'col-6',
                'value' => old('capacity'),
                'required' => 'required',
                'type' => 'number',
            ])
            @include('components.form-select', [
                'name' => 'cinema_id',
                'label' => ' السينما',
                'classes' => 'col-6',
                'options' => $cinemas,
                'required' => 'required',
                'selected' => old('cinema_id'),
            ])
        </div>
        <div class="row justify-content-end">
            <input class="btn btn-success m-2" type="submit" value="حفظ">
        </div>
    </form>
    @include('components.flash-message')
@endsection
