<?php

/* default/template/account/order_list.twig */
class __TwigTemplate_5b1676468af21b9a0cdbdc2075ca5a21fdd30631feacc19e2eec9c2955682940 extends Twig_Template
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
<div id=\"account-order\" class=\"container\">
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
        ";
        // line 8
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 9
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>
          ";
        }
        // line 11
        echo "          ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 12
            echo "        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
          ";
        }
        // line 14
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 15
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 17
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 21
            echo "    ";
        }
        // line 22
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 23
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 24
        if ((isset($context["orders"]) ? $context["orders"] : null)) {
            // line 25
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-right\">";
            // line 29
            echo (isset($context["column_order_id"]) ? $context["column_order_id"] : null);
            echo "</td>
              <td class=\"text-left\">";
            // line 30
            echo (isset($context["column_customer"]) ? $context["column_customer"] : null);
            echo "</td>
              <td class=\"text-right\">";
            // line 31
            echo (isset($context["column_product"]) ? $context["column_product"] : null);
            echo "</td>
              <td class=\"text-left\">";
            // line 32
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</td>
              <td class=\"text-right\">";
            // line 33
            echo (isset($context["column_total"]) ? $context["column_total"] : null);
            echo "</td>
              <td class=\"text-left\">";
            // line 34
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
           ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 40
                echo "            <tr>
              <td class=\"text-right\">#";
                // line 41
                echo $this->getAttribute($context["order"], "order_id", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 42
                echo $this->getAttribute($context["order"], "name", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 43
                echo $this->getAttribute($context["order"], "products", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 44
                echo $this->getAttribute($context["order"], "status", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 45
                echo $this->getAttribute($context["order"], "total", array());
                echo "</td>
              <td class=\"text-right\">
              <div style=\"height:10px;clear:both;\">&nbsp;</div>
              ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["order"], "sellers", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["sellerproduct"]) {
                    // line 49
                    echo "                <div><b>";
                    echo (isset($context["text_seller"]) ? $context["text_seller"] : null);
                    echo "</b> ";
                    echo $this->getAttribute($context["sellerproduct"], "username", array());
                    echo "</div>
                 <div><b>";
                    // line 50
                    echo (isset($context["text_products"]) ? $context["text_products"] : null);
                    echo "</b> ";
                    echo $this->getAttribute($context["sellerproduct"], "numprod", array());
                    echo "</div>
                 <div><b>";
                    // line 51
                    echo (isset($context["text_status"]) ? $context["text_status"] : null);
                    echo "</b> ";
                    echo $this->getAttribute($context["sellerproduct"], "name", array());
                    echo "</div>
                 <div>
                 ";
                    // line 53
                    if ($this->getAttribute($context["sellerproduct"], "reviews", array())) {
                        // line 54
                        echo "                  ";
                    } else {
                        // line 55
                        echo "                 <a href=\"index.php?route=account/review&order_id=";
                        echo $this->getAttribute($context["order"], "order_id", array());
                        echo "&seller_id=";
                        echo $this->getAttribute($context["sellerproduct"], "seller_id", array());
                        echo "\" 
                 class=\"btn btn-primary\">";
                        // line 56
                        echo (isset($context["text_rate"]) ? $context["text_rate"] : null);
                        echo "</a>
                 ";
                    }
                    // line 58
                    echo "                 </div>
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sellerproduct'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "              </td>
              <td class=\"text-left\">";
                // line 61
                echo $this->getAttribute($context["order"], "date_added", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 62
                echo (isset($context["text_review"]) ? $context["text_review"] : null);
                echo "</td>
              <td class=\"text-right\"><a href=\"";
                // line 63
                echo $this->getAttribute($context["order"], "view", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_view"]) ? $context["button_view"] : null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "          </tbody>
        </table>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 70
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 71
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
      </div>
      ";
        } else {
            // line 74
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      ";
        }
        // line 76
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 77
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
      </div>
      ";
        // line 79
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 80
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 82
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 82,  267 => 80,  263 => 79,  256 => 77,  253 => 76,  247 => 74,  241 => 71,  237 => 70,  231 => 66,  220 => 63,  216 => 62,  212 => 61,  209 => 60,  202 => 58,  197 => 56,  190 => 55,  187 => 54,  185 => 53,  178 => 51,  172 => 50,  165 => 49,  161 => 48,  155 => 45,  151 => 44,  147 => 43,  143 => 42,  139 => 41,  136 => 40,  132 => 39,  124 => 34,  120 => 33,  116 => 32,  112 => 31,  108 => 30,  104 => 29,  98 => 25,  96 => 24,  92 => 23,  85 => 22,  82 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  65 => 15,  60 => 14,  54 => 12,  51 => 11,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-order" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*         {% if success %}*/
/*       <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}</div>*/
/*           {% endif %}*/
/*           {% if error_warning %}*/
/*         <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/*           {% endif %}*/
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
/*       {% if orders %}*/
/*       <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-right">{{ column_order_id }}</td>*/
/*               <td class="text-left">{{ column_customer }}</td>*/
/*               <td class="text-right">{{ column_product }}</td>*/
/*               <td class="text-left">{{ column_status }}</td>*/
/*               <td class="text-right">{{ column_total }}</td>*/
/*               <td class="text-left">{{ column_date_added }}</td>*/
/*               <td></td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*            {% for order in orders %}*/
/*             <tr>*/
/*               <td class="text-right">#{{ order.order_id }}</td>*/
/*               <td class="text-left">{{ order.name }}</td>*/
/*               <td class="text-right">{{ order.products }}</td>*/
/*               <td class="text-left">{{ order.status }}</td>*/
/*               <td class="text-right">{{ order.total }}</td>*/
/*               <td class="text-right">*/
/*               <div style="height:10px;clear:both;">&nbsp;</div>*/
/*               {% for sellerproduct in order.sellers %}*/
/*                 <div><b>{{ text_seller }}</b> {{ sellerproduct.username}}</div>*/
/*                  <div><b>{{ text_products }}</b> {{ sellerproduct.numprod }}</div>*/
/*                  <div><b>{{ text_status }}</b> {{ sellerproduct.name }}</div>*/
/*                  <div>*/
/*                  {% if sellerproduct.reviews %}*/
/*                   {% else %}*/
/*                  <a href="index.php?route=account/review&order_id={{ order.order_id }}&seller_id={{ sellerproduct.seller_id }}" */
/*                  class="btn btn-primary">{{ text_rate }}</a>*/
/*                  {% endif %}*/
/*                  </div>*/
/*                {% endfor %}*/
/*               </td>*/
/*               <td class="text-left">{{ order.date_added }}</td>*/
/*               <td class="text-right">{{ text_review }}</td>*/
/*               <td class="text-right"><a href="{{ order.view }}" data-toggle="tooltip" title="{{ button_view }}" class="btn btn-info"><i class="fa fa-eye"></i></a></td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*           </tbody>*/
/*         </table>*/
/*       </div>*/
/*       <div class="row">*/
/*         <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*         <div class="col-sm-6 text-right">{{ results }}</div>*/
/*       </div>*/
/*       {% else %}*/
/*       <p>{{ text_empty }}</p>*/
/*       {% endif %}*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
