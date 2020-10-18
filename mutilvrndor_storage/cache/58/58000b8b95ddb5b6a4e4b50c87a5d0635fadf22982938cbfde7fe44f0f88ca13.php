<?php

/* default/template/mail/morder.twig */
class __TwigTemplate_199d1bd8b468d115f449e571c06e5b0527469207c1f57eb794ffc03c356f7604 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd\">
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
<title>";
        // line 5
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
</head>
<body style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000000;\">
<div style=\"width: 680px;\"><a href=\"";
        // line 8
        echo (isset($context["store_url"]) ? $context["store_url"] : null);
        echo "\" title=\"";
        echo (isset($context["store_name"]) ? $context["store_name"] : null);
        echo "\"><img src=\"";
        echo (isset($context["logo"]) ? $context["logo"] : null);
        echo "\" alt=\"";
        echo (isset($context["store_name"]) ? $context["store_name"] : null);
        echo "\" style=\"margin-bottom: 20px; border: none;\" /></a>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
        // line 9
        echo (isset($context["text_greeting"]) ? $context["text_greeting"] : null);
        echo "</p>

  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\" colspan=\"2\">";
        // line 14
        echo (isset($context["text_order_detail"]) ? $context["text_order_detail"] : null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"><b>";
        // line 19
        echo (isset($context["text_order_id"]) ? $context["text_order_id"] : null);
        echo "</b> ";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "<br />
          <b>";
        // line 20
        echo (isset($context["text_date_added"]) ? $context["text_date_added"] : null);
        echo "</b> ";
        echo (isset($context["date_added"]) ? $context["date_added"] : null);
        echo "<br />
          <b>";
        // line 21
        echo (isset($context["text_payment_method"]) ? $context["text_payment_method"] : null);
        echo "</b> ";
        echo (isset($context["payment_method"]) ? $context["payment_method"] : null);
        echo "<br />
          ";
        // line 22
        if ((isset($context["shipping_method"]) ? $context["shipping_method"] : null)) {
            echo " <b>";
            echo (isset($context["text_shipping_method"]) ? $context["text_shipping_method"] : null);
            echo "</b> ";
            echo (isset($context["shipping_method"]) ? $context["shipping_method"] : null);
            echo "
          ";
        }
        // line 23
        echo "</td>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"><b>";
        // line 24
        echo (isset($context["text_email"]) ? $context["text_email"] : null);
        echo "</b> ";
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "<br />
          <b>";
        // line 25
        echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
        echo "</b> ";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "<br />
          <b>";
        // line 26
        echo (isset($context["text_ip"]) ? $context["text_ip"] : null);
        echo "</b> ";
        echo (isset($context["ip"]) ? $context["ip"] : null);
        echo "<br />
         </td>
      </tr>
    </tbody>
  </table>
  ";
        // line 31
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 32
            echo "  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
            // line 35
            echo (isset($context["text_instruction"]) ? $context["text_instruction"] : null);
            echo "</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 40
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "</td>
      </tr>
    </tbody>
  </table>
  ";
        }
        // line 45
        echo "  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 48
        echo (isset($context["text_payment_address"]) ? $context["text_payment_address"] : null);
        echo "</td>
        ";
        // line 49
        if ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) {
            // line 50
            echo "        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
            echo (isset($context["text_shipping_address"]) ? $context["text_shipping_address"] : null);
            echo "</td>
        ";
        }
        // line 51
        echo " </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
        // line 55
        echo (isset($context["payment_address"]) ? $context["payment_address"] : null);
        echo "</td>
        ";
        // line 56
        if ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) {
            // line 57
            echo "        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            echo (isset($context["shipping_address"]) ? $context["shipping_address"] : null);
            echo "</td>
        ";
        }
        // line 58
        echo " </tr>
    </tbody>
  </table>
  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 64
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 65
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\">";
        // line 66
        echo (isset($context["text_quantity"]) ? $context["text_quantity"] : null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\">";
        // line 67
        echo (isset($context["text_price"]) ? $context["text_price"] : null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\">";
        // line 68
        echo (isset($context["text_total"]) ? $context["text_total"] : null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
    
    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mulproducts"]) ? $context["mulproducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 74
            echo "    <tr>
      <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 75
            echo $this->getAttribute($context["product"], "name", array());
            echo "
        ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo "<br />
        &nbsp;<small> - ";
                // line 77
                echo $this->getAttribute($context["option"], "name", array());
                echo ": ";
                echo $this->getAttribute($context["option"], "value", array());
                echo "</small>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
      <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 78
            echo $this->getAttribute($context["product"], "model", array());
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 79
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 80
            echo $this->getAttribute($context["product"], "price", array());
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 81
            echo $this->getAttribute($context["product"], "total", array());
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "   
      </tbody>
    
   
    
  </table>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
        // line 90
        echo (isset($context["text_footer"]) ? $context["text_footer"] : null);
        echo "</p>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "default/template/mail/morder.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 90,  248 => 84,  239 => 81,  235 => 80,  231 => 79,  227 => 78,  216 => 77,  210 => 76,  206 => 75,  203 => 74,  199 => 73,  191 => 68,  187 => 67,  183 => 66,  179 => 65,  175 => 64,  167 => 58,  161 => 57,  159 => 56,  155 => 55,  149 => 51,  143 => 50,  141 => 49,  137 => 48,  132 => 45,  124 => 40,  116 => 35,  111 => 32,  109 => 31,  99 => 26,  93 => 25,  87 => 24,  84 => 23,  75 => 22,  69 => 21,  63 => 20,  57 => 19,  49 => 14,  41 => 9,  31 => 8,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd">*/
/* <html>*/
/* <head>*/
/* <meta http-equiv="Content-Type" content="text/html; charset=utf-8">*/
/* <title>{{ title }}</title>*/
/* </head>*/
/* <body style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000000;">*/
/* <div style="width: 680px;"><a href="{{ store_url }}" title="{{ store_name }}"><img src="{{ logo }}" alt="{{ store_name }}" style="margin-bottom: 20px; border: none;" /></a>*/
/*   <p style="margin-top: 0px; margin-bottom: 20px;">{{ text_greeting }}</p>*/
/* */
/*   <table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">*/
/*     <thead>*/
/*       <tr>*/
/*         <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" colspan="2">{{ text_order_detail }}</td>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       <tr>*/
/*         <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><b>{{ text_order_id }}</b> {{ order_id }}<br />*/
/*           <b>{{ text_date_added }}</b> {{ date_added }}<br />*/
/*           <b>{{ text_payment_method }}</b> {{ payment_method }}<br />*/
/*           {% if shipping_method %} <b>{{ text_shipping_method }}</b> {{ shipping_method }}*/
/*           {% endif %}</td>*/
/*         <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><b>{{ text_email }}</b> {{ email }}<br />*/
/*           <b>{{ text_telephone }}</b> {{ telephone }}<br />*/
/*           <b>{{ text_ip }}</b> {{ ip }}<br />*/
/*          </td>*/
/*       </tr>*/
/*     </tbody>*/
/*   </table>*/
/*   {% if comment %}*/
/*   <table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">*/
/*     <thead>*/
/*       <tr>*/
/*         <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">{{ text_instruction }}</td>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       <tr>*/
/*         <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">{{ comment }}</td>*/
/*       </tr>*/
/*     </tbody>*/
/*   </table>*/
/*   {% endif %}*/
/*   <table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">*/
/*     <thead>*/
/*       <tr>*/
/*         <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">{{ text_payment_address }}</td>*/
/*         {% if shipping_address %}*/
/*         <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">{{ text_shipping_address }}</td>*/
/*         {% endif %} </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       <tr>*/
/*         <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">{{ payment_address }}</td>*/
/*         {% if shipping_address %}*/
/*         <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">{{ shipping_address }}</td>*/
/*         {% endif %} </tr>*/
/*     </tbody>*/
/*   </table>*/
/*   <table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">*/
/*     <thead>*/
/*       <tr>*/
/*         <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">{{ text_product }}</td>*/
/*         <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">{{ text_model }}</td>*/
/*         <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;">{{ text_quantity }}</td>*/
/*         <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;">{{ text_price }}</td>*/
/*         <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;">{{ text_total }}</td>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     */
/*     {% for product in mulproducts %}*/
/*     <tr>*/
/*       <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">{{ product.name }}*/
/*         {% for option in product.option %}<br />*/
/*         &nbsp;<small> - {{ option.name }}: {{ option.value }}</small>{% endfor %}</td>*/
/*       <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">{{ product.model }}</td>*/
/*       <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;">{{ product.quantity }}</td>*/
/*       <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;">{{ product.price }}</td>*/
/*       <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;">{{ product.total }}</td>*/
/*     </tr>*/
/*     {% endfor %}*/
/*    */
/*       </tbody>*/
/*     */
/*    */
/*     */
/*   </table>*/
/*   <p style="margin-top: 0px; margin-bottom: 20px;">{{ text_footer }}</p>*/
/* </div>*/
/* </body>*/
/* </html>*/
/* */
