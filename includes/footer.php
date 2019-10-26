<style>
    
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0px;padding:0px;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/* start editing from here */
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*end reset*/

body{
padding:0;
margin:0;
font-family: 'Lato', sans-serif !important;
}

h1,h2,h3,h4,h5,h6{
	margin:0;			   
}	
p{
	margin:0;
}
ul{
	margin:0;
	padding:0;
}
label{
	margin:0;
}
/*-- main --*/
.main{
	width:100%;
}

.content{
    margin: 0 auto;
    width: 100%;
}
.footer-grids{
	
    padding: 3em 3em;
}
p.footer-gd {
    color: #908F8F;
    font-weight: 500;
	font-size:14px;
}
p.footer-gd a {
	color:#ccc;
}
p.footer-gd a:hover {
	color: #2e99ff;
}
.footer{
	float:left;
}
.footer h3{
    font-size: 18px;
    color: #ccc;
    font-weight: 500;
    margin-bottom: 32px;
    font-family: 'Viga', sans-serif;
}
.footer.one {
    width: 37%;
}
p.adam{
	float:right;
	color:#6F6E6E !important;
	font-size:13px !important;
	margin-top:20px;
}
.footer.three {
    width: 23%;
}
.footer.one p{
	color:#908F8F;
	line-height:2em;
	font-size:14px;
}
.footer.two {
    width: 23%;
    margin: 0 8%;
}
.footer.two ul{
	margin:0;
	padding:0;
}
.footer.two ul li{
	list-style-type:none;
	display:block;
    line-height: 1.5em;
	font-size:14px;
}
.footer.two ul li a{
color:#908F8F;	
display:block;
}
.footer.two ul li a.fb {
	background: url('../images/social2.png') no-repeat 0px 4px;  
    padding: 10px 0 12px 52px;
}
.footer.two ul li a.fb1 {
	background: url('../images/social1.png') no-repeat 0px 4px;
    padding: 10px 0 12px 52px;
}
.footer.two ul li a.fb2 {
    background: url('../images/social3.png') no-repeat 0px 4px;
    padding: 10px 0 12px 52px;
}
.footer.two ul li a.fb3 {
    background: url('../images/social4.png') no-repeat 0px 4px;
    padding: 10px 0 12px 52px;
}
.footer.two ul li a.fb4 {
    background: url('../images/social5.png') no-repeat 0px 4px;
    padding: 10px 0 12px 52px;
}
.footer.three ul li {
    list-style-type: none;
    display: block;
    color: #908F8F;
    font-size: 14px;
    line-height: 2.5em;
}
.footer.three ul li span {
    display: block;
}
.footer.three ul li:nth-child(1) {
    background: url('../images/icon2.png') no-repeat 0px 6px;
    padding-left: 38px;
}
.footer.three ul li:nth-child(2) {
    background: url('../images/icon3.png') no-repeat 0px 6px;
    padding-left: 38px;
}
.footer.three ul li a {
    background: url('../images/icon1.png') no-repeat 0px 6px;
    padding-left: 38px;
    display: block;
	color:#908F8F;
}
.copy-right-grids {
    width:100%;
	padding: 20px 20px;
    background: #211E1E;
}
.copy-left{
	float:left;
}
.copy-right{
	float:right;
}
.copy-right ul li {
    list-style-type: none;
    display: inline-block;
    margin: 0 0px;
    border-left: 1px solid #444343;
    padding: 0 12px;
}
.copy-right ul li a {
    color: #908F8F;
	font-size:13px;
}
.copy-right ul li:nth-child(1) {
    border: none;
}
.footer.two ul li a.fb:hover {
    background: url('../images/social3hover.png') no-repeat 0px 4px;
}
.footer.two ul li a.fb1:hover {
    background: url('../images/social2hover.png') no-repeat 0px 4px;
}
.footer.two ul li a.fb2:hover {
    background: url('../images/social4hover.png') no-repeat 0px 4px;
}
.footer.two ul li a.fb3:hover {
    background: url('../images/social5hover.png') no-repeat 0px 4px;
}
.footer.two ul li a.fb4:hover {
    background: url('../images/social1hover.png') no-repeat 0px 4px;
}
.footer.two ul li a:hover,.copy-right ul li a:hover,.footer.three ul li a:hover{
	color:#2e99ff;
}
/*-- responsive media queries --*/

