@extends('manager.layout')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">تعديل فيلم</h1>
    <form action="{{ route('manager.hall.update', $hall) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf



        <div class="row">
            @include('components.form-input', [
                'name' => 'name',
                'classes' => 'col-6',
                'label' => 'الاسم',
                'required' => 'required',
                'type' => 'text',
                'value' => $hall->name,
                'extra_attr' => 'min=0 max=100 ',
            ])
            @include('components.form-input', [
                'name' => 'capacity',
                'label' => ' عدد المقاعد',
                'classes' => 'col-6',
                'value' => $hall->capacity,
                'required' => 'required',
                'type' => 'number',
            ])

            @include('components.form-select', [
                'name' => 'cinema_id',
                'label' => 'السينما',
                'classes' => 'col-6',
                'options' => $cinemas,
                'required' => 'required',
                'selected' => $hall->cinema_id,
            ])
        </div>


        <div class="row justify-content-end">
            <input class="btn btn-warning m-2" type="reset">
            <input class="btn btn-success m-2" type="submit" value="تحديث">
        </div>
    </form>
    @include('components.flash-message')
@endsection
