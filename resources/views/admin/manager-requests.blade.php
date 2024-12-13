@extends('admin.layout')

@section('content')
<h1 class="h3 mb-4 text-gray-800">طلبات المسؤول</h1>
@if ($users->isNotEmpty())
<table class="showtime-table table table-striped table-hover rounded">
    <thead class="thead-dark">
        <tr>
            <th scope="col">الأسم</th>
            <th scope="col">البريد الإلكتروني</th>
            <th scope="col">تاريخ الإنشاء</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    @foreach ($users as $user)
    <tr id="{{ $user->id }}">
        <th>{{ $user->username }}</th>
        <td>{{ $user->email }}</td>
        <td>{{ $user->created_at }}</td>
        <td class="">
            <form action="{{ route('users.update',$user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="accepted" value=1>
                <input class="btn btn-info text-white" type="submit" value="قبول">
            </form>
        </td>
        <td class="">
            <form action="{{ route('users.update',$user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="accepted" value=0>
                <input class="btn btn-danger text-white" type="submit" value="رفض">
            </form>
        </td>
    </tr>
    @endforeach
</table>
@else
<div class="bg-light p-3 font-weight-bold rounded text-center">
    لا يوجد طلبات للمسؤولين حالياً
</div>
@endif
@include('components.flash-message')
@endsection