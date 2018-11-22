<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>chat</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

	<style type="text/css">

	.list-group{
		overflow-y:scroll;
		height: 200px;	
	}

</style>
</head>
<body>

	<div class="container">
		<div class="row" id="app">

			<div class="offset-4 col-4 ">
				<li class="list-group-item active">Chat Room <span class="badge badge-pill badge-danger">@{{numberOfUsers}}</span></li>
				<div class="badge badge-pill badge-primary">@{{typing}}</div>
				<ul class="list-group" v-chat-scroll>
					<message 
					v-for="value,index in chat.message" 
					:key=value.index
					:color=chat.color[index]
					:user = chat.user[index]
					:time = chat.time[index]
					>

					@{{value}}
				</message>
			</ul>
			<input type="text" name="" class="form-control" v-model="message" @keyup.enter='send' placeholder="Type your message here....">
			<br>
			 <a href="" class="btn btn-warning btn-sm" @click.prevent='deleteSession'>Delete Chat</a> 			
		</div>
	</div>
</div>

<script type="text/javascript" src="{{ asset(('js/app.js') )}}"></script>
</body>
</html>