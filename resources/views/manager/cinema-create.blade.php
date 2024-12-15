@extends('manager.layout')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">إضافة فيلم</h1>
    <form action="{{ route('manager.cinema.store') }}" method="POST" enctype="multipart/form-data">
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
                'name' => 'address',
                'label' => 'العنوان',
                'classes' => 'col-6',
                'value' => old('address'),
                'required' => 'required',
                'type' => 'text',
            ])
        </div>
        <div class="row justify-content-end">
            <input class="btn btn-success m-2" type="submit" value="حفظ">
        </div>
    </form>
    @include('components.flash-message')
@endsection
