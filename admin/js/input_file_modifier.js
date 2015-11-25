var Site = {
	start: function(){
		if($('file_upload')) Site.changeInput();		
	},
	
	changeInput: function(){
		var input = $('file_upload').getElement('input[type=file]');	
		var upload_btn = $('file_upload').getElement('input[type=submit]').remove();
		var container = new Element('span',{
			'class':'input_file_wrapper'
		});
		var fake_text = new Element('input',{
			'type':'text',
			'class':'fake-text',
			'value':'Choose file from your hard drive (press BROWSE)'
		});
		input.set({
			styles:{
				'opacity':0.0001,
				'width':376,
				'height':30,
				'margin':0,
				'padding':0,
				'font-size':24,
				'border':'none',
				'z-index':10000
			}		  
		})
		container.injectBefore(input).adopt([input,fake_text]);
		input.addEvents({
			'change':function(){
				fake_text.set({
					'value':input.get('value')
				});
				$('explain').set({
					'text':'... file is uploading. Please be pacient.'
				});
				$('file_upload').submit();
			}			
		})		
	}
}
window.addEvent('domready', Site.start);