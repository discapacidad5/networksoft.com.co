#fancybox-buttons {
	position: fixed;
	left: 0;
	width: 100%;
	z-index: 8050;
}

#fancybox-buttons.top {
	top: 10px;
}

#fancybox-buttons.bottom {
	bottom: 10px;
}

#fancybox-buttons ul {
	display: block;
	width: 166px;
	height: 30px;
	margin: 0 auto;
	padding: 0;
	list-style: none;
	border: 1px solid #111;
	border-radius: 3px;
	-webkit-box-shadow: inset 0 0 0 1px rgba(255,255,255,.05);
	   -moz-box-shadow: inset 0 0 0 1px rgba(255,255,255,.05);
	        box-shadow: inset 0 0 0 1px rgba(255,255,255,.05);
	background: rgb(50,50,50);
	background: -moz-linear-gradient(top, rgb(68,68,68) 0%, rgb(52,52,52) 50%, rgb(41,41,41) 50%, rgb(51,51,51) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(68,68,68)), color-stop(50%,rgb(52,52,52)), color-stop(50%,rgb(41,41,41)), color-stop(100%,rgb(51,51,51)));
	background: -webkit-linear-gradient(top, rgb(68,68,68) 0%,rgb(52,52,52) 50%,rgb(41,41,41) 50%,rgb(51,51,51) 100%);
	background: -o-linear-gradient(top, rgb(68,68,68) 0%,rgb(52,52,52) 50%,rgb(41,41,41) 50%,rgb(51,51,51) 100%);
	background: -ms-linear-gradient(top, rgb(68,68,68) 0%,rgb(52,52,52) 50%,rgb(41,41,41) 50%,rgb(51,51,51) 100%);
	background: linear-gradient(top, rgb(68,68,68) 0%,rgb(52,52,52) 50%,rgb(41,41,41) 50%,rgb(51,51,51) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#444444', endColorstr='#222222',GradientType=0 );
}

#fancybox-buttons ul li {
	float: left;
	margin: 0;
	padding: 0;
}

#fancybox-buttons a {
	display: block;
	width: 30px;
	height: 30px;
	text-indent: -9999px;
	background-image: url('fancybox_buttons.png');
	background-repeat: no-repeat;
	outline: none;
	opacity: 0.8;
}

#fancybox-buttons a:hover {
	opacity: 1;
}

#fancybox-buttons a.btnPrev {
	background-position: 5px 0;
}

#fancybox-buttons a.btnNext {
	background-position: -33px 0;
	border-right: 1px solid #3e3e3e;
}

#fancybox-buttons a.btnPlay {
	background-position: 0 -30px;
}

#fancybox-buttons a.btnPlayOn {
	background-position: -30px -30px;
}

#fancybox-buttons a.btnToggle {
	background-position: 3px -60px;
	border-left: 1px solid #111;
	border-right: 1px solid #3e3e3e;
	width: 35px
}

#fancybox-buttons a.btnToggleOn {
	background-position: -27px -60px;
}

#fancybox-buttons a.btnClose {
	border-left: 1px solid #111;
	width: 35px;
	background-position: -56px 0px;
}

#fancybox-buttons a.btnDisabled {
	opacity : 0.4;
	cursor: default;
}