@extends('layouts.main')
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-3">

                @include('pages.page-box')

            </div>
            <div class="col-6">

                @include('Ideas.success-box')
                @include('Ideas.idea-share-box')

                <hr>

                <div class="mt-3">

                    @include('Ideas.idea-card')

                </div>
            </div>
            <div class="col-3">

                @include('search.box')
                @include('follow.box')

            </div>
        </div>
    </div>
@endsection
