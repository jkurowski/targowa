<div id="filtr">
    <div class="container">

        @if(isset($title))
        <div class="row">
            <div class="col-12">
                <h2>{{ $title }}</h2>
            </div>
        </div>
        @endif

        <form method="get" class="row" action="@if(isset($route)) {{ route($route['name'], $route['params']) }}#filtr @else #filtr @endif">
            <div class="col-12 col-sm">
                <label for="filtr-rooms" class="w-100">Pokoje</label>
                <select name="rooms" id="filtr-rooms">
                    <option value="">Wszystkie</option>
                    @foreach($uniqueRooms as $room)
                        <option value="{{ $room }}" @if(request()->input('rooms') == $room) selected @endif>{{ $room }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12 col-sm">
                <label for="filtr-status" class="w-100">Status</label>
                <select name="status" id="filtr-status">
                    <option value="">Wszystkie</option>
                    <option value="1" @if(request()->input('status') == 1) selected @endif>Na sprzedaż</option>
                    <option value="2" @if(request()->input('status') == 2) selected @endif>Rezerwacja</option>
                    <option value="3" @if(request()->input('status') == 3) selected @endif>Sprzedane</option>
                </select>
            </div>

            @if($area_range)
                <div class="col-12 col-sm">
                    <label for="filtr-area" class="w-100">Powierzchnia</label>
                    <select name="area" id="filtr-area">
                        <option value="">Wszystkie</option>
                        {!! area2Select($area_range) !!}
                    </select>
                </div>
            @endif
            <div class="col-12 col-sm">
                <label for="filtr-button" class="w-100">&nbsp;</label>
                <button type="submit" id="filtr-button" class="bttn bttn-center bttn-sm w-100">Szukaj</button>
            </div>
        </form>
    </div>
</div>
