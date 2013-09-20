var VE = VE || Zepto;

;(function(VE){
    VE.extend(VE.fn, {
    	vwTabs: function(){
    	    var el = $(this),
    	    	hd_els = el.find(".vj-tabs-hd"),
    	        bd_els = el.find(".vj-tabs-bd");
    	    hd_els.each(function(i){
    	        hd_els.eq(i).attr("data-tabsid", i);
    	        if(!hd_els.eq(i).hasClass("vc-selected")){
    	            bd_els.eq(i).removeClass("vc-selected");
    	        }else{
    	            bd_els.eq(i).addClass("vc-selected");
    	        }
    	    });
    	    el.on("click", ".vj-tabs-hd", function(e){
    	        e.preventDefault();
    	        hd_els.removeClass("vc-selected");
                bd_els.removeClass("vc-selected");
    	        $(this).addClass("vc-selected");
    	        bd_els.eq($(this).attr("data-tabsid")).addClass("vc-selected");
    	    });
    	},
    	vwDropMenu : function(){
    		var el = $(this),
    			hd_els = el.find(".vj-dropmenu-hd"),
    			bd_els = el.find(".vj-dropmenu-bd");
    		el.on("click", ".vj-dropmenu-hd", function(e){
    			e.preventDefault();
    			var t_el = $(this);
    		    if(t_el.hasClass("vc-selected")){
    		        t_el.removeClass("vc-selected");
    		        t_el.next().removeClass("vc-selected");
    		    }else{
    		    	hd_els.removeClass("vc-selected");
    		    	bd_els.removeClass("vc-selected");
    		        t_el.addClass("vc-selected");
    		        t_el.next().addClass("vc-selected");
    		    }
    		    window.scrollTo(0, t_el.offset().top);
    		});
    	},
    	vwHeaderTop : function(){
    		var html_el = $("html"),
    			body_el = $("body"),
    			hd_els = $(this).find(".vj-hd"),
    			hd_height = hd_els.eq(0).offset().height,
    			top_list = [],
    			current_id = -1,
    			tophd_el = $('<div class="vm-list-tophd"></div>'),
    			tophd_cont = null;
    		
    		$(this).append(tophd_el);//新建代理节点

    		hd_els.each(function(i){
    			top_list[i] = Math.floor(hd_els.eq(i).offset().top);
    		});
    		
    		$(document).on("scroll", function(){
    			var top = html_el.scrollTop() || body_el.scrollTop(),
    				id = null;
    			for(var i in top_list){
    				if(top_list[i] < top){
    					id = i;
    				}else{
    					break;
    				}
    			};
    			
    			if(id != null && id != current_id){
    				if(id > current_id){
    					hd_els.eq(id).css("z-index", "10");
    				}else if(id < current_id){
    					hd_els.eq(id).css("z-index", "12");
    				}
    				tophd_el.html("");
    				tophd_cont = hd_els.eq(id).clone();
    				tophd_el.append(tophd_cont);
    				console.log(id);
    				current_id = id;
    			}else if(id == null && id != current_id){
    				tophd_el.html("");
    				current_id = null;
    			}
    		});
    	}
    })
})(VE);