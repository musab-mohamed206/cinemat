@extends('manager.layout')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">تعديل فيلم</h1>
    <form action="{{ route('manager.cinema.update', $cinema) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf


        <div class="row">
            @include('components.form-input', [
                'name' => 'name',
                'classes' => 'col-6',
                'label' => 'اسم الفيلم',
                'required' => 'required',
                'type' => 'text',
                'value' => $cinema->name,
                'extra_attr' => 'min=0 max=100',
            ])
            @include('components.form-input', [
                'name' => 'address',
                'label' => ' العنوان ',
                'classes' => 'col-6',
                'value' => $cinema->address,
                'required' => 'required',
                'type' => 'text',
            ])
        </div>



        <div class="row justify-content-end">
            <input class="btn btn-warning m-2" type="reset">
            <input class="btn btn-success m-2" type="submit" value="تحديث">
        </div>
    </form>
    @include('components.flash-message')
@endsection
