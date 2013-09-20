YUI().use("node-style", "io-upload-iframe", "json", "calendar", 'datatype-date', function(Y) {
//表格部分
if(Y.one("#list")){
	var table_el = Y.one("#list"),
	    table_tr_el = table_el.all("tr"),
	    table_sel_el = table_el.all("input.va-sel");

	table_el.on("click", function(e){
		var t_el = e.target;
		if(t_el.hasClass("va-sel")){
			if(t_el.ancestor("thead")){
				if(t_el.get("checked") == false){
					table_sel_el.set("checked", false);
				}else{
					table_sel_el.set("checked", true);
				}
			}
		}else if(t_el.hasClass("va-del")){
			var tips = "确定要操作此条数据吗？";
			if(t_el.getData("tips")){
				tips = t_el.getData("tips");
			}
			if(confirm(tips) === false){
				e.preventDefault();
			}
		}
	});
	table_tr_el.on("mouseover", function(e){
		e.currentTarget.addClass("table-hover");
	});
	table_tr_el.on("mouseout", function(e){
		e.currentTarget.removeClass("table-hover");
	});
}

//tabs部分
if(Y.one("#tabs")){
	var tabs_el = Y.one("#tabs"),
	    tabs_hd_el = tabs_el.all(".tabs-hd li"),
	    tabs_hda_el = tabs_el.all(".tabs-hd a"),
	    tabs_bd_el = tabs_el.all(".tabs-item");
	
	tabs_hda_el.on("click", function(e){
		e.preventDefault();
		var tel = e.target;
		tabs_hd_el.removeClass("selected");
		tabs_bd_el.removeClass("selected");
		tabs_hd_el.item(tel.getData("id")).addClass("selected");
		tabs_bd_el.item(tel.getData("id")).addClass("selected");
	});
}

//表单部分
if(Y.one("#form")){
	var form_el = Y.one("#form"),
	    form_inputs_el = form_el.all("input, select, textarea");
	//错误显示
	function input_show_error(el, err){
		if(err){
			el.addClass("input-text-error");
			return false;
		}
		el.removeClass("input-text-error");
		return true;
	};
	
	//number类型验证
	function input_plus_number_check(el){
		var min = el.get("min"),
		    max = el.get("max"),
		    step = el.get("step");
		var v = el.get("value")/1;
		
		if(min && min > v){
			return input_show_error(el, true);
		}
		if(max && max < v){
			return input_show_error(el, true);
		}
		if(step && v%step != 0){
			return input_show_error(el, true);
		}
		return input_show_error(el, false);
	}
	
	//date类型初始化
	function input_plus_date(el){
		var box_el = el.create('<div class="form-date"></div>');
		el.insert(box_el, "after");
		el.set("autocomplete", "off");
		
		var v = el.get("value").split("-");
		
		var calendar = new Y.Calendar({
			contentBox: box_el,
			showPrevMonth: true,
			showNextMonth: true
		}).render();
		calendar.hide();

		var lock = false;
		calendar.on("dateClick", function(e){
			el.set("value", Y.DataType.Date.format(e.date));
			calendar.hide();
			if(el.ancestor("DD")) el.ancestor("DD").setStyle("zIndex", "9");
			lock = false;
			input_plus_date_check(el);
		});
		el.on("focus", function(){
			if(!lock){
				var v = Y.DataType.Date.parse(el.get("value"));
				if(Y.DataType.Date.isValidDate(v))
				calendar.set("date", v);
				calendar.show();
				if(el.ancestor("DD")) el.ancestor("DD").setStyle("zIndex", "99");
			}
		});
		el.on("blur", function(){
			if(!lock){
				calendar.hide();
				if(el.ancestor("DD")) el.ancestor("DD").setStyle("zIndex", "9");
			}
		});
		box_el.on("mouseover", function(){
			lock = true;
		});
		box_el.on("mouseout", function(){
			lock = false;
		});
	}
	//date类型验证
	function input_plus_date_check(el){
		return true;
		var v = Y.DataType.Date.parse(el.get("value"));
		return input_show_error(el, !Y.DataType.Date.isValidDate(v));
	}
	
	//filebox类型初始化
	var filebox_form_el = undefined;
	function input_plus_filebox(el){
		//创建form
		if(!filebox_form_el){
			filebox_form_el = Y.one("body").create('<form enctype="multipart/form-data" method="post" action="#"></form>');
			Y.one("body").append(filebox_form_el);
		}
		var box_el = el.ancestor("DD"),
		    act_el = box_el.create('<div></div>'),
		    showCn = function(t, c){
		    	switch(t){
		    		case 'edit':
		    			act_el.setContent('<span>'+c+'</span> <button type="button" class="ya-edit">修改</button>');
		    			break;
		    		case 'up':
		    			act_el.setContent('<div><input type="file" class="input-file" name="file"> <button type="button" class="ya-up">上传</button></div>');
		    			break;
		    		case 'load':
		    			act_el.setContent('<span>上传中，请稍后......</span>');
		    			break;
		    		case 'error':
		    			act_el.setContent('<span>'+c+'</span> <button type="button" class="ya-edit">重新上传</button>');
		    			break;
		    	}
		    };
		
		el.set("type", "hidden");
		el.insert(act_el, "before");
		
		act_el.on("click", function(e){
			var tel = e.target;
			if(tel.hasClass("ya-edit")){
				showCn('up');
			}else if(tel.hasClass("ya-up")){
				filebox_form_el.append(act_el.one("div"));
				filebox_form_el.set("action", el.getData("url"));
				
				Y.io(el.getData("url"), {
					method: 'POST',
					form: {
						id: filebox_form_el,
						upload: true
					},
					on: {
						start: function(){
							showCn('load');
						},
						complete: function(id, o){
							var re = Y.JSON.parse(o.responseText);
							if(re.start == 0){
								showCn('edit', re.data);
								el.set('value', re.data);
							}else{
								showCn('error', re.error);
							}
						},
						end: function(){
							filebox_form_el.setContent('');
						}
					}
				});
			}
		});
		if(el.getData("value") == ""){
			showCn('up');
		}else{
			showCn('edit', el.getData("value"));
			el.set("value", el.getData("value"));
		}
	}
	
	function input_check(el){
		var v = el.get("value");
		input_show_error(el, false);
		//必填项为空的处理
		if(el.getData("empty") == "1" && v == ""){
			return true;
		}else if(el.getData("empty") == "" && v == ""){
			return input_show_error(el, true);
		}
		if(el.getData("plus")){
			//扩展
			switch(el.getData("plus")){
				case "number":
					return input_plus_number_check(el);
					break;
				case "date":
					return input_plus_date_check(el);
					break;
			}
		}else if(el.getData("check")){
			//默认正则验证
			eval("var c = "+el.getData("check"));			
			return input_show_error(el, !c.test(v));
		}
		return true;
	}
	
	form_inputs_el.each(function(el){
		//扩展
		switch(el.getData("plus")){
			case "date":
				input_plus_date(el);
				break;
			case "filebox":
				input_plus_filebox(el);
				break;
		}
		el.on("blur", function(){
			input_check(el);
		});
	});
	
	form_el.on("submit", function(e){
		var error = false;
		form_inputs_el.each(function(el){
			var cr = input_check(el);
			if(!cr){
				error = true;
			}
		});
		if(error){
			e.preventDefault();
		}
	});
}

});