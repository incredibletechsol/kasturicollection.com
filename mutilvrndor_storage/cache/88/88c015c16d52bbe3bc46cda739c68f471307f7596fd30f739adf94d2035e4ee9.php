<?php

/* default/template/seller/contact.twig */
class __TwigTemplate_49dbe89ee6d8c7e422128eafbf27b99ee1b56f1c56d1fdf9be49041a90fe84d8 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <h3>";
        // line 18
        echo (isset($context["text_location"]) ? $context["text_location"] : null);
        echo "</h3>
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"row\">
            ";
        // line 22
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 23
            echo "            <div class=\"col-sm-3\"><img src=\"";
            echo (isset($context["image"]) ? $context["image"] : null);
            echo "\" alt=\"";
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "\" title=\"";
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "\" class=\"img-thumbnail\" /></div>
            ";
        }
        // line 25
        echo "            <div class=\"col-sm-3\"><strong>";
        echo (isset($context["store"]) ? $context["store"] : null);
        echo "</strong><br />

\t     ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 28
            echo "              <address>
              ";
            // line 29
            echo $this->getAttribute($context["result"], "address", array());
            echo "
              </address>
\t      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
              
            </div>
            <div class=\"col-sm-3\"><strong>";
        // line 35
        echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
        echo "</strong><br>
              ";
        // line 36
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "<br />
              <br />
              ";
        // line 38
        if ((isset($context["fax"]) ? $context["fax"] : null)) {
            // line 39
            echo "              <strong>";
            echo (isset($context["text_fax"]) ? $context["text_fax"] : null);
            echo "</strong><br>
              ";
            // line 40
            echo (isset($context["fax"]) ? $context["fax"] : null);
            echo "
              ";
        }
        // line 42
        echo "            </div>
            <div class=\"col-sm-3\">
              ";
        // line 44
        if ((isset($context["open"]) ? $context["open"] : null)) {
            // line 45
            echo "              <strong>";
            echo (isset($context["text_open"]) ? $context["text_open"] : null);
            echo "</strong><br />
              ";
            // line 46
            echo (isset($context["open"]) ? $context["open"] : null);
            echo "<br />
              <br />
              ";
        }
        // line 49
        echo "              ";
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 50
            echo "              <strong>";
            echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
            echo "</strong><br />
              ";
            // line 51
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "
              ";
        }
        // line 53
        echo "            </div>
          </div>
        </div>
      </div>
      
     
      <form action=\"";
        // line 59
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 61
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</legend>

\t  <div class=\"form-group required\">

            <label class=\"col-sm-2 control-label\" for=\"input-name\">Product Name:</label>

            <div class=\"col-sm-10\">

               <input type=\"text\" name=\"product_name\" value=\"";
        // line 69
        echo (isset($context["product_name"]) ? $context["product_name"] : null);
        echo "\" readonly class=\"form-control\" />
\t  <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 70
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\"/>
\t   <input type=\"hidden\" name=\"seller_email\" value=\"";
        // line 71
        echo (isset($context["seller_email"]) ? $context["seller_email"] : null);
        echo "\"/>
            </div>

          </div>


          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 78
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 80
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 81
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 82
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
              ";
        }
        // line 84
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 87
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 89
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 90
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 91
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
              ";
        }
        // line 93
        echo "            </div>
          </div>

