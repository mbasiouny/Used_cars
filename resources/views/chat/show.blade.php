@extends('layouts.app')

@section('content')
	<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <meta name="friendId" content="{{ $friend->id }}">
    <div class="container">
        <div class="column is-8 is-offset-2">
            <div class="panel">
                <div class="panel-heading">
                    {{ $friend->name }}
                    <div class="contain is-pulled-right">
                        <a href="{{ url('/chat') }}" class="is-link"> Go Back</a>
                    </div>
                    <chat v-bind:chats="chats" v-bind:userid="{{ Auth::user()->id }}" v-bind:friendid="{{ $friend->id }}"></chat>
                </div>
            </div>
        </div>
    </div>
@endsection