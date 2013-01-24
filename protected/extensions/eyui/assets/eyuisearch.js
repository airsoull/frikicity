var EYuiSearch = function(id,serializedData,action,_callbackForsuccess,_callbackForError	
	,modelAttributeId){
	
	var searchButton = $('#'+id+' .searchbar input.button');
	var textToSearch = $('#'+id+' .searchbar input.textinput');
	var selectList = $('#'+id+' .resultsbar select');
	var loader = $('#'+id+' .searchbar img');
	var resultsBar = $('#'+id+' .resultsbar');
	var okButton = $('#'+id+' .resultsbar input.button');
	var attributeTobeSetted = $('#'+modelAttributeId);
	
	searchButton.click(function(){
		var txt = textToSearch.val().trim();
		if(txt.length > 0)
		{
			var url = action+"&action=search&data="+serializedData+"&searchtext="+txt;
			selectList.find('option').each(function(){ $(this).remove(); });
			loader.show();
			$.getJSON(url, function(data) {
				$.each(data, function(index, val) {
					selectList.append("<option value='"+index+"'>"+val+"</option>");
				});
				loader.hide();
				resultsBar.show('fast');
			}).error(function(e){	
				loader.hide();
				_callbackForError(e);
			});
		}
	});
	
	textToSearch.keydown(function(){
		resultsBar.hide('fast');
		selectList.find('option').each(function(){ $(this).remove(); });
	});
	
	okButton.click(function(){
		if(selectList.val() != ''){
			
			attributeTobeSetted.val(selectList.val());
			
			selectList.find('option').each(function(){
				var opt = $(this);
				if(opt.val() == selectList.val()){
					_callbackForsuccess(opt.val(),opt.text());
					resultsBar.hide('fast');
				}
			});
		}
	});
	
};