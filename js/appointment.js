function showalert(){
    alert("Successfully booked the Appointment!");
}
fuction validates(){
	var name=document.getElementById("name").value;
	var email=document.getElementById("email").value;
	var tel=document.getElementById("tel").value;
	var hospital=document.getElementById("hospital").value;
	var appoinment_for=document.getElementById("appoinment_for").value;
	var appoinment_description=document.getElementById("appoinment_description").value;
	var date=document.getElementById("date").value;
	var time=document.getElementById("time").value;
	var error_message=document.getElementById("error_message");
error_message.style.padding="px";
var text:
if (name.length<5){
text="please Enter your Full name";
	error_message.innerHTML=text;
	return false;
}
if(email.indexOf("@")==-1|| email.length<6){
	text="please Enter valid mail";
error_message.innerHTML=text;
	return false;
}
if(isNaN(tel) ||phone.length!=10){
text="Please Enterthe valid phone number";
error_message.innerHTML=text;
	return false;
}
if(message.length<=10){
text-"please enter more description clearly";
error_message.innerHTML=text;
	return false;
}
alert("request submitted successfully!");
	return true;
}