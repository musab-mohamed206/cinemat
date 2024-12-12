@extends('admin.layout')

@section('content')
<h1 class="h3 mb-4 text-gray-800">المستخدمين</h1>
@if ($users->isNotEmpty())
<table class="showtime-table table table-striped table-hover rounded">
    <thead class="thead-dark">
        <tr>
            <th scope="col">اسم المستخدم</th>
            <th scope="col">المنصب</th>
            <th scope="col">البريدالإلكتروني</th>
            <th scope="col"></th>
        </tr>
    </thead>
    @foreach ($users as $user)
    <tr>
        <th>{{ $user->username }}</th>
        <td>{{ $user->role->title }}</td>
        <td>{{ $user->email }}</td>
        @if (!$user->isAdmin())
        <td class="">
            <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                @csrf
                @method('delete')
                <input class="btn btn-danger text-white" type="submit" value="حذف المستخدم">
            </form>
        </td>
        @else
        <td class="">
            <button class="btn btn-danger text-white disabled" type="button">حذف المستخدم</button>
        </td>
        @endif
    </tr>
    @endforeach
</table>
@else
<div class="bg-light p-3 font-weight-bold rounded text-center">
   لايوحد مستخدمين حالياً
</div>
@endif
@include('components.flash-message')
@endsection