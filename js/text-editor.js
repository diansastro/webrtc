
	var sendDelay ,
		myVar;
	_('text-editor').contentDocument.designMode  = "on";

	function printDoc(documentPrint){
  		var oPrntWin = window.open("","_blank","width=544,height=784,left=400,top=100,menubar=yes,toolbar=no,location=no,scrollbars=yes");
  		oPrntWin.document.open();
  		oPrntWin.document.write("<!doctype html><html><head><title><\/title><\/head><body onload=\"print();\">" + _(documentPrint).contentWindow.document.body.innerHTML + "<\/body><\/html>");
  		oPrntWin.document.close();
	}

//	_('text-editor').contentWindow.addEventListener('keyup',function(){
//		clearTimeout(myVar);
//		myVar = setTimeout(function(){
//			sendDataTexteditor();
//		}, 1000);
//	});

	function sendChat(){
		clearTimeout(myVar);
		myVar = setTimeout(function(){
			sendDataTexteditor();
		}, 1000);
	};


	function sendDataTexteditor(){
		var content = _('text-editor').contentWindow.document.body.innerHTML;

		var data = JSON.stringify({"val":content, "type": 'TextEditor'});

		for (var i = 0; i < Object.keys(users).length; i++) {
            users[i].dataChannel.send(data);
        };
	}
