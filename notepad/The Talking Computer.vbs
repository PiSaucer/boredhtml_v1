Dim Message, Speak
Message=InputBox("Enter text","Speak")
Set Speak=CreateObject("sapi.spvoice")
Speak.Speak Message