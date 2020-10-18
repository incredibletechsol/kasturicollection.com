<?php

/* report/transactions.twig */
class __TwigTemplate_3611bde25145f3418f0d01a116e78b42fe0a1f118e7320cdbc0a85ae3cbaf262 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "

<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <h1>";
        // line 6
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
       ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-bar-chart\"></i> ";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
      </div>
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
\t\t<tr>
\t\t\t<td class=\"text-left\"></td>
\t\t\t<td class=\"text-left\">Txn Id</td>
\t\t\t<td class=\"text-left\">Date Added</td>
\t\t\t<td class=\"text-left\">Product Name</td>
\t\t\t<td class=\"text-left\">Description</td>
\t\t\t<td class=\"text-left\">Unit Price </td>
\t\t\t
\t\t\t<td class=\"text-left\">Commission</td>  
\t\t\t<td class=\"text-right\">Amount</td>
\t\t</tr>
            </thead>
            <tbody>\t\t
          
\t   ";
        // line 36
        if ((isset($context["transactions"]) ? $context["transactions"] : null)) {
            // line 37
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) ? $context["transactions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 38
                echo "            <tr>
\t\t<td class=\"text-left\">
\t\t ";
                // line 40
                if ($this->getAttribute($context["transaction"], "model", array())) {
                    // line 41
                    echo "\t\t<a style=\"cursor:pointer;\" onclick=\"return showhidediv(";
                    echo $this->getAttribute($context["transaction"], "seller_transaction_id", array());
                    echo ");\"
\t\tid=\"showhide";
                    // line 42
                    echo $this->getAttribute($context["transaction"], "seller_transaction_id", array());
                    echo "\">Show</a>
\t\t";
                }
                // line 44
                echo "\t\t</td>

\t\t<td class=\"text-left\">";
                // line 46
                echo $this->getAttribute($context["transaction"], "seller_transaction_id", array());
                echo "</td>\t 
\t\t<td class=\"text-left\">";
                // line 47
                echo $this->getAttribute($context["transaction"], "date_added", array());
                echo "</td>
\t\t<td class=\"text-left\">";
                // line 48
                echo $this->getAttribute($context["transaction"], "name", array());
                echo "</td>
\t\t<td class=\"text-left\">";
                // line 49
                echo $this->getAttribute($context["transaction"], "description", array());
                echo "</td>
\t\t<td class=\"text-left\">";
                // line 50
                echo $this->getAttribute($context["transaction"], "unitprice", array());
                echo "</td>
\t
\t\t<td class=\"text-left\">";
                // line 52
                echo $this->getAttribute($context["transaction"], "commission1", array());
                echo "</td>
\t\t<td class=\"text-right\">";
                // line 53
                echo $this->getAttribute($context["transaction"], "amount", array());
                echo "</td>
            </tr>
\t\t\t
\t\t\t
\t\t<tr id=\"";
                // line 57
                echo $this->getAttribute($context["transaction"], "seller_transaction_id", array());
                echo "\" style=\"display:none;\">
\t\t\t<td colspan=\"9\" style=\"background-color: rgb(234, 234, 234);\" class=\"hidden-row\">
\t\t\t\t<div class=\"row-fluid\"><div class=\"span6\"><div class=\"table-title\">Item Details</div>
\t\t\t\t\t<table class=\"first-block\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr></tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Model</td>
\t\t\t\t\t\t<td>";
                // line 65
                echo $this->getAttribute($context["transaction"], "model", array());
                echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr><td>Quantity</td>
\t\t\t\t\t\t<td>";
                // line 69
                echo $this->getAttribute($context["transaction"], "quantity", array());
                echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t
\t\t\t  <div class=\"table-title push-down-block\"><div class=\"table-title\">Sale Details</div>
\t\t\t  
\t\t\t\t\t\t  <table class=\"first-block table-disable-hover transaction-block block-hover-override\">
\t\t\t\t\t\t  
\t\t\t\t\t\t  <tbody>
\t\t\t\t\t\t  <tr></tr>
\t\t\t\t\t\t  <tr><td>Sale Amount</td><td class=\"text-right\">";
                // line 80
                echo $this->getAttribute($context["transaction"], "price", array());
                echo "</td></tr>\t\t\t  
\t\t\t\t\t\t  
\t\t\t\t\t\t  <tr class=\"table-title\" id=\"order-item-value\"><td>Order Item Value</td>
\t\t\t\t\t\t  <td class=\"text-right\">";
                // line 83
                echo $this->getAttribute($context["transaction"], "total", array());
                echo "</td></tr>
\t\t\t\t\t\t  </tbody>
\t\t\t\t\t\t  </table>
\t\t\t  
  <div class=\"table-title push-down-block\">Transaction Details</div>
\t  <div class=\"relative-position\">
\t\t  <div class=\"daterangepicker dropdown-menu opensleft marketplace-fee-dropdown marketplace-arrow\" 
\t\t  id=\"market";
                // line 90
                echo $this->getAttribute($context["transaction"], "seller_transaction_id", array());
                echo "\" style=\"display: none;\">
\t\t\t  <div class=\"line marketplace-tooltip-header\">Market place Fee
\t\t\t  <div class=\"pull-right close-marketplace-menu\">
\t\t\t  <div id=\"closeMarketplaceMenuAnchor\" 
nclick=\"return showcloseinnerdiv(";
                // line 94
                echo $this->getAttribute($context["transaction"], "seller_transaction_id", array());
                echo ");\">X</div></div></div>
\t\t\t  \t\t\t  
\t\t\t 
\t\t  </div>
\t  </div>

\t  <table class=\"first-block transaction-block block-hover-override\">
\t  <tbody>
\t  <tr></tr>
\t  <tr><td>Sale Amount</td>
\t  <td class=\"text-right\">";
                // line 104
                echo $this->getAttribute($context["transaction"], "total", array());
                echo "</td></tr>
\t  \t
  <tr class=\"table-title\" id=\"total-row\"><td>Commission</td><td class=\"text-right\">";
                // line 106
                echo $this->getAttribute($context["transaction"], "commission", array());
                echo "</td></tr>
  
\t  
\t  <tr class=\"table-title\" id=\"total-row\"><td>Net Payable</td><td class=\"text-right\">";
                // line 109
                echo $this->getAttribute($context["transaction"], "net_pay", array());
                echo "</td></tr></tbody>
\t  </table>
  </div>
\t\t\t  
\t\t\t\t\t
\t\t\t  </div>
\t\t\t  
\t\t\t
\t\t\t  
\t\t  
\t\t  </td>
\t\t  </tr>

          
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "             ";
        } else {
            // line 125
            echo "              <tr>
                <td class=\"text-center\" colspan=\"9\">You have no transactions</td>
              </tr>
\t\t\t    
             ";
        }
        // line 130
        echo "\t      <tr><td colspan=\"6\"></td><td class=\"text-right\"><b>Amount&nbsp;to&nbsp;pay:</b></td><td align=\"right\">";
        echo (isset($context["pending"]) ? $context["pending"] : null);
        echo "</td></tr>
            </tbody>
          </table>
