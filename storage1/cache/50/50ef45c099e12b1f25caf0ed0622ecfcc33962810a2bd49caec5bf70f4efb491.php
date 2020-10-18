<?php

/* common/footer.twig */
class __TwigTemplate_c041828a9d5b639a9c7f77282c240fa4064b1acbe998007560d0d165969e5998 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
        \t<style>
        \t\t.unactive {display: none ;} 
        \t\t.activeMN {display: block !important;}
        \t\t.mnsOFF {margin-left: 0px !important;}
\t\t\t\t.mnsON {margin-left: 235px !important;}
\t\t\t\t.navbar-brand {padding: 0px !important;height: 50px;}
        \t</style>
<script type=\"text/javascript\">
\tif (localStorage.getItem('column-left') != 'active') {\$('#column-left').hide();\$('#content').addClass('mnsOFF');\$('#content').removeClass('mnsON');} 
\tif (localStorage.getItem('column-left') == 'active') {\$('#column-left').show();\$('#content').addClass('mnsON');\$('#content').removeClass('mnsOFF');}
\t\$('#button-menu').on('click', function() {if (\$('#column-left').hasClass('active')){\$('#column-left').hide();\$('#content').addClass('mnsOFF');\$('#content').removeClass('mnsON');localStorage.setItem('column-left', 'active');}else{\$('#column-left').show();\$('#content').removeClass('mnsOFF');localStorage.setItem('column-left', '');}});
</script>
\t\t
<footer id=\"footer\">Powered By <a href=\"http://www.incredibletechsolve.com\" target=\"_blank\">Incredible Tech Solutions</a></footer></div>
</body></html>";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* */
/*         	<style>*/
/*         		.unactive {display: none ;} */
/*         		.activeMN {display: block !important;}*/
/*         		.mnsOFF {margin-left: 0px !important;}*/
/* 				.mnsON {margin-left: 235px !important;}*/
/* 				.navbar-brand {padding: 0px !important;height: 50px;}*/
/*         	</style>*/
/* <script type="text/javascript">*/
/* 	if (localStorage.getItem('column-left') != 'active') {$('#column-left').hide();$('#content').addClass('mnsOFF');$('#content').removeClass('mnsON');} */
/* 	if (localStorage.getItem('column-left') == 'active') {$('#column-left').show();$('#content').addClass('mnsON');$('#content').removeClass('mnsOFF');}*/
/* 	$('#button-menu').on('click', function() {if ($('#column-left').hasClass('active')){$('#column-left').hide();$('#content').addClass('mnsOFF');$('#content').removeClass('mnsON');localStorage.setItem('column-left', 'active');}else{$('#column-left').show();$('#content').removeClass('mnsOFF');localStorage.setItem('column-left', '');}});*/
/* </script>*/
/* 		*/
/* <footer id="footer">Powered By <a href="http://www.incredibletechsolve.com" target="_blank">Incredible Tech Solutions</a></footer></div>*/
/* </body></html>*/
