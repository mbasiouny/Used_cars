@extends('layouts.app')




@section('content')
	
	<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <meta name="friendId" content="{{ $friend->id }}">
    <div class="container">
        <div class="column is-8 is-offset-2">
            <div class="panel">
			@if (Session::has('message'))
				<div class="alert alert-info">{{ Session::get('message') }}</div>
				
			@endif
                <div class="panel-heading">
                    {{ $friend->name }}
                    <div class="contain is-pulled-right">
                        <a href="{{ url('/chat') }}" class="is-link"> Go Back</a>
                    </div>
					<div class="contain is-pulled-right">
                        <a href="{{ route ('chat.delete', $friend->id) }}" style = "margin-right:10px;" class="is-link"> Delete Chat </a>
                    </div>
                    <chat v-bind:chats="chats" v-bind:userid="{{ Auth::user()->id }}" v-bind:friendid="{{ $friend->id }}"></chat>
                </div>
            </div>
        </div>
    </div>
@endsection