<?php

/* default/template/checkout/confirm.twig */
class __TwigTemplate_8abab2c781da12fa5fc7803db1f0d8a7d26d20f644b891648f1aed28b172b272 extends Twig_Template
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
        if ( !(isset($context["redirect"]) ? $context["redirect"] : null)) {
            // line 2
            echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-left\">";
            // line 6
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</td>
        <td class=\"text-left\">";
            // line 7
            echo (isset($context["column_model"]) ? $context["column_model"] : null);
            echo "</td>
        <td class=\"text-right\">";
            // line 8
            echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
            echo "</td>
        <td class=\"text-right\">";
            // line 9
            echo (isset($context["column_price"]) ? $context["column_price"] : null);
            echo "</td>
        <td class=\"text-right\">";
            // line 10
            echo (isset($context["column_total"]) ? $context["column_total"] : null);
            echo "</td>
      </tr>
    </thead>
    <tbody>
    
    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 16
                echo "    <tr>
      <td class=\"text-left\"><a href=\"";
                // line 17
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br />
        &nbsp;<small> - ";
                    // line 18
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "        
      
      
        ";
                // line 22
                if (($this->getAttribute($context["product"], "seller_id", array()) > 0)) {
                    // line 23
                    echo "
       <br />
       <small>";
                    // line 25
                    echo (isset($context["text_seller"]) ? $context["text_seller"] : null);
                    echo " <a href=\"";
                    echo $this->getAttribute($context["product"], "sellerhref", array());
                    echo "\" target=\"_blank\">";
                    echo $this->getAttribute($context["product"], "sellername", array());
                    echo "</a></small>
      
       ";
                }
                // line 28
                echo "
       ";
                // line 29
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    echo " <br />
      
      
        <span class=\"label label-info\">";
                    // line 32
                    echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
                    echo "</span> <small>";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small> ";
                }
                echo "</td>
      <td class=\"text-left\">";
                // line 33
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
      <td class=\"text-right\">";
                // line 34
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</td>
      <td class=\"text-right\">";
                // line 35
                echo $this->getAttribute($context["product"], "price", array());
                echo "</td>
      <td class=\"text-right\">";
                // line 36
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 40
                echo "    <tr>
      <td class=\"text-left\">";
                // line 41
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
      <td class=\"text-left\"></td>
      <td class=\"text-right\">1</td>
      <td class=\"text-right\">";
                // line 44
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
      <td class=\"text-right\">";
                // line 45
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "      </tbody>
    
    <tfoot>
    
    ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 53
                echo "    <tr>
      <td colspan=\"4\" class=\"text-right\"><strong>";
                // line 54
                echo $this->getAttribute($context["total"], "title", array());
                echo ":</strong></td>
      <td class=\"text-right\">";
                // line 55
                echo $this->getAttribute($context["total"], "text", array());
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "      </tfoot>
    
  </table>
</div>
";
            // line 62
            echo (isset($context["payment"]) ? $context["payment"] : null);
            echo "
";
        } else {
            // line 63
            echo " 
<script type=\"text/javascript\"><!--
location = '";
            // line 65
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "';
//--></script> 
";
        }
        // line 67
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 67,  204 => 65,  200 => 63,  195 => 62,  189 => 58,  180 => 55,  176 => 54,  173 => 53,  169 => 52,  163 => 48,  154 => 45,  150 => 44,  144 => 41,  141 => 40,  136 => 39,  127 => 36,  123 => 35,  119 => 34,  115 => 33,  107 => 32,  101 => 29,  98 => 28,  88 => 25,  84 => 23,  82 => 22,  77 => 19,  68 => 18,  58 => 17,  55 => 16,  51 => 15,  43 => 10,  39 => 9,  35 => 8,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% if not redirect %}*/
/* <div class="table-responsive">*/
/*   <table class="table table-bordered table-hover">*/
/*     <thead>*/
/*       <tr>*/
/*         <td class="text-left">{{ column_name }}</td>*/
/*         <td class="text-left">{{ column_model }}</td>*/
/*         <td class="text-right">{{ column_quantity }}</td>*/
/*         <td class="text-right">{{ column_price }}</td>*/
/*         <td class="text-right">{{ column_total }}</td>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     */
/*     {% for product in products %}*/
/*     <tr>*/
/*       <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a> {% for option in product.option %} <br />*/
/*         &nbsp;<small> - {{ option.name }}: {{ option.value }}</small> {% endfor %}*/
/*         */
/*       */
/*       */
/*         {% if product.seller_id > 0 %}*/
/* */
/*        <br />*/
/*        <small>{{ text_seller }} <a href="{{ product.sellerhref }}" target="_blank">{{ product.sellername }}</a></small>*/
/*       */
/*        {% endif %}*/
/* */
/*        {% if product.recurring %} <br />*/
/*       */
/*       */
/*         <span class="label label-info">{{ text_recurring_item }}</span> <small>{{ product.recurring }}</small> {% endif %}</td>*/
/*       <td class="text-left">{{ product.model }}</td>*/
/*       <td class="text-right">{{ product.quantity }}</td>*/
/*       <td class="text-right">{{ product.price }}</td>*/
/*       <td class="text-right">{{ product.total }}</td>*/
/*     </tr>*/
/*     {% endfor %}*/
/*     {% for voucher in vouchers %}*/
/*     <tr>*/
/*       <td class="text-left">{{ voucher.description }}</td>*/
/*       <td class="text-left"></td>*/
/*       <td class="text-right">1</td>*/
/*       <td class="text-right">{{ voucher.amount }}</td>*/
/*       <td class="text-right">{{ voucher.amount }}</td>*/
/*     </tr>*/
/*     {% endfor %}*/
/*       </tbody>*/
/*     */
/*     <tfoot>*/
/*     */
/*     {% for total in totals %}*/
/*     <tr>*/
/*       <td colspan="4" class="text-right"><strong>{{ total.title }}:</strong></td>*/
/*       <td class="text-right">{{ total.text }}</td>*/
/*     </tr>*/
/*     {% endfor %}*/
/*       </tfoot>*/
/*     */
/*   </table>*/
/* </div>*/
/* {{ payment }}*/
/* {% else %} */
/* <script type="text/javascript"><!--*/
/* location = '{{ redirect }}';*/
/* //--></script> */
/* {% endif %} */
