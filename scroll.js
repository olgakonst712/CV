		$(window).load(function() {
	    	$('#myContainer').multiscroll({
	    		sectionsColor: ['#5ad0ff', '#000', '#ffdd00'],
	        	anchors: ['first', 'second', 'third'],
	        	menu: '#menu',
	        	navigation: true,
	        	navigationTooltips: ['First', 'Second', 'Third'],

	        	afterLoad: function(anchor, index){
	        		if(index==2 || index == 3){
	        			$('#infoMenu li a').css('color', '#f2f2f2')
	        		}
					if(index==1){
						$('#infoMenu li a').css('color', '#333')
					}
	        	}
	  	 	})
	    })