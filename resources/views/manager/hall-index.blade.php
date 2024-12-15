@extends('manager.layout')

@section('content')
    <h1 class="h3 mb-0 text-gray-800">السينما</h1>
    @if ($halls->isNotEmpty())
        <table class="showtime-table table table-striped table-hover rounded">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">الرقم</th>
                    <th scope="col">الاسم</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            @foreach ($halls as $hall)
                <tr>
                    <th>{{ $hall->id }}</th>
                    <th>{{ $hall->name }}</th>
                    <td>
                        <a href="{{ route('manager.hall.edit', $hall->id) }}" class="btn btn-warning text-white">تعديل</a>
                    </td>
                    <td>
                        <form action="{{ route('manager.hall.destroy', $hall->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger text-white" type="submit" value="حذف">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <div class="bg-light p-3 font-weight-bold rounded text-center">
            لايوجد حالياً سينما
        </div>
    @endif
    @include('components.flash-message')
@endsection