\t\t
\t\t   <div class=\"pagination\">";
        // line 134
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
\t\t   <div class= \"text-right\">";
        // line 135
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
      </div>
    </div>
  </div>\t 
\t
  <script type=\"text/javascript\">
function showhidediv(tableid){
\tvar showhide = \$('#'+tableid).css('display');
\tif(showhide == 'none'){
\t\t\$('#showhide'+tableid).html('Hide');
\t\t\$('#'+tableid).show(300);
\t}
\telse{
\t\t\$('#showhide'+tableid).html('Show');
\t\t\$('#'+tableid).hide(300);
\t}
\treturn false;
}

function showhideinnerdiv(tableid){
\tvar showhide = \$('#market'+tableid).css('display');
\tif(showhide == 'none'){
\t\t
\t\t\$('#market'+tableid).show(300);
\t}
\telse{
\t\t
\t\t\$('#market'+tableid).hide(300);
\t}
\treturn false;
}

function showcloseinnerdiv(tableid){
\t
\t\t
\t\t\$('#market'+tableid).hide(300);
\t
\treturn false;
}

function filter() {
\turl = 'index.php?route=report/seller_transaction&token=";
        // line 176
        echo (isset($context["token"]) ? $context["token"] : null);
        echo "';
\t
\tvar filter_date_start = \$('input[name=\\'filter_date_start\\']').attr('value');
\t
\tif (filter_date_start) {
\t\turl += '&filter_date_start=' + encodeURIComponent(filter_date_start);
\t}

\tvar filter_date_end = \$('input[name=\\'filter_date_end\\']').attr('value');
\t
\tif (filter_date_end) {
\t\turl += '&filter_date_end=' + encodeURIComponent(filter_date_end);
\t}
\t\t
\tvar filter_seller_group = \$('select[name=\\'filter_seller_group\\']').attr('value');
\t
\tif (filter_seller_group) {
\t\turl += '&filter_seller_group=' + encodeURIComponent(filter_seller_group);
\t}
\t
\tvar filter_paid_status = \$('select[name=\\'filter_paid_status\\']').attr('value');
\t
\tif (filter_paid_status) {
\t\turl += '&filter_paid_status=' + encodeURIComponent(filter_paid_status);
\t}
\t
\tvar filter_order_status_id = \$('select[name=\\'filter_order_status_id\\']').attr('value');
\t
\tif (filter_order_status_id) {
\t\turl += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
\t}\t

\tlocation = url;
}
//--></script> 
<script type=\"text/javascript\"><!--
function removeHistory(id) {
\t\$.ajax({
\t\turl: 'index.php?route=report/seller_transaction/removeHistory&token=";
        // line 214
        echo (isset($context["token"]) ? $context["token"] : null);
        echo "&payment_id=' + id,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('.success, .warning').remove();
\t\t\t\$('#history').before('<div class=\"attention\"><img src=\"view/image/loading_1.gif\" alt=\"\" /> ";
        // line 218
        echo (isset($context["text_wait"]) ? $context["text_wait"] : null);
        echo "</div>');
\t\t},
\t\t
\t\tcomplete: function() {
\t\t\t\$('.attention').remove();
\t\t},
\t\t
\t\tsuccess: function(data) {
\t\t\t\$('#history_' + id).remove();
\t\t}
\t\t\t
\t});
}
//--></script>
<style>
.span12 {
  width: 940px;
}

.span11 {
  width: 860px;
}

.span10 {
  width: 780px;
}

.span9 {
  width: 700px;
}

.span8 {
  width: 620px;
}

.span7 {
  width: 540px;
}

.span6 {
  width: 460px;
}

.span5 {
  width: 380px;
}

.span4 {
  width: 300px;
}

.span3 {
  width: 220px;
}

.span2 {
  width: 140px;
}

.span1 {
  width: 60px;
}

.offset12 {
  margin-left: 980px;
}

.offset11 {
  margin-left: 900px;
}

.offset10 {
  margin-left: 820px;
}

.offset9 {
  margin-left: 740px;
}

.offset8 {
  margin-left: 660px;
}

.offset7 {
  margin-left: 580px;
}

.offset6 {
  margin-left: 500px;
}

.offset5 {
  margin-left: 420px;
}

.offset4 {
  margin-left: 340px;
}

.offset3 {
  margin-left: 260px;
}

.offset2 {
  margin-left: 180px;
}

.offset1 {
  margin-left: 100px;
}

.row-fluid {
  width: 100%;
  *zoom: 1;
}

.row-fluid:before,
.row-fluid:after {
  display: table;
  line-height: 0;
  content: \"\";
}

.row-fluid:after {
  clear: both;
}

.row-fluid [class*=\"span\"] {
  display: block;
  float: left;
  width: 100%;
  min-height: 28px;
  margin-left: 2.127659574468085%;
  *margin-left: 2.074468085106383%;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}

.row-fluid [class*=\"span\"]:first-child {
  margin-left: 0;
}

.row-fluid .controls-row [class*=\"span\"] + [class*=\"span\"] {
  margin-left: 2.127659574468085%;
}

.row-fluid .span12 {
  width: 100%;
  *width: 99.94680851063829%;
}

.row-fluid .span11 {
  width: 91.48936170212765%;
  *width: 91.43617021276594%;
}

.row-fluid .span10 {
  width: 82.97872340425532%;
  *width: 82.92553191489361%;
}

.row-fluid .span9 {
  width: 74.46808510638297%;
  *width: 74.41489361702126%;
}

.row-fluid .span8 {
  width: 65.95744680851064%;
  *width: 65.90425531914893%;
}

.row-fluid .span7 {
  width: 57.44680851063829%;
  *width: 57.39361702127659%;
}

