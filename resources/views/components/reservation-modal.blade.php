<div id="reservation-popup" class="reservation-container reservation-popup mfp-hide p-3">
    <form id="reservation-form" action="">
        @csrf

        <!-- One "tab" for each step in the form: -->
        <div class="tab">
            <h2>حجز المقاعد</h2>
            @include('components.cinema-view')
        </div>

        @auth
        <div class="tab" style="display: none">
            <h2>تفاصيل الدفع</h2>
            @include('components.payment-view')
        </div>
        @endauth


        <div style="overflow:auto;">
            <div style="float:right;" class="mt-3">
                <button type="button" id="prevBtn" class="btn btn-red" onclick="nextPrev(-1)">السابق</button>
                <button type="button" id="nextBtn" class="btn btn-green" onclick="nextPrev(1)">التالي</button>
            </div>
        </div>

    </form>
</div>

<script src="{{ asset('js/reservations-popup.js') }}"></script>