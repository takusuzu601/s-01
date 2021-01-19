@extends('layouts.app_oner')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <form action="">
        <label for="">都道府県を選択</label>
        <select id="pref" name="select_pref" class="select_genre">
        <option>{{\App\Constants\GlobalConstants::ALL}}</option>
        @foreach(\App\Constants\GlobalConstants::LIST_PREF as $pref)
        <option>{{$pref}}</option>
        @endforeach
        </select>

            <div class="select-container">
                <label for="">内容を選択</label>
            <select id="genre" name="select_genre" class="select_genre">
                <option>{{\App\Constants\GlobalConstants::ALL}}</option>
                @foreach(\App\Constants\GlobalConstants::LIST_CATEGORY as $category)
                <option>{{$category}}</option>
                @endforeach
            </select>
            </div>
                    </form>
                </div>




            </div>
        </div>
    </div>
</div>
@endsection