.row-fluid .span6 {
  width: 48.93617021276595%;
  *width: 48.88297872340425%;
}

.row-fluid .span5 {
  width: 40.42553191489362%;
  *width: 40.37234042553192%;
}

.row-fluid .span4 {
  width: 31.914893617021278%;
  *width: 31.861702127659576%;
}

.row-fluid .span3 {
  width: 23.404255319148934%;
  *width: 23.351063829787233%;
}

.row-fluid .span2 {
  width: 14.893617021276595%;
  *width: 14.840425531914894%;
}

.row-fluid .span1 {
  width: 6.382978723404255%;
  *width: 6.329787234042553%;
}

.row-fluid .offset12 {
  margin-left: 104.25531914893617%;
  *margin-left: 104.14893617021275%;
}

.row-fluid .offset12:first-child {
  margin-left: 102.12765957446808%;
  *margin-left: 102.02127659574467%;
}

.row-fluid .offset11 {
  margin-left: 95.74468085106382%;
  *margin-left: 95.6382978723404%;
}

.row-fluid .offset11:first-child {
  margin-left: 93.61702127659574%;
  *margin-left: 93.51063829787232%;
}

.row-fluid .offset10 {
  margin-left: 87.23404255319149%;
  *margin-left: 87.12765957446807%;
}

.row-fluid .offset10:first-child {
  margin-left: 85.1063829787234%;
  *margin-left: 84.99999999999999%;
}

.row-fluid .offset9 {
  margin-left: 78.72340425531914%;
  *margin-left: 78.61702127659572%;
}

.row-fluid .offset9:first-child {
  margin-left: 76.59574468085106%;
  *margin-left: 76.48936170212764%;
}

.row-fluid .offset8 {
  margin-left: 70.2127659574468%;
  *margin-left: 70.10638297872339%;
}

.row-fluid .offset8:first-child {
  margin-left: 68.08510638297872%;
  *margin-left: 67.9787234042553%;
}

.row-fluid .offset7 {
  margin-left: 61.70212765957446%;
  *margin-left: 61.59574468085106%;
}

.row-fluid .offset7:first-child {
  margin-left: 59.574468085106375%;
  *margin-left: 59.46808510638297%;
}

.row-fluid .offset6 {
  margin-left: 53.191489361702125%;
  *margin-left: 53.085106382978715%;
}

.row-fluid .offset6:first-child {
  margin-left: 51.063829787234035%;
  *margin-left: 50.95744680851063%;
}

.row-fluid .offset5 {
  margin-left: 44.68085106382979%;
  *margin-left: 44.57446808510638%;
}

.row-fluid .offset5:first-child {
  margin-left: 42.5531914893617%;
  *margin-left: 42.4468085106383%;
}

.row-fluid .offset4 {
  margin-left: 36.170212765957444%;
  *margin-left: 36.06382978723405%;
}

.row-fluid .offset4:first-child {
  margin-left: 34.04255319148936%;
  *margin-left: 33.93617021276596%;
}

.row-fluid .offset3 {
  margin-left: 27.659574468085104%;
  *margin-left: 27.5531914893617%;
}

.row-fluid .offset3:first-child {
  margin-left: 25.53191489361702%;
  *margin-left: 25.425531914893618%;
}

.row-fluid .offset2 {
  margin-left: 19.148936170212764%;
  *margin-left: 19.04255319148936%;
}

.row-fluid .offset2:first-child {
  margin-left: 17.02127659574468%;
  *margin-left: 16.914893617021278%;
}

.row-fluid .offset1 {
  margin-left: 10.638297872340425%;
  *margin-left: 10.53191489361702%;
}

.row-fluid .offset1:first-child {
  margin-left: 8.51063829787234%;
  *margin-left: 8.404255319148938%;
}


.table-bordered td:last-child, .table-bordered th:last-child {
    border-right: 1px solid #dddddd;
}
.table-bordered td:first-child, .table-bordered th:first-child {
    border-left: 1px solid #dddddd;
}
.table-bordered th, .table-bordered td {
    border-left: 1px solid transparent;
}
.table th, .table td {
    border-top: 1px solid #dddddd;
    line-height: 18px;
    padding: 8px;
    text-align: left;
    vertical-align: top;
}

.hidden-row .table-title {
    font-weight: bold;
\tcolor:black;
}

.first-block td {
    background-color: transparent;
    width: 50%;
}

.first-block {
    width: 100%;
}
.first-block {
    border-top-right-radius: 4px;
}

.table th, .table td {
    line-height: 18px;
    text-align: left;
}


.first-block #total-row {
    background-color: #DDDDDD;
}

.first-block #settlement-heading {
    background-color: #DDDDDD;
}

.first-block #marketplace-fee-row, .first-block #marketplace-fee-row:hover {
    background-color: #DDDDDD;
}

.first-block tr:nth-child(even) {
    background-color: #f7f7f7;
}

.first-block td {
    background-color: transparent;
    width: 50%;
}

.first-block tr:first-child > td:last-child {
    background-color: transparent;
    width: 50%;
    border: 0px;
}

.marketplace-padding {
    padding: 7px;
}

.transaction-block .text-left {
    text-align: left;
}

.transaction-block .text-right {
    text-align: right;
}

.push-down-block {
    padding-top: 30px;
}

.settlement-tooltip {
    height: 30px;
    margin-left: 10px;
    cursor: pointer;
}

.first-block .net-payable-top-border {
    border-top: 1px solid #000000;
}

.first-block .text-center {
    text-align: center;
}

#marketplace-block table td:hover {
    background-color: #000000;
}

.first-block > tbody tr:nth-child(even):hover td {
    background-color: #f9f9f9;
}

.first-block > tbody tr:nth-child(odd):hover td {
    background-color: #FFFFFF;
}

.settlement-block tbody tr:nth-child(2):hover td {
    background-color: #DDDDDD;
}

.block-hover-override tbody tr:last-child:hover td {
    background-color: #DDDDDD;
}

.settlement-block {
    table-layout: fixed;
    width: 100%;
}

.settlement-block td {
    background-color: transparent;
    width: auto;
    word-wrap: break-word;
}

.settlement-block .wide {
    width: 28%;
}

.hidden-row .table-title {
    font-weight: bold;
}

.timeline .timeline-state {
    float: left;
    width: 100px;
}

.timeline .timeline-date {
    clear: both;
    line-height: 3px;
    color: #CCCCCC;
    width: 100%;
}

.timeline .timeline-label {
    text-align: center;
    line-height: 28px;
    color: #000000;
}

.timeline .circle-step {
    width: 100%;
    float: left;
    border-top: 2px solid #cccccc;
    position: relative;
    height: 20px;
    margin-left: 55px;
}

.timeline .last-circle-step.circle-step {
    border: none;
}

.timeline .status-label {
    width: 15%;
    float: left;
    height: 20px;
    display: inline-block;
    margin: 0 auto;
}

.timeline .green-round-circle {
    background-color: #adff2f;
    width: 13px;
    height: 13px;
    border-radius: 40px;
    border: 2px solid #CCCCCC;
    position: absolute;
    top: -7px;
    left: -5px;
}

.timeline .status-table {
    margin-top: 20px;
    margin-bottom: 0px;
    display: inline-block;

}

.timeline .status-label-black {
    color: #000000;
}

.timeline .status-background-color {
    background-color: #FFFFFF;
    padding: 20px;
    text-align: center;

}

.marketplace-fee-dropdown {
    display: none;
    position: absolute;
    top: 50px;
    left: -250px;
    min-width: 250px;
    width: 100%;
    padding: 0px;
}

.daterangepicker.marketplace-arrow:after {
    position: absolute;
    top: -6px;
    right: 10px;
    display: inline-block;
    border-right: 6px solid transparent;
    border-bottom: 6px solid #069;
    border-left: 6px solid transparent;
    content: \"\";
}

.daterangepicker.marketplace-arrow:before {
    position: absolute;
    top: -7px;
    right: 9px;
    display: inline-block;
    border-right: 7px solid transparent;
    border-bottom: 7px solid rgba(0, 0, 0, 0.2);
    border-left: 7px solid transparent;
    content: \"\";
}

.marketplace-tooltip-header {
    background-color: #069;
    padding: 7px;
    color: #FFF;
}

.close-marketplace-menu {
    cursor: pointer;
}

.marketplace-tooltip-padding {
    padding: 3px 7px 3px 7px;
}

.top-margin1 {
    margin: 10px auto 10px auto;
}

.top-margin2 {
    margin: 130px auto 10px auto;
}

.fire-icon {
    color: #ffa500;
    font-size: 34px;
    padding-top: 4px;
}

.mr10 {
    margin-right: 10px;
}

.orders-table .hidden-transaction-row {
    display: none;
    background-color: #EAEAEA;
}

.orders-table .inner-row-transaction {
    background-color: #EAEAEA;
}

.first-block .relative-position {
    position: relative;
}

.first-block #order-item-value {
    background-color: #DDD;
}


 .table-title {
    font-weight: bold;
}

.table-striped tbody tr:nth-child(2n+1) {
    background-color: #fff;
}

.table-bordered thead:last-child tr:last-child > th:first-child, .table-bordered tbody:last-child tr:last-child > td:first-child, .table-bordered tbody:last-child tr:last-child > th:first-child, .table-bordered tfoot:last-child tr:last-child > td:first-child, .table-bordered tfoot:last-child tr:last-child > th:first-child {
    border-bottom-left-radius: 4px;
}
.table-striped tbody tr:nth-child(2n+1) td {
    background-color: inherit;
}

.table-bordered td:first-child, .table-bordered th:first-child {
    border-left: 1px solid #dddddd;
}

.table th, .table td {
    border-top: 1px solid #dddddd;
    line-height: 18px;
    padding: 8px;
    text-align: left;
    vertical-align: top;
}
</style>
 </div>
";
        // line 860
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "report/transactions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  996 => 860,  351 => 218,  344 => 214,  303 => 176,  259 => 135,  255 => 134,  247 => 130,  240 => 125,  237 => 124,  216 => 109,  210 => 106,  205 => 104,  192 => 94,  185 => 90,  175 => 83,  169 => 80,  155 => 69,  148 => 65,  137 => 57,  130 => 53,  126 => 52,  121 => 50,  117 => 49,  113 => 48,  109 => 47,  105 => 46,  101 => 44,  96 => 42,  91 => 41,  89 => 40,  85 => 38,  80 => 37,  78 => 36,  56 => 17,  48 => 11,  37 => 9,  33 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* */
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*        {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-bar-chart"></i> {{ heading_title }}</h3>*/
/*       </div>*/
/*         <div class="table-responsive">*/
/*           <table class="table table-bordered">*/
/*             <thead>*/
/* 		<tr>*/
/* 			<td class="text-left"></td>*/
/* 			<td class="text-left">Txn Id</td>*/
/* 			<td class="text-left">Date Added</td>*/
/* 			<td class="text-left">Product Name</td>*/
/* 			<td class="text-left">Description</td>*/
/* 			<td class="text-left">Unit Price </td>*/
/* 			*/
/* 			<td class="text-left">Commission</td>  */
/* 			<td class="text-right">Amount</td>*/
/* 		</tr>*/
/*             </thead>*/
/*             <tbody>		*/
/*           */
/* 	   {% if transactions %}*/
/*             {% for transaction in transactions %}*/
/*             <tr>*/
/* 		<td class="text-left">*/
/* 		 {% if transaction.model %}*/
/* 		<a style="cursor:pointer;" onclick="return showhidediv({{ transaction.seller_transaction_id }});"*/
/* 		id="showhide{{ transaction.seller_transaction_id }}">Show</a>*/
/* 		{% endif %}*/
/* 		</td>*/
/* */
/* 		<td class="text-left">{{ transaction.seller_transaction_id }}</td>	 */
/* 		<td class="text-left">{{ transaction.date_added }}</td>*/
/* 		<td class="text-left">{{ transaction.name }}</td>*/
/* 		<td class="text-left">{{ transaction.description }}</td>*/
/* 		<td class="text-left">{{ transaction.unitprice }}</td>*/
/* 	*/
/* 		<td class="text-left">{{ transaction.commission1 }}</td>*/
/* 		<td class="text-right">{{ transaction.amount }}</td>*/
/*             </tr>*/
/* 			*/
/* 			*/
/* 		<tr id="{{ transaction.seller_transaction_id }}" style="display:none;">*/
/* 			<td colspan="9" style="background-color: rgb(234, 234, 234);" class="hidden-row">*/
/* 				<div class="row-fluid"><div class="span6"><div class="table-title">Item Details</div>*/
/* 					<table class="first-block">*/
/* 					<tbody>*/
/* 						<tr></tr>*/
/* 						<tr>*/
/* 						<td>Model</td>*/
/* 						<td>{{ transaction.model }}</td>*/
/* 						</tr>*/
/* 						*/
/* 						<tr><td>Quantity</td>*/
/* 						<td>{{ transaction.quantity }}</td>*/
/* 						</tr>*/
/* 						</tbody>*/
/* 					</table>*/
/* 					*/
/* 			  <div class="table-title push-down-block"><div class="table-title">Sale Details</div>*/
/* 			  */
/* 						  <table class="first-block table-disable-hover transaction-block block-hover-override">*/
/* 						  */
/* 						  <tbody>*/
/* 						  <tr></tr>*/
/* 						  <tr><td>Sale Amount</td><td class="text-right">{{ transaction.price }}</td></tr>			  */
/* 						  */
/* 						  <tr class="table-title" id="order-item-value"><td>Order Item Value</td>*/
/* 						  <td class="text-right">{{ transaction.total }}</td></tr>*/
/* 						  </tbody>*/
/* 						  </table>*/
/* 			  */
/*   <div class="table-title push-down-block">Transaction Details</div>*/
/* 	  <div class="relative-position">*/
/* 		  <div class="daterangepicker dropdown-menu opensleft marketplace-fee-dropdown marketplace-arrow" */
/* 		  id="market{{ transaction.seller_transaction_id }}" style="display: none;">*/
/* 			  <div class="line marketplace-tooltip-header">Market place Fee*/
/* 			  <div class="pull-right close-marketplace-menu">*/
/* 			  <div id="closeMarketplaceMenuAnchor" */
/* nclick="return showcloseinnerdiv({{ transaction.seller_transaction_id }});">X</div></div></div>*/
/* 			  			  */
/* 			 */
/* 		  </div>*/
/* 	  </div>*/
/* */
/* 	  <table class="first-block transaction-block block-hover-override">*/
/* 	  <tbody>*/
/* 	  <tr></tr>*/
/* 	  <tr><td>Sale Amount</td>*/
/* 	  <td class="text-right">{{ transaction.total }}</td></tr>*/
/* 	  	*/
/*   <tr class="table-title" id="total-row"><td>Commission</td><td class="text-right">{{ transaction.commission }}</td></tr>*/
/*   */
/* 	  */
/* 	  <tr class="table-title" id="total-row"><td>Net Payable</td><td class="text-right">{{ transaction.net_pay }}</td></tr></tbody>*/
/* 	  </table>*/
/*   </div>*/
/* 			  */
/* 					*/
/* 			  </div>*/
/* 			  */
/* 			*/
/* 			  */
/* 		  */
/* 		  </td>*/
/* 		  </tr>*/
/* */
/*           */
/*               {% endfor %}*/
/*              {% else %}*/
/*               <tr>*/
/*                 <td class="text-center" colspan="9">You have no transactions</td>*/
/*               </tr>*/
/* 			    */
/*              {% endif %}*/
/* 	      <tr><td colspan="6"></td><td class="text-right"><b>Amount&nbsp;to&nbsp;pay:</b></td><td align="right">{{ pending }}</td></tr>*/
/*             </tbody>*/
/*           </table>*/
/* 		*/
/* 		   <div class="pagination">{{ pagination }}</div>*/
/* 		   <div class= "text-right">{{ results }}</div>*/
/*       </div>*/
/*     </div>*/
/*   </div>	 */
/* 	*/
/*   <script type="text/javascript">*/
/* function showhidediv(tableid){*/
/* 	var showhide = $('#'+tableid).css('display');*/
/* 	if(showhide == 'none'){*/
/* 		$('#showhide'+tableid).html('Hide');*/
/* 		$('#'+tableid).show(300);*/
/* 	}*/
/* 	else{*/
/* 		$('#showhide'+tableid).html('Show');*/
/* 		$('#'+tableid).hide(300);*/
/* 	}*/
/* 	return false;*/
/* }*/
/* */
/* function showhideinnerdiv(tableid){*/
/* 	var showhide = $('#market'+tableid).css('display');*/
/* 	if(showhide == 'none'){*/
/* 		*/
/* 		$('#market'+tableid).show(300);*/
/* 	}*/
/* 	else{*/
/* 		*/
/* 		$('#market'+tableid).hide(300);*/
/* 	}*/
/* 	return false;*/
/* }*/
/* */
/* function showcloseinnerdiv(tableid){*/
/* 	*/
/* 		*/
/* 		$('#market'+tableid).hide(300);*/
/* 	*/
/* 	return false;*/
/* }*/
/* */
/* function filter() {*/
/* 	url = 'index.php?route=report/seller_transaction&token={{ token }}';*/
/* 	*/
/* 	var filter_date_start = $('input[name=\'filter_date_start\']').attr('value');*/
/* 	*/
/* 	if (filter_date_start) {*/
/* 		url += '&filter_date_start=' + encodeURIComponent(filter_date_start);*/
/* 	}*/
/* */
/* 	var filter_date_end = $('input[name=\'filter_date_end\']').attr('value');*/
/* 	*/
/* 	if (filter_date_end) {*/
/* 		url += '&filter_date_end=' + encodeURIComponent(filter_date_end);*/
/* 	}*/
/* 		*/
/* 	var filter_seller_group = $('select[name=\'filter_seller_group\']').attr('value');*/
/* 	*/
/* 	if (filter_seller_group) {*/
/* 		url += '&filter_seller_group=' + encodeURIComponent(filter_seller_group);*/
/* 	}*/
/* 	*/
/* 	var filter_paid_status = $('select[name=\'filter_paid_status\']').attr('value');*/
/* 	*/
/* 	if (filter_paid_status) {*/
/* 		url += '&filter_paid_status=' + encodeURIComponent(filter_paid_status);*/
/* 	}*/
/* 	*/
/* 	var filter_order_status_id = $('select[name=\'filter_order_status_id\']').attr('value');*/
/* 	*/
/* 	if (filter_order_status_id) {*/
/* 		url += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);*/
/* 	}	*/
/* */
/* 	location = url;*/
/* }*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* function removeHistory(id) {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=report/seller_transaction/removeHistory&token={{ token }}&payment_id=' + id,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('.success, .warning').remove();*/
/* 			$('#history').before('<div class="attention"><img src="view/image/loading_1.gif" alt="" /> {{ text_wait }}</div>');*/
/* 		},*/
/* 		*/
/* 		complete: function() {*/
/* 			$('.attention').remove();*/
/* 		},*/
/* 		*/
/* 		success: function(data) {*/
/* 			$('#history_' + id).remove();*/
/* 		}*/
/* 			*/
/* 	});*/
/* }*/
/* //--></script>*/
/* <style>*/
/* .span12 {*/
/*   width: 940px;*/
/* }*/
/* */
/* .span11 {*/
/*   width: 860px;*/
/* }*/
/* */
/* .span10 {*/
/*   width: 780px;*/
/* }*/
/* */
/* .span9 {*/
/*   width: 700px;*/
/* }*/
/* */
/* .span8 {*/
/*   width: 620px;*/
/* }*/
/* */
/* .span7 {*/
/*   width: 540px;*/
/* }*/
/* */
/* .span6 {*/
/*   width: 460px;*/
/* }*/
/* */
/* .span5 {*/
/*   width: 380px;*/
/* }*/
/* */
/* .span4 {*/
/*   width: 300px;*/
/* }*/
/* */
/* .span3 {*/
/*   width: 220px;*/
/* }*/
/* */
/* .span2 {*/
/*   width: 140px;*/
/* }*/
/* */
/* .span1 {*/
/*   width: 60px;*/
/* }*/
/* */
/* .offset12 {*/
/*   margin-left: 980px;*/
/* }*/
/* */
/* .offset11 {*/
/*   margin-left: 900px;*/
/* }*/
/* */
/* .offset10 {*/
/*   margin-left: 820px;*/
/* }*/
/* */
/* .offset9 {*/
/*   margin-left: 740px;*/
/* }*/
/* */
/* .offset8 {*/
/*   margin-left: 660px;*/
/* }*/
/* */
/* .offset7 {*/
/*   margin-left: 580px;*/
/* }*/
/* */
/* .offset6 {*/
/*   margin-left: 500px;*/
/* }*/
/* */
/* .offset5 {*/
/*   margin-left: 420px;*/
/* }*/
/* */
/* .offset4 {*/
/*   margin-left: 340px;*/
/* }*/
/* */
/* .offset3 {*/
/*   margin-left: 260px;*/
/* }*/
/* */
/* .offset2 {*/
/*   margin-left: 180px;*/
/* }*/
/* */
/* .offset1 {*/
/*   margin-left: 100px;*/
/* }*/
/* */
/* .row-fluid {*/
/*   width: 100%;*/
/*   *zoom: 1;*/
/* }*/
/* */
/* .row-fluid:before,*/
/* .row-fluid:after {*/
/*   display: table;*/
/*   line-height: 0;*/
/*   content: "";*/
/* }*/
/* */
/* .row-fluid:after {*/
/*   clear: both;*/
/* }*/
/* */
/* .row-fluid [class*="span"] {*/
/*   display: block;*/
/*   float: left;*/
/*   width: 100%;*/
/*   min-height: 28px;*/
/*   margin-left: 2.127659574468085%;*/
/*   *margin-left: 2.074468085106383%;*/
/*   -webkit-box-sizing: border-box;*/
/*      -moz-box-sizing: border-box;*/
/*           box-sizing: border-box;*/
/* }*/
/* */
/* .row-fluid [class*="span"]:first-child {*/
/*   margin-left: 0;*/
/* }*/
/* */
/* .row-fluid .controls-row [class*="span"] + [class*="span"] {*/
/*   margin-left: 2.127659574468085%;*/
/* }*/
/* */
/* .row-fluid .span12 {*/
/*   width: 100%;*/
/*   *width: 99.94680851063829%;*/
/* }*/
/* */
/* .row-fluid .span11 {*/
/*   width: 91.48936170212765%;*/
/*   *width: 91.43617021276594%;*/
/* }*/
/* */
/* .row-fluid .span10 {*/
/*   width: 82.97872340425532%;*/
/*   *width: 82.92553191489361%;*/
/* }*/
/* */
/* .row-fluid .span9 {*/
/*   width: 74.46808510638297%;*/
/*   *width: 74.41489361702126%;*/
/* }*/
/* */
/* .row-fluid .span8 {*/
/*   width: 65.95744680851064%;*/
/*   *width: 65.90425531914893%;*/
/* }*/
/* */
/* .row-fluid .span7 {*/
/*   width: 57.44680851063829%;*/
/*   *width: 57.39361702127659%;*/
/* }*/
/* */
/* .row-fluid .span6 {*/
/*   width: 48.93617021276595%;*/
/*   *width: 48.88297872340425%;*/
/* }*/
/* */
/* .row-fluid .span5 {*/
/*   width: 40.42553191489362%;*/
/*   *width: 40.37234042553192%;*/
/* }*/
/* */
/* .row-fluid .span4 {*/
/*   width: 31.914893617021278%;*/
/*   *width: 31.861702127659576%;*/
/* }*/
/* */
/* .row-fluid .span3 {*/
/*   width: 23.404255319148934%;*/
/*   *width: 23.351063829787233%;*/
/* }*/
/* */
/* .row-fluid .span2 {*/
/*   width: 14.893617021276595%;*/
/*   *width: 14.840425531914894%;*/
/* }*/
/* */
/* .row-fluid .span1 {*/
/*   width: 6.382978723404255%;*/
/*   *width: 6.329787234042553%;*/
/* }*/
/* */
/* .row-fluid .offset12 {*/
/*   margin-left: 104.25531914893617%;*/
/*   *margin-left: 104.14893617021275%;*/
/* }*/
/* */
/* .row-fluid .offset12:first-child {*/
/*   margin-left: 102.12765957446808%;*/
/*   *margin-left: 102.02127659574467%;*/
/* }*/
/* */
/* .row-fluid .offset11 {*/
/*   margin-left: 95.74468085106382%;*/
/*   *margin-left: 95.6382978723404%;*/
/* }*/
/* */
/* .row-fluid .offset11:first-child {*/
/*   margin-left: 93.61702127659574%;*/
/*   *margin-left: 93.51063829787232%;*/
/* }*/
/* */
/* .row-fluid .offset10 {*/
/*   margin-left: 87.23404255319149%;*/
/*   *margin-left: 87.12765957446807%;*/
/* }*/
/* */
/* .row-fluid .offset10:first-child {*/
/*   margin-left: 85.1063829787234%;*/
/*   *margin-left: 84.99999999999999%;*/
/* }*/
/* */
/* .row-fluid .offset9 {*/
/*   margin-left: 78.72340425531914%;*/
/*   *margin-left: 78.61702127659572%;*/
/* }*/
/* */
/* .row-fluid .offset9:first-child {*/
/*   margin-left: 76.59574468085106%;*/
/*   *margin-left: 76.48936170212764%;*/
/* }*/
/* */
/* .row-fluid .offset8 {*/
/*   margin-left: 70.2127659574468%;*/
/*   *margin-left: 70.10638297872339%;*/
/* }*/
/* */
/* .row-fluid .offset8:first-child {*/
/*   margin-left: 68.08510638297872%;*/
/*   *margin-left: 67.9787234042553%;*/
/* }*/
/* */
/* .row-fluid .offset7 {*/
/*   margin-left: 61.70212765957446%;*/
/*   *margin-left: 61.59574468085106%;*/
/* }*/
/* */
/* .row-fluid .offset7:first-child {*/
/*   margin-left: 59.574468085106375%;*/
/*   *margin-left: 59.46808510638297%;*/
/* }*/
/* */
/* .row-fluid .offset6 {*/
/*   margin-left: 53.191489361702125%;*/
/*   *margin-left: 53.085106382978715%;*/
/* }*/
/* */
/* .row-fluid .offset6:first-child {*/
/*   margin-left: 51.063829787234035%;*/
/*   *margin-left: 50.95744680851063%;*/
/* }*/
/* */
/* .row-fluid .offset5 {*/
/*   margin-left: 44.68085106382979%;*/
/*   *margin-left: 44.57446808510638%;*/
/* }*/
/* */
/* .row-fluid .offset5:first-child {*/
/*   margin-left: 42.5531914893617%;*/
/*   *margin-left: 42.4468085106383%;*/
/* }*/
/* */
/* .row-fluid .offset4 {*/
/*   margin-left: 36.170212765957444%;*/
/*   *margin-left: 36.06382978723405%;*/
/* }*/
/* */
/* .row-fluid .offset4:first-child {*/
/*   margin-left: 34.04255319148936%;*/
/*   *margin-left: 33.93617021276596%;*/
/* }*/
/* */
/* .row-fluid .offset3 {*/
/*   margin-left: 27.659574468085104%;*/
/*   *margin-left: 27.5531914893617%;*/
/* }*/
/* */
/* .row-fluid .offset3:first-child {*/
/*   margin-left: 25.53191489361702%;*/
/*   *margin-left: 25.425531914893618%;*/
/* }*/
/* */
/* .row-fluid .offset2 {*/
/*   margin-left: 19.148936170212764%;*/
/*   *margin-left: 19.04255319148936%;*/
/* }*/
/* */
/* .row-fluid .offset2:first-child {*/
/*   margin-left: 17.02127659574468%;*/
/*   *margin-left: 16.914893617021278%;*/
/* }*/
/* */
/* .row-fluid .offset1 {*/
/*   margin-left: 10.638297872340425%;*/
/*   *margin-left: 10.53191489361702%;*/
/* }*/
/* */
/* .row-fluid .offset1:first-child {*/
/*   margin-left: 8.51063829787234%;*/
/*   *margin-left: 8.404255319148938%;*/
/* }*/
/* */
/* */
/* .table-bordered td:last-child, .table-bordered th:last-child {*/
/*     border-right: 1px solid #dddddd;*/
/* }*/
/* .table-bordered td:first-child, .table-bordered th:first-child {*/
/*     border-left: 1px solid #dddddd;*/
/* }*/
/* .table-bordered th, .table-bordered td {*/
/*     border-left: 1px solid transparent;*/
/* }*/
/* .table th, .table td {*/
/*     border-top: 1px solid #dddddd;*/
/*     line-height: 18px;*/
/*     padding: 8px;*/
/*     text-align: left;*/
/*     vertical-align: top;*/
/* }*/
/* */
/* .hidden-row .table-title {*/
/*     font-weight: bold;*/
/* 	color:black;*/
/* }*/
/* */
/* .first-block td {*/
/*     background-color: transparent;*/
/*     width: 50%;*/
/* }*/
/* */
/* .first-block {*/
/*     width: 100%;*/
/* }*/
/* .first-block {*/
/*     border-top-right-radius: 4px;*/
/* }*/
/* */
/* .table th, .table td {*/
/*     line-height: 18px;*/
/*     text-align: left;*/
/* }*/
/* */
/* */
/* .first-block #total-row {*/
/*     background-color: #DDDDDD;*/
/* }*/
/* */
/* .first-block #settlement-heading {*/
/*     background-color: #DDDDDD;*/
/* }*/
/* */
/* .first-block #marketplace-fee-row, .first-block #marketplace-fee-row:hover {*/
/*     background-color: #DDDDDD;*/
/* }*/
/* */
/* .first-block tr:nth-child(even) {*/
/*     background-color: #f7f7f7;*/
/* }*/
/* */
/* .first-block td {*/
/*     background-color: transparent;*/
/*     width: 50%;*/
/* }*/
/* */
/* .first-block tr:first-child > td:last-child {*/
/*     background-color: transparent;*/
/*     width: 50%;*/
/*     border: 0px;*/
/* }*/
/* */
/* .marketplace-padding {*/
/*     padding: 7px;*/
/* }*/
/* */
/* .transaction-block .text-left {*/
/*     text-align: left;*/
/* }*/
/* */
/* .transaction-block .text-right {*/
/*     text-align: right;*/
/* }*/
/* */
/* .push-down-block {*/
/*     padding-top: 30px;*/
/* }*/
/* */
/* .settlement-tooltip {*/
/*     height: 30px;*/
/*     margin-left: 10px;*/
/*     cursor: pointer;*/
/* }*/
/* */
/* .first-block .net-payable-top-border {*/
/*     border-top: 1px solid #000000;*/
/* }*/
/* */
/* .first-block .text-center {*/
/*     text-align: center;*/
/* }*/
/* */
/* #marketplace-block table td:hover {*/
/*     background-color: #000000;*/
/* }*/
/* */
/* .first-block > tbody tr:nth-child(even):hover td {*/
/*     background-color: #f9f9f9;*/
/* }*/
/* */
/* .first-block > tbody tr:nth-child(odd):hover td {*/
/*     background-color: #FFFFFF;*/
/* }*/
/* */
/* .settlement-block tbody tr:nth-child(2):hover td {*/
/*     background-color: #DDDDDD;*/
/* }*/
/* */
/* .block-hover-override tbody tr:last-child:hover td {*/
/*     background-color: #DDDDDD;*/
/* }*/
/* */
/* .settlement-block {*/
/*     table-layout: fixed;*/
/*     width: 100%;*/
/* }*/
/* */
/* .settlement-block td {*/
/*     background-color: transparent;*/
/*     width: auto;*/
/*     word-wrap: break-word;*/
/* }*/
/* */
/* .settlement-block .wide {*/
/*     width: 28%;*/
/* }*/
/* */
/* .hidden-row .table-title {*/
/*     font-weight: bold;*/
/* }*/
/* */
/* .timeline .timeline-state {*/
/*     float: left;*/
/*     width: 100px;*/
/* }*/
/* */
/* .timeline .timeline-date {*/
/*     clear: both;*/
/*     line-height: 3px;*/
/*     color: #CCCCCC;*/
/*     width: 100%;*/
/* }*/
/* */
/* .timeline .timeline-label {*/
/*     text-align: center;*/
/*     line-height: 28px;*/
/*     color: #000000;*/
/* }*/
/* */
/* .timeline .circle-step {*/
/*     width: 100%;*/
/*     float: left;*/
/*     border-top: 2px solid #cccccc;*/
/*     position: relative;*/
/*     height: 20px;*/
/*     margin-left: 55px;*/
/* }*/
/* */
/* .timeline .last-circle-step.circle-step {*/
/*     border: none;*/
/* }*/
/* */
/* .timeline .status-label {*/
/*     width: 15%;*/
/*     float: left;*/
/*     height: 20px;*/
/*     display: inline-block;*/
/*     margin: 0 auto;*/
/* }*/
/* */
/* .timeline .green-round-circle {*/
/*     background-color: #adff2f;*/
/*     width: 13px;*/
/*     height: 13px;*/
/*     border-radius: 40px;*/
/*     border: 2px solid #CCCCCC;*/
/*     position: absolute;*/
/*     top: -7px;*/
/*     left: -5px;*/
/* }*/
/* */
/* .timeline .status-table {*/
/*     margin-top: 20px;*/
/*     margin-bottom: 0px;*/
/*     display: inline-block;*/
/* */
/* }*/
/* */
/* .timeline .status-label-black {*/
/*     color: #000000;*/
/* }*/
/* */
/* .timeline .status-background-color {*/
/*     background-color: #FFFFFF;*/
/*     padding: 20px;*/
/*     text-align: center;*/
/* */
/* }*/
/* */
/* .marketplace-fee-dropdown {*/
/*     display: none;*/
/*     position: absolute;*/
/*     top: 50px;*/
/*     left: -250px;*/
/*     min-width: 250px;*/
/*     width: 100%;*/
/*     padding: 0px;*/
/* }*/
/* */
/* .daterangepicker.marketplace-arrow:after {*/
/*     position: absolute;*/
/*     top: -6px;*/
/*     right: 10px;*/
/*     display: inline-block;*/
/*     border-right: 6px solid transparent;*/
/*     border-bottom: 6px solid #069;*/
/*     border-left: 6px solid transparent;*/
/*     content: "";*/
/* }*/
/* */
/* .daterangepicker.marketplace-arrow:before {*/
/*     position: absolute;*/
/*     top: -7px;*/
/*     right: 9px;*/
/*     display: inline-block;*/
/*     border-right: 7px solid transparent;*/
/*     border-bottom: 7px solid rgba(0, 0, 0, 0.2);*/
/*     border-left: 7px solid transparent;*/
/*     content: "";*/
/* }*/
/* */
/* .marketplace-tooltip-header {*/
/*     background-color: #069;*/
/*     padding: 7px;*/
/*     color: #FFF;*/
/* }*/
/* */
/* .close-marketplace-menu {*/
/*     cursor: pointer;*/
/* }*/
/* */
/* .marketplace-tooltip-padding {*/
/*     padding: 3px 7px 3px 7px;*/
/* }*/
/* */
/* .top-margin1 {*/
/*     margin: 10px auto 10px auto;*/
/* }*/
/* */
/* .top-margin2 {*/
/*     margin: 130px auto 10px auto;*/
/* }*/
/* */
/* .fire-icon {*/
/*     color: #ffa500;*/
/*     font-size: 34px;*/
/*     padding-top: 4px;*/
/* }*/
/* */
/* .mr10 {*/
/*     margin-right: 10px;*/
/* }*/
/* */
/* .orders-table .hidden-transaction-row {*/
/*     display: none;*/
/*     background-color: #EAEAEA;*/
/* }*/
/* */
/* .orders-table .inner-row-transaction {*/
/*     background-color: #EAEAEA;*/
/* }*/
/* */
/* .first-block .relative-position {*/
/*     position: relative;*/
/* }*/
/* */
/* .first-block #order-item-value {*/
/*     background-color: #DDD;*/
/* }*/
/* */
/* */
/*  .table-title {*/
/*     font-weight: bold;*/
/* }*/
/* */
/* .table-striped tbody tr:nth-child(2n+1) {*/
/*     background-color: #fff;*/
/* }*/
/* */
/* .table-bordered thead:last-child tr:last-child > th:first-child, .table-bordered tbody:last-child tr:last-child > td:first-child, .table-bordered tbody:last-child tr:last-child > th:first-child, .table-bordered tfoot:last-child tr:last-child > td:first-child, .table-bordered tfoot:last-child tr:last-child > th:first-child {*/
/*     border-bottom-left-radius: 4px;*/
/* }*/
/* .table-striped tbody tr:nth-child(2n+1) td {*/
/*     background-color: inherit;*/
/* }*/
/* */
/* .table-bordered td:first-child, .table-bordered th:first-child {*/
/*     border-left: 1px solid #dddddd;*/
/* }*/
/* */
/* .table th, .table td {*/
/*     border-top: 1px solid #dddddd;*/
/*     line-height: 18px;*/
/*     padding: 8px;*/
/*     text-align: left;*/
/*     vertical-align: top;*/
/* }*/
/* </style>*/
/*  </div>*/
/* {{ footer }}*/