\t    
\t\t   <div class=\"form-group\">

            <label class=\"col-sm-2 control-label\" for=\"input-phone\">Telephone:</label>

            <div class=\"col-sm-10\">

              <input type=\"text\" name=\"phone\" value=\"";
        // line 103
        echo (isset($context["phone"]) ? $context["phone"] : null);
        echo "\" id=\"input-phone\" class=\"form-control\" />

             

            </div>

          </div>


          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 113
        echo (isset($context["entry_enquiry"]) ? $context["entry_enquiry"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 115
        echo (isset($context["enquiry"]) ? $context["enquiry"] : null);
        echo "</textarea>
              ";
        // line 116
        if ((isset($context["error_enquiry"]) ? $context["error_enquiry"] : null)) {
            // line 117
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_enquiry"]) ? $context["error_enquiry"] : null);
            echo "</div>
              ";
        }
        // line 119
        echo "            </div>
          </div>
         
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 125
        echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
        echo "\" />
          </div>
        </div>
      </form>
      ";
        // line 129
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 130
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 132
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/seller/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 132,  317 => 130,  313 => 129,  306 => 125,  298 => 119,  292 => 117,  290 => 116,  286 => 115,  281 => 113,  268 => 103,  256 => 93,  250 => 91,  248 => 90,  244 => 89,  239 => 87,  234 => 84,  228 => 82,  226 => 81,  222 => 80,  217 => 78,  207 => 71,  203 => 70,  199 => 69,  188 => 61,  183 => 59,  175 => 53,  170 => 51,  165 => 50,  162 => 49,  156 => 46,  151 => 45,  149 => 44,  145 => 42,  140 => 40,  135 => 39,  133 => 38,  128 => 36,  124 => 35,  119 => 32,  110 => 29,  107 => 28,  103 => 27,  97 => 25,  87 => 23,  85 => 22,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <h3>{{ text_location }}</h3>*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-body">*/
/*           <div class="row">*/
/*             {% if image %}*/
/*             <div class="col-sm-3"><img src="{{ image }}" alt="{{ store }}" title="{{ store }}" class="img-thumbnail" /></div>*/
/*             {% endif %}*/
/*             <div class="col-sm-3"><strong>{{ store }}</strong><br />*/
/* */
/* 	     {% for result in addresses %}*/
/*               <address>*/
/*               {{ result.address }}*/
/*               </address>*/
/* 	      {% endfor %}*/
/* */
/*               */
/*             </div>*/
/*             <div class="col-sm-3"><strong>{{ text_telephone }}</strong><br>*/
/*               {{ telephone }}<br />*/
/*               <br />*/
/*               {% if fax %}*/
/*               <strong>{{ text_fax }}</strong><br>*/
/*               {{ fax }}*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="col-sm-3">*/
/*               {% if open %}*/
/*               <strong>{{ text_open }}</strong><br />*/
/*               {{ open }}<br />*/
/*               <br />*/
/*               {% endif %}*/
/*               {% if comment %}*/
/*               <strong>{{ text_comment }}</strong><br />*/
/*               {{ comment }}*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       */
/*      */
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*         <fieldset>*/
/*           <legend>{{ text_contact }}</legend>*/
/* */
/* 	  <div class="form-group required">*/
/* */
/*             <label class="col-sm-2 control-label" for="input-name">Product Name:</label>*/
/* */
/*             <div class="col-sm-10">*/
/* */
/*                <input type="text" name="product_name" value="{{ product_name }}" readonly class="form-control" />*/
/* 	  <input type="hidden" name="product_id" value="{{ product_id }}"/>*/
/* 	   <input type="hidden" name="seller_email" value="{{ seller_email }}"/>*/
/*             </div>*/
/* */
/*           </div>*/
/* */
/* */
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="name" value="{{ name }}" id="input-name" class="form-control" />*/
/*               {% if error_name %}*/
/*               <div class="text-danger">{{ error_name }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="email" value="{{ email }}" id="input-email" class="form-control" />*/
/*               {% if error_email %}*/
/*               <div class="text-danger">{{ error_email }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/* */
/* 	    */
/* 		   <div class="form-group">*/
/* */
/*             <label class="col-sm-2 control-label" for="input-phone">Telephone:</label>*/
/* */
/*             <div class="col-sm-10">*/
/* */
/*               <input type="text" name="phone" value="{{ phone }}" id="input-phone" class="form-control" />*/
/* */
/*              */
/* */
/*             </div>*/
/* */
/*           </div>*/
/* */
/* */
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-enquiry">{{ entry_enquiry }}</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control">{{ enquiry }}</textarea>*/
/*               {% if error_enquiry %}*/
/*               <div class="text-danger">{{ error_enquiry }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*          */
/*         </fieldset>*/
/*         <div class="buttons">*/
/*           <div class="pull-right">*/
/*             <input class="btn btn-primary" type="submit" value="{{ button_submit }}" />*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
