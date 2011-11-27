wooShortcodeMeta={
	attributes:[
		{
			label:"Tabs",
			id:"content",
			controlType:"tab-control"
		},
		{
			label:"Tabber Style",
			id:"style",
			help:"Set an optional alternate style for the tabber.", 
			controlType:"select-control", 
			selectValues:['default', 'boxed'],
			defaultValue: 'default', 
			defaultText: 'default'
		}
		],
		disablePreview:true,
		customMakeShortcode: function(b){
			var a=b.data;
			var tabTitles = new Array();
			
			if(!a)return"";
			
			var c=a.content;
			var tabberStyle = b.style;
			
			var g = ''; // The shortcode.
			
			for ( var i = 0; i < a.numTabs; i++ ) {
			
				var currentField = 'tle_' + ( i + 1 );

				if ( b[currentField] == '' ) {
				
					tabTitles.push( 'Tab ' + ( i + 1 ) );
				
				} else {
				
					var currentTitle = b[currentField];
					
					currentTitle = currentTitle.replace( /"/gi, "'" );
					
					tabTitles.push( currentTitle );
				
				} // End IF Statement
			
			} // End FOR Loop
			
			g += '[tabs style="'+ tabberStyle +'"]';
			
			for ( var t in tabTitles ) {
			
				g += '[tab title="' + tabTitles[t] + '"]' + tabTitles[t] + ' content goes here.[/tab] ';
			
			} // End FOR Loop

			g += '[/tabs]';

			return g
		
		}
};