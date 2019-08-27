// var socket=io.connect("http://localhost:9090");
// function createSocket(user_id){
// 	socket.emit('user_id',user_id);
// 	// return socket;
// }
// function newMessageSent(data){
// 	var chatMessage=document.createElement("li");
// 	chatMessage.className="PersonalChatMessageMine";
// 	chatMessage.innerText=data.msg;
// 	console.log(chatMessage);
// 	console.log(document.getElementById("PCB"+data.receiver));
// 	document.getElementById("PCB"+data.receiver).appendChild(chatMessage);
// 	$('#CA'+data.receiver).animate({scrollTop: document.body.scrollHeight},"fast");
// }
// function createChatSpace(){
// 	var chatArea=document.getElementById("ChattingArea");
// 	var chatFloatButton=document.getElementById("ChatFloatButton");
// 	chatArea.removeChild(chatFloatButton);
// 	console.log("Chat mode on!");
// 	var chatBox=document.createElement("div");
// 	chatBox.id='ChatBox';
// 	var cross_button=document.createElement('span');
// 	cross_button.id="CloseChatBox";
// 	cross_button.innerHTML="X";
// 	cross_button.onmouseover=function(){
// 		this.style.color="grey";
// 	}
// 	cross_button.onmouseout=function(){
// 		this.style.color="white";
// 	}
// 	cross_button.onclick=function()
// 	{
// 		chatArea.removeChild(chatBox);
// 		// var arr=document.getElementsByClassName("PersonalChat");
// 		// for(i in arr){
// 		// 	document.getElementById('ChatNation').removeChild(arr[i]);
// 		// }
// 		chatArea.appendChild(chatFloatButton);
// 	}
// 	chatBox.appendChild(cross_button);
// 	var chatBoxTitle=document.createElement('span');
// 	chatBoxTitle.id="ChatBoxTitle";
// 	chatBoxTitle.innerHTML="UHL Chat Box";
// 	chatBox.appendChild(cross_button);
// 	chatBox.appendChild(chatBoxTitle);
// 	chatArea.appendChild(chatBox);
// 	console.log("asking for online users");
// 	socket.emit('getOnlineUsers');
// }

// function createChatBox(otherPerson){
// 	var chatNation=document.getElementById("ChatNation");
// 	var personalChat = document.createElement("div");
// 	personalChat.id="CB"+otherPerson;
// 	personalChat.className="PersonalChat";
// 	var personalChatTitle=document.createElement("span");
// 	personalChatTitle.className="PersonalChatTitle";
// 	personalChatTitle.innerHTML=otherPerson;
// 	personalChat.appendChild(personalChatTitle);
// 	var cross_button=document.createElement('span');
// 	cross_button.id="ClosePersonalChat";
// 	cross_button.innerHTML="X";
// 	cross_button.onmouseover=function(){
// 		this.style.color="grey";
// 	}
// 	cross_button.onmouseout=function(){
// 		this.style.color="white";
// 	}
// 	cross_button.onclick=function()
// 	{
// 		chatNation.removeChild(personalChat);
// 	}
// 	personalChat.appendChild(cross_button);
// 	var chatarea=document.createElement("div");
// 	chatarea.className="PersonalChatArea";
// 	chatarea.id="CA"+otherPerson;
// 	personalChat.appendChild(chatarea);
// 	var newmessage = document.createElement("input");
// 	newmessage.type="text";
// 	newmessage.className="ChatMessage";
// 	newmessage.id="NM"+otherPerson;
// 	newmessage.placeholder="Message";
// 	var send=document.createElement("button");
// 	send.className="SendMessage";
// 	send.id="SM"+otherPerson;
// 	send.innerHTML="Send";
// 	send.onclick=function(){
// 		var to=this.id.substr(2);
// 		var message=document.getElementById("NM"+to).value;
// 		var data={
// 			receiver:to,
// 			msg:message,
// 			timestamp:Math.round(+new Date()/1000)
// 		};
// 		socket.emit('newmessage',data);
// 		newMessageSent(data);
// 		document.getElementById("NM"+to).value='';
// 	};
// 	personalChat.appendChild(newmessage);
// 	personalChat.appendChild(send);
// 	chatNation.appendChild(personalChat);
// 	socket.emit('getMessages',otherPerson);
// }

// socket.on('onlineUsers',function(data){
// 	var chatBox=document.getElementById("ChatBox");
// 	console.log("Yosh!");
// 	var onlinePeople=document.createElement("ul");
// 	onlinePeople.id="OnlinePeople";
// 	for(i in data){
// 		var onlinePerson=document.createElement("li");
// 		onlinePerson.id="CW"+data[i];
// 		onlinePerson.innerHTML=data[i];
// 		onlinePerson.className="ChatBoxPerson";
// 		onlinePerson.onclick=function(){
// 			createChatBox(onlinePerson.id.substr(2));
// 		}
// 		onlinePeople.appendChild(onlinePerson);
// 		console.log(data[i]);
// 	}
// 	chatBox.appendChild(onlinePeople);
// });

// socket.on('messagesFound',function(data){
// 	console.log(data);
// 	var messages=data.messages;
// 	var currentUser=data.currentUser;
// 	var otherUser=data.otherUser;
// 	var chatBlock=document.createElement("ul");
// 	chatBlock.className="ChatBlock";
// 	chatBlock.id="PCB"+otherUser;
// 	document.getElementById("CA"+otherUser).innerHTML='';
// 	for(i in messages){
// 		if(messages[i].user1==currentUser){
// 			var chatMessage=document.createElement("li");
// 			chatMessage.className="PersonalChatMessageMine";
// 			chatMessage.innerText=messages[i].message;
// 			chatBlock.appendChild(chatMessage);
// 			// document.getElementById("CA"+otherUser).appendChild(chatMessage);
// 		}
// 		else{
// 			var chatMessage=document.createElement("li");
// 			chatMessage.className="PersonalChatMessageOther";
// 			chatMessage.innerText=messages[i].message;
// 			// document.getElementById("CA"+otherUser).appendChild(chatMessage);
// 			chatBlock.appendChild(chatMessage);
// 		}
// 	}
// 	document.getElementById("CA"+otherUser).appendChild(chatBlock);
// 	$('#CA'+otherUser).animate({scrollTop: document.body.scrollHeight},"fast");
// });