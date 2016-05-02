<?php

class SCP_Odnoklassniki_Provider extends SCP_Provider {
	public static function is_active() {
		return ( self::$options[ self::$prefix . 'setting_use_odnoklassniki' ] === '1' );
	}

	public static function provide_options_to_tab_caption() {
		return array(
			'value'     => esc_attr( self::$options[ self::$prefix . 'setting_odnoklassniki_tab_caption'] ),
			'css_class' => ''
		);
	}

	public static function container() {
		$content = '<div class="box">';

		if ( self::$options[ self::$prefix . 'setting_odnoklassniki_show_description' ] === '1' ) {
			$content .= '<p class="widget-description"><b>' . self::$options[ self::$prefix . 'setting_odnoklassniki_description' ] . '</b></p>';
		}

		$content .= '<div id="scp_ok_group_widget"></div>';

		$content .= '<script>var OK=OK||{};OK.CONNECT={hostName:"http://connect.ok.ru",defaultStyle:"border:0;",frameId:0,uiStarted:false,insertGroupWidget:function(a,c,b){this.insertWidget(a,"Group","st.groupId="+c,b,250,335);},insertShareWidget:function(a,c,b){this.insertWidget(a,"Share","st.shareUrl="+encodeURIComponent(c),b,170,30);},insertWidget:function(f,g,h,i,j,b){var e=document.getElementById(f);if(e==null){return"error";}if(typeof i==="undefined"){i="{}";}this.startUI();var d=document.createElement("iframe");d.id="__ok"+g+this.frameId++;d.scrolling="no";d.frameBorder=0;d.allowTransparency=true;d.src=this.hostName+"/dk?st.cmd=Widget"+g+"&"+h+"&st.fid="+d.id+"&st.hoster="+encodeURIComponent(window.location)+"&st.settings="+encodeURIComponent(i);var c=this.UTIL.parseJson(i);var a=this.defaultStyle;a+="width:"+this.UTIL.getJsonAttr(c,"width",j)+"px;";a+="height:"+this.UTIL.getJsonAttr(c,"height",b)+"px;";this.UTIL.applyStyle(d,a);e.appendChild(d);},startUI:function(){if(this.uiStarted){return;}this.uiStarted=true;try{if(window.addEventListener){window.addEventListener("message",this.onUI,false);}else{window.attachEvent("onmessage",this.onUI);}}catch(a){}},onUI:function(c){if(c.origin!=OK.CONNECT.hostName){return;}var a=c.data.split("$");if(a[0]=="ok_setStyle"){var b=document.getElementById(a[1]);OK.CONNECT.UTIL.applyStyle(b,a[2]);}},UTIL:{applyStyle:function(b,e){var d=e.split(";");for(var a=0;a<d.length;a++){var c=d[a].split(":");if(c.length==2&&c[0].length>0){b.style[c[0]]=c[1];}}},parseJson:function(jsonStr){return eval("(function(){return "+jsonStr+";})()");},getJsonAttr:function(d,b,c){var a=d[b];return a!=null?a:c;}}};';

		$content .= 'OK.CONNECT.insertGroupWidget("scp_ok_group_widget", '
			. '"' . esc_attr( self::$options[ self::$prefix . 'setting_odnoklassniki_group_id' ] ) . '", "{'
			. 'width:' . esc_attr( self::$options[ self::$prefix . 'setting_odnoklassniki_width' ] ) . ', '
			. 'height:' . esc_attr( self::$options[ self::$prefix . 'setting_odnoklassniki_height' ] )
			. '}");';

		$content .= '</script>';
		$content .= '</div>';

		return $content;
	}
}
