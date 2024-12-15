@extends('manager.layout')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">إضافة عرض</h1>
    <form action="{{ route('manager.shows.store') }}" method="POST">
        @csrf

        <div class="row">
            @include('components.form-select', [
                'name' => 'movie_id',
                'label' => 'اسم الفيلم',
                'classes' => 'col-6',
                'options' => $movies,
                'required' => 'required',
                'selected' => old('movie_id'),
            ])
            @include('components.form-select', [
                'name' => 'room_id',
                'label' => ' الصالة',
                'classes' => 'col-6',
                'options' => $halls,
                'required' => 'required',
                'selected' => old('hall_id'),
            ])
            @include('components.form-select', [
                'name' => 'room_id',
                'label' => 'حجم الصالة',
                'classes' => 'col-6',
                'options' => $rooms,
                'required' => 'required',
                'selected' => old('room_id'),
            ])
        </div>

        <div class="row">
            @include('components.form-date', [
                'name' => 'date',
                'label' => 'تاريخ العرض',
                'classes' => 'col-6',
                'required' => 'required',
                'min' => \Carbon\Carbon::today()->addDay()->toDateString(),
                'value' => old('date'),
            ])
            @include('components.form-input', [
                'name' => 'price',
                'type' => 'number',
                'label' => 'السعر (' . config('app.currency') . ')',
                'classes' => 'col-6',
                'required' => 'required',
                'extra_attr' => 'step=.01',
                'value' => old('price'),
            ])
        </div>

        <div class="row">
            @include('components.form-time', [
                'name' => 'start_time',
                'label' => 'بداية العرض',
                'classes' => 'col-6',
                'value' => old('start_time'),
                'required' => 'required',
            ])
            @include('components.form-time', [
                'name' => 'end_time',
                'label' => 'نهاية العرض',
                'classes' => 'col-6',
                // 'value'=>$show->end_time->format('H:i'),
                'required' => 'required',
            ])
        </div>

        <div class="row justify-content-end">
            <input class="btn btn-success m-2" type="submit" value="حفظ">
        </div>
    </form>
    @include('components.flash-message')
@endsection
