<div class="container">
    <h1 class="mt-0 mb-0">الحجوزات</h1>
    <hr>
    @if ($reservations->isNotEmpty())
        <table class="table table-responsive table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">الفيلم</th>
                    <th scope="col">وقت العرض</th>
                    <th scope="col">رقم المقعد</th>
                    <th scope="col">سعر التذكرة</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            @foreach ($reservations as $reservation)
                <tr>
                    <th>{{ $reservation->show->movie->title }}</th>
                    <th>{{ $reservation->show->date->toDayDateTimeString() }}</th>
                    <td>{{ $reservation->seat_number }}</td>
                    <td>{{ $reservation->show->price . ' ' . config('app.currency') }}</td>
                    <td>التذكرة</td>
                    <td class="disabled">
                        @if ($reservation->show->date > Carbon\Carbon::now()->add(3, 'hour'))
                            <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-second text-white" type="submit" value="إلغاء الحجز">
                            </form>
                        @endif
                        <a href="{{ route('reservations.show', $reservation->id) }}" class="btn btn-main text-white">عرض
                            التذكرة</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <div class="bg-light p-3 font-weight-bold rounded text-center">
            ليس لديك حجوزات حالياً
        </div>
    @endif
</div>
