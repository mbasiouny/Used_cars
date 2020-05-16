@extends('layouts.app')

@section('content')
	<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <div class="container">
        <div class="column is-8 is-offset-2">
            <div class="panel" >
                <div class="panel-heading">
                    List of all Chats
                </div>
                @forelse ($friends as $friend)
                    <a href="{{ route('chat.show', $friend->id) }}" class="panel-block" style="justify-content: space-between;">
                        <div>{{ $friend->name }}</div>
                    </a>
					
                @empty
                    <div class="panel-block">
                        You don't have any Chats
                    </div>
                @endforelse
            </div>
			
        </div>
    </div>
	
@endsection
