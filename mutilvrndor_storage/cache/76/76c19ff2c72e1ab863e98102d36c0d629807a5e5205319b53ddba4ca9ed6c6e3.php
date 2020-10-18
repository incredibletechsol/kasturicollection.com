<?php

/* default/template//extension/payment/cashfree.twig */
class __TwigTemplate_97b316ccd52678c1c5b44e4b003d2a28dc8e934803845fadc6afb29a5f027de4 extends Twig_Template
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
        echo "<div class=\"buttons\">
  <div class=\"pull-right\">
    <input type=\"button\" value=\"";
        // line 3
        echo (isset($context["button_confirm"]) ? $context["button_confirm"] : null);
        echo "\" id=\"button-confirm\" class=\"btn btn-primary\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" />
    <h4 class=\"text-success hidden\" id=\"text-redirect\">";
        // line 4
        echo (isset($context["text_redirect"]) ? $context["text_redirect"] : null);
        echo "</h4>
</div>
<script type=\"text/javascript\"><!--
\$('#button-confirm').on('click', function() {
\t\$.ajax({
\t\ttype: 'get',
\t\tdataType: \"json\",
\t\turl: 'index.php?route=extension/payment/cashfree/confirm',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-confirm').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-confirm').button('reset');
\t\t},
\t\tsuccess: function(response) {
            if (response.status == 1) {
            \t\$('#button-confirm').hide();
            \t\$('#text-redirect').removeClass(\"hidden\");
               \tlocation.href = response.redirect;
            } else {
            \talert(response.message);
            }
\t\t}
\t});
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "default/template//extension/payment/cashfree.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="buttons">*/
/*   <div class="pull-right">*/
/*     <input type="button" value="{{ button_confirm }}" id="button-confirm" class="btn btn-primary" data-loading-text="{{ text_loading }}" />*/
/*     <h4 class="text-success hidden" id="text-redirect">{{ text_redirect }}</h4>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-confirm').on('click', function() {*/
/* 	$.ajax({*/
/* 		type: 'get',*/
/* 		dataType: "json",*/
/* 		url: 'index.php?route=extension/payment/cashfree/confirm',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			$('#button-confirm').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-confirm').button('reset');*/
/* 		},*/
/* 		success: function(response) {*/
/*             if (response.status == 1) {*/
/*             	$('#button-confirm').hide();*/
/*             	$('#text-redirect').removeClass("hidden");*/
/*                	location.href = response.redirect;*/
/*             } else {*/
/*             	alert(response.message);*/
/*             }*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* */