@media (max-width: 1440px){
	.content {
		width: 73%;
	}	
}
@media (max-width: 1366px){
	.footer.one {
		width: 38%;
	}
	.footer-grids {
		padding: 2.5em 2.5em;
	}	
}
@media (max-width: 1280px){
	.main {
		padding: 80px 0;
	}	
}
@media (max-width: 1080px){
	.content {
		width: 80%;
	}
	.footer h3 {
		font-size: 19px;
	}
	.copy-left {
		float: none;
		text-align: center;
		margin-bottom: 15px;
	}
	.copy-right {
		float: none;
		text-align: center;
	}
	.footer.two ul li a.fb2 ,.footer.two ul li a.fb,.footer.two ul li a.fb1,.footer.two ul li a.fb3,.footer.two ul li a.fb4{
		padding: 10px 0 10px 38px;
	}
	.footer h3 {
		font-size: 18px;
	}
	.main h1 {
		font-size: 34px;
	}	
}
@media (max-width: 1024px){
	.footer-grids {
		padding: 2em 2em;
	}
	.content {
		width: 82%;
	}
	.main h1 {
		font-size: 33px;
		margin-bottom: 55px;
	}
}
@media (max-width: 991px){
	.footer.two {
		width: 27%;
		margin: 0 5%;
	}
	.footer.three {
		width: 25%;
	}	
}
@media (max-width: 800px){
	.content {
		width: 88%;
	}
	.footer.one p {
		font-size: 13px;
	}
	.footer.two ul li {
		font-size: 13px;
	}
	.footer.three ul li {
		font-size: 13px;
	}	
	.footer.three ul li:nth-child(1),.footer.three ul li:nth-child(2),.footer.three ul li a{
		padding-left: 32px;	
	}
	.footer h3 {
		font-size: 16px;
	}
}
@media (max-width: 768px){
	.content {
		width: 90%;
	}
	p.footer-gd {
		font-size: 13px;
	}	
	.main {
		padding: 135px 0;
	}
	.main h1 {
		margin-bottom: 120px;
	}
}
@media (max-width: 736px){
	.main {
		padding: 80px 0;
	}
	.main h1 {
		margin-bottom: 60px;
	}
	.footer.one {
		width: 35%;
	}
	.footer.two {
		width: 29%;
		margin: 0 4%;
	}
	.footer.three {
		width: 27%;
	}	
}
@media (max-width: 667px){
	.footer.one {
		width: 100%;
	}
	.footer.two {
		width: 48%;
		margin: 0 4% 0 0;
	}	
	.footer.three {
		width: 48%;
	}
	.footer.one {
		margin-bottom: 40px;
	}
}
@media (max-width: 640px){
	.main h1 {
		font-size: 30px;
	}	
	.footer-grids {
		padding: 2.5em 2.5em;
	}
}
@media (max-width: 600px){
	.main {
		padding: 65px 0;
	}
	.main h1 {
		font-size: 28px;
		margin-bottom: 45px;
	}
}
@media (max-width: 568px){
	
}
@media (max-width: 480px){
	.footer-grids {
		padding: 1.5em 1.5em;
	}
	.copy-right-grids {
		padding: 20px 10px;
	}
	.copy-right ul li {
		padding: 0 10px;
	}
	p.footer-gd {
		line-height: 1.8em;
	}	
	p.adam {
		margin-top: 9px;
	}
	.main h1 {
		font-size: 26px;
		margin-bottom: 38px;
	}
}
@media (max-width: 414px){
.footer.two {
    width: 100%;
}
.footer.three {
    width: 100%;
}
.footer h3 {
    margin-bottom: 18px;
}
.footer.one {
    margin-bottom: 0;
}
.footer.two {
    width: 100%;
    margin: 30px 0;
}
.footer-grids {
    padding: 2em 2em;
}
.main h1 {
    font-size: 25px;
}
.copy-right ul li {
    line-height: 1.8em;
}	
}
@media (max-width: 384px){
	
}
@media (max-width: 375px){
	.main h1 {
		font-size: 23px;
	}
	.main {
		padding: 60px 0;
	}	
}
@media (max-width: 320px){
	.main h1 {
		font-size: 21px;
	}
	.footer-grids {
		padding: 1em 1em;
	}
	.main {
		padding: 50px 0;
	}	
}

</style>


<div class="main">
		
		<div class="content">
			<div class="footer-grids">
				<div class="footer one">
					<h3>More About Company</h3>
					<p> The growth of our institute is courtesy, to one of the 
					best computer education curriculum that we have in our portfolio. 
					We always have given a tough time to out competitors in the similar 
					business of computer training centers franchise, Computer education franchise.</p>
					
                    <div class="clear"></div><br>
                    <div class="social-icons">
            
            <a href="http://facebook.com/transvelo" class='active'><i class="icon fa fa-facebook"></i></a>
            <a href="#"><i class="icon fa fa-twitter"></i></a>
            <a href="#"><i class="icon fa fa-linkedin"></i></a>
            <a href="#"><i class="icon fa fa-rss"></i></a>
            <a href="#"><i class="icon fa fa-pinterest"></i></a>
    
            </div><!-- /.social-icons -->
				</div>
				<div class="footer two">
					<h3>Office timeing</h3>
					<ul>
                    
					<li>Monday-Saturday: 09.00 To 21.00 </li><br>
					<li>Sunday:OFF</li>
					</ul>
				</div>
				<div class="footer three">
					<h3>Contact Information</h3>
					<ul>
                    <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>18/35 Chopasni Housing Board, Chopasni Road, Jodhpur - 342008</p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>+91-9314210436<br>  +91-7597273004</p>
                </div>
            </li>

              
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			
			</div>
		</div>
	</div>		