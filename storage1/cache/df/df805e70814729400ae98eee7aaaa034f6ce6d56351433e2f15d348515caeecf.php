<?php

/* setting/setting.twig */
class __TwigTemplate_9eeaa0410b52f8216007a427125b77987cb09d48f5512c0a135651c8d1621e18 extends Twig_Template
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
      <div class=\"pull-right\">
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
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
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        echo (isset($context["tab_store"]) ? $context["tab_store"] : null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 35
        echo (isset($context["tab_local"]) ? $context["tab_local"] : null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 36
        echo (isset($context["tab_option"]) ? $context["tab_option"] : null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        echo (isset($context["tab_image"]) ? $context["tab_image"] : null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 38
        echo (isset($context["tab_mail"]) ? $context["tab_mail"] : null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 39
        echo (isset($context["tab_server"]) ? $context["tab_server"] : null);
        echo "</a></li>

\t\t\t<li><a href=\"#tab-whatsapp\" data-toggle=\"tab\">Whatsapp Order</a></li>
\t\t\t

        <!--START OVICKO MULTISELLER-->
\t\t<li><a href=\"#tab-seller\" data-toggle=\"tab\">";
        // line 45
        echo (isset($context["tab_seller"]) ? $context["tab_seller"] : null);
        echo "</a></li>
\t\t<!--END OVICKO MULTISELLER-->
\t\t
          </ul>
          <div class=\"tab-content\">

\t\t\t\t<div class=\"tab-pane\" id=\"tab-whatsapp\">
\t\t\t\t <div class=\"form-group\">
\t                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 53
        echo (isset($context["entry_whatsappno"]) ? $context["entry_whatsappno"] : null);
        echo "</label>
\t                <div class=\"col-sm-10\">
\t                  <input type=\"text\" name=\"config_whatsapp_no\" value=\"";
        // line 55
        echo (isset($context["config_whatsapp_no"]) ? $context["config_whatsapp_no"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["config_whatsapp_no"]) ? $context["config_whatsapp_no"] : null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
\t                </div>
\t              </div>
\t              <div class=\"form-group\">
\t                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 59
        echo (isset($context["entry_whatsappno_buttontext"]) ? $context["entry_whatsappno_buttontext"] : null);
        echo "</label>
\t                <div class=\"col-sm-10\">
\t                  <input type=\"text\" name=\"config_whatsapp_btntext\" value=\"";
        // line 61
        echo (isset($context["config_whatsapp_btntext"]) ? $context["config_whatsapp_btntext"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["config_whatsapp_btntext"]) ? $context["config_whatsapp_btntext"] : null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
\t                </div>
\t              </div>
\t              <div class=\"form-group\">
\t                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 65
        echo (isset($context["entry_whatsapp_message"]) ? $context["entry_whatsapp_message"] : null);
        echo "</label>
\t                <div class=\"col-sm-10\">
\t                 <textarea name=\"config_whatsapp_msg\" id=\"input-whatsapp-msg\" class=\"form-control\">";
        // line 67
        echo (isset($context["config_whatsapp_msg"]) ? $context["config_whatsapp_msg"] : null);
        echo "</textarea>\t
\t                </div>
\t              </div>
\t              <div class=\"form-group\">
\t                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 71
        echo (isset($context["entry_whatsapp_showonheader"]) ? $context["entry_whatsapp_showonheader"] : null);
        echo "</label>
\t                <div class=\"col-sm-10\">
\t                \t<select name=\"config_whatsapp_ontop\" class=\"form-control\">
\t                \t\t<option>-- Select --</option>
\t                \t\t<option value=\"1\" ";
        // line 75
        echo ((((isset($context["config_whatsapp_ontop"]) ? $context["config_whatsapp_ontop"] : null) == 1)) ? ("selected") : (""));
        echo ">Yes</option>
\t                \t\t<option value=\"0\" ";
        // line 76
        echo ((((isset($context["config_whatsapp_ontop"]) ? $context["config_whatsapp_ontop"] : null) == 0)) ? ("selected") : (""));
        echo ">No</option>
\t                \t</select>
\t                </div>
\t              </div>
\t              <div class=\"form-group\">
\t                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 81
        echo (isset($context["entry_whatsapp_showonfooter"]) ? $context["entry_whatsapp_showonfooter"] : null);
        echo " </label>
\t                <div class=\"col-sm-10\">
\t                \t<select name=\"config_whatsapp_onbottom\" class=\"form-control\">
\t                \t\t<option>-- Select --</option>
\t                \t\t<option value=\"1\" ";
        // line 85
        echo ((((isset($context["config_whatsapp_onbottom"]) ? $context["config_whatsapp_onbottom"] : null) == 1)) ? ("selected") : (""));
        echo ">Yes</option>
\t                \t\t<option value=\"0\" ";
        // line 86
        echo ((((isset($context["config_whatsapp_onbottom"]) ? $context["config_whatsapp_onbottom"] : null) == 0)) ? ("selected") : (""));
        echo ">No</option>
\t                \t</select>
\t                </div>
\t              </div>
\t\t\t\t</div>
\t\t\t
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 94
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 96
        echo (isset($context["config_meta_title"]) ? $context["config_meta_title"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
                  ";
        // line 97
        if ((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null)) {
            // line 98
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_meta_title"]) ? $context["error_meta_title"] : null);
            echo "</div>
                  ";
        }
        // line 99
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 102
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 104
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo (isset($context["config_meta_description"]) ? $context["config_meta_description"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 108
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 110
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo (isset($context["config_meta_keyword"]) ? $context["config_meta_keyword"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 114
        echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">
                    
                    ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 119
            echo "                    ";
            if (($this->getAttribute($context["theme"], "value", array()) == (isset($context["config_theme"]) ? $context["config_theme"] : null))) {
                // line 120
                echo "                    
                    <option value=\"";
                // line 121
                echo $this->getAttribute($context["theme"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["theme"], "text", array());
                echo "</option>
                    
                    ";
            } else {
                // line 124
                echo "                    
                    <option value=\"";
                // line 125
                echo $this->getAttribute($context["theme"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["theme"], "text", array());
                echo "</option>
                    
                    ";
            }
            // line 128
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                  
                  </select>
                  <br />
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 135
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">
                    
                    ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 140
            echo "                    ";
            if (($this->getAttribute($context["layout"], "layout_id", array()) == (isset($context["config_layout_id"]) ? $context["config_layout_id"] : null))) {
                // line 141
                echo "                    
                    <option value=\"";
                // line 142
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>
                    
                    ";
            } else {
                // line 145
                echo "                    
                    <option value=\"";
                // line 146
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>
                    
                    ";
            }
            // line 149
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 157
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 159
        echo (isset($context["config_name"]) ? $context["config_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 160
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 161
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
                  ";
        }
        // line 162
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 165
        echo (isset($context["entry_owner"]) ? $context["entry_owner"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 167
        echo (isset($context["config_owner"]) ? $context["config_owner"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_owner"]) ? $context["entry_owner"] : null);
        echo "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 168
        if ((isset($context["error_owner"]) ? $context["error_owner"] : null)) {
            // line 169
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_owner"]) ? $context["error_owner"] : null);
            echo "</div>
                  ";
        }
        // line 170
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 173
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 175
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo (isset($context["config_address"]) ? $context["config_address"] : null);
        echo "</textarea>
                  ";
        // line 176
        if ((isset($context["error_address"]) ? $context["error_address"] : null)) {
            // line 177
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_address"]) ? $context["error_address"] : null);
            echo "</div>
                  ";
        }
        // line 178
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 181
        echo (isset($context["help_geocode"]) ? $context["help_geocode"] : null);
        echo "\">";
        echo (isset($context["entry_geocode"]) ? $context["entry_geocode"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 183
        echo (isset($context["config_geocode"]) ? $context["config_geocode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_geocode"]) ? $context["entry_geocode"] : null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 187
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 189
        echo (isset($context["config_email"]) ? $context["config_email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 190
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 191
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                  ";
        }
        // line 192
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 195
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 197
        echo (isset($context["config_telephone"]) ? $context["config_telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 198
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 199
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
                  ";
        }
        // line 200
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 203
        echo (isset($context["entry_fax"]) ? $context["entry_fax"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 205
        echo (isset($context["config_fax"]) ? $context["config_fax"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_fax"]) ? $context["entry_fax"] : null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 209
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 210
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 211
        echo (isset($context["config_image"]) ? $context["config_image"] : null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 215
        echo (isset($context["help_open"]) ? $context["help_open"] : null);
        echo "\">";
        echo (isset($context["entry_open"]) ? $context["entry_open"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 217
        echo (isset($context["entry_open"]) ? $context["entry_open"] : null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo (isset($context["config_open"]) ? $context["config_open"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 221
        echo (isset($context["help_comment"]) ? $context["help_comment"] : null);
        echo "\">";
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 223
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo (isset($context["config_comment"]) ? $context["config_comment"] : null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 226
        if ((isset($context["locations"]) ? $context["locations"] : null)) {
            // line 227
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 228
            echo (isset($context["help_location"]) ? $context["help_location"] : null);
            echo "\">";
            echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\"> ";
            // line 229
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 230
                echo "                  <div class=\"checkbox\">
                    <label> ";
                // line 231
                if (twig_in_filter($this->getAttribute($context["location"], "location_id", array()), (isset($context["config_location"]) ? $context["config_location"] : null))) {
                    // line 232
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo $this->getAttribute($context["location"], "location_id", array());
                    echo "\" checked=\"checked\" />
                      ";
                    // line 233
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "
                      ";
                } else {
                    // line 235
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo $this->getAttribute($context["location"], "location_id", array());
                    echo "\" />
                      ";
                    // line 236
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "
                      ";
                }
                // line 237
                echo " </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            echo " </div>
              </div>
              ";
        }
        // line 241
        echo " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 244
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">
                    
                    ";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 249
            echo "                    ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["config_country_id"]) ? $context["config_country_id"] : null))) {
                // line 250
                echo "                    
                    <option value=\"";
                // line 251
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                    
                    ";
            } else {
                // line 254
                echo "                    
                    <option value=\"";
                // line 255
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                    
                    ";
            }
            // line 258
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 259
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 264
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 271
        echo (isset($context["entry_language"]) ? $context["entry_language"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">
                    
                    ";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 276
            echo "                    ";
            if (($this->getAttribute($context["language"], "code", array()) == (isset($context["config_language"]) ? $context["config_language"] : null))) {
                // line 277
                echo "                    
                    <option value=\"";
                // line 278
                echo $this->getAttribute($context["language"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                    
                    ";
            } else {
                // line 281
                echo "                    
                    <option value=\"";
                // line 282
                echo $this->getAttribute($context["language"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                    
                    ";
            }
            // line 285
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 286
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 291
        echo (isset($context["entry_admin_language"]) ? $context["entry_admin_language"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
                    
                    ";
        // line 295
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 296
            echo "                    ";
            if (($this->getAttribute($context["language"], "code", array()) == (isset($context["config_admin_language"]) ? $context["config_admin_language"] : null))) {
                // line 297
                echo "                    
                    <option value=\"";
                // line 298
                echo $this->getAttribute($context["language"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                    
                    ";
            } else {
                // line 301
                echo "                    
                    <option value=\"";
                // line 302
                echo $this->getAttribute($context["language"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                    
                    ";
            }
            // line 305
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 306
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 311
        echo (isset($context["help_currency"]) ? $context["help_currency"] : null);
        echo "\">";
        echo (isset($context["entry_currency"]) ? $context["entry_currency"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">
                    
                    ";
        // line 315
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 316
            echo "                    ";
            if (($this->getAttribute($context["currency"], "code", array()) == (isset($context["config_currency"]) ? $context["config_currency"] : null))) {
                // line 317
                echo "                    
                    <option value=\"";
                // line 318
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>
                    
                    ";
            } else {
                // line 321
                echo "                    
                    <option value=\"";
                // line 322
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>
                    
                    ";
            }
            // line 325
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 326
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 331
        echo (isset($context["help_currency_auto"]) ? $context["help_currency_auto"] : null);
        echo "\">";
        echo (isset($context["entry_currency_auto"]) ? $context["entry_currency_auto"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 333
        if ((isset($context["config_currency_auto"]) ? $context["config_currency_auto"] : null)) {
            // line 334
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    ";
            // line 335
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        } else {
            // line 337
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    ";
            // line 338
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        }
        // line 339
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 340
        if ( !(isset($context["config_currency_auto"]) ? $context["config_currency_auto"] : null)) {
            // line 341
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    ";
            // line 342
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        } else {
            // line 344
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    ";
            // line 345
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        }
        // line 346
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 350
        echo (isset($context["entry_length_class"]) ? $context["entry_length_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    
                    ";
        // line 354
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["length_classes"]) ? $context["length_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 355
            echo "                    ";
            if (($this->getAttribute($context["length_class"], "length_class_id", array()) == (isset($context["config_length_class_id"]) ? $context["config_length_class_id"] : null))) {
                // line 356
                echo "                    
                    <option value=\"";
                // line 357
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                    
                    ";
            } else {
                // line 360
                echo "                    
                    <option value=\"";
                // line 361
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                    
                    ";
            }
            // line 364
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 370
        echo (isset($context["entry_weight_class"]) ? $context["entry_weight_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    
                    ";
        // line 374
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weight_classes"]) ? $context["weight_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 375
            echo "                    ";
            if (($this->getAttribute($context["weight_class"], "weight_class_id", array()) == (isset($context["config_weight_class_id"]) ? $context["config_weight_class_id"] : null))) {
                // line 376
                echo "                    
                    <option value=\"";
                // line 377
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                    
                    ";
            } else {
                // line 380
                echo "                    
                    <option value=\"";
                // line 381
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                    
                    ";
            }
            // line 384
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 385
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 392
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 394
        echo (isset($context["help_product_count"]) ? $context["help_product_count"] : null);
        echo "\">";
        echo (isset($context["entry_product_count"]) ? $context["entry_product_count"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 396
        if ((isset($context["config_product_count"]) ? $context["config_product_count"] : null)) {
            // line 397
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 398
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 400
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 401
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 402
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 403
        if ( !(isset($context["config_product_count"]) ? $context["config_product_count"] : null)) {
            // line 404
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 405
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 407
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 408
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 409
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 413
        echo (isset($context["help_limit_admin"]) ? $context["help_limit_admin"] : null);
        echo "\">";
        echo (isset($context["entry_limit_admin"]) ? $context["entry_limit_admin"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 415
        echo (isset($context["config_limit_admin"]) ? $context["config_limit_admin"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_limit_admin"]) ? $context["entry_limit_admin"] : null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 416
        if ((isset($context["error_limit_admin"]) ? $context["error_limit_admin"] : null)) {
            // line 417
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_limit_admin"]) ? $context["error_limit_admin"] : null);
            echo "</div>
                    ";
        }
        // line 418
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 422
        echo (isset($context["text_review"]) ? $context["text_review"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 424
        echo (isset($context["help_review"]) ? $context["help_review"] : null);
        echo "\">";
        echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 426
        if ((isset($context["config_review_status"]) ? $context["config_review_status"] : null)) {
            // line 427
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 428
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 430
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 431
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 432
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 433
        if ( !(isset($context["config_review_status"]) ? $context["config_review_status"] : null)) {
            // line 434
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 435
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 437
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 438
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 439
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 443
        echo (isset($context["help_review_guest"]) ? $context["help_review_guest"] : null);
        echo "\">";
        echo (isset($context["entry_review_guest"]) ? $context["entry_review_guest"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 445
        if ((isset($context["config_review_guest"]) ? $context["config_review_guest"] : null)) {
            // line 446
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 447
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 449
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 450
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 451
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 452
        if ( !(isset($context["config_review_guest"]) ? $context["config_review_guest"] : null)) {
            // line 453
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 454
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 456
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 457
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 458
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 463
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 465
        echo (isset($context["help_voucher_min"]) ? $context["help_voucher_min"] : null);
        echo "\">";
        echo (isset($context["entry_voucher_min"]) ? $context["entry_voucher_min"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 467
        echo (isset($context["config_voucher_min"]) ? $context["config_voucher_min"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_voucher_min"]) ? $context["entry_voucher_min"] : null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 468
        if ((isset($context["error_voucher_min"]) ? $context["error_voucher_min"] : null)) {
            // line 469
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_voucher_min"]) ? $context["error_voucher_min"] : null);
            echo "</div>
                    ";
        }
        // line 470
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 473
        echo (isset($context["help_voucher_max"]) ? $context["help_voucher_max"] : null);
        echo "\">";
        echo (isset($context["entry_voucher_max"]) ? $context["entry_voucher_max"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 475
        echo (isset($context["config_voucher_max"]) ? $context["config_voucher_max"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_voucher_max"]) ? $context["entry_voucher_max"] : null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 476
        if ((isset($context["error_voucher_max"]) ? $context["error_voucher_max"] : null)) {
            // line 477
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_voucher_max"]) ? $context["error_voucher_max"] : null);
            echo "</div>
                    ";
        }
        // line 478
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 482
        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 484
        echo (isset($context["entry_tax"]) ? $context["entry_tax"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 486
        if ((isset($context["config_tax"]) ? $context["config_tax"] : null)) {
            // line 487
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 488
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 490
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 491
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 492
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 493
        if ( !(isset($context["config_tax"]) ? $context["config_tax"] : null)) {
            // line 494
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 495
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 497
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 498
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 499
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 503
        echo (isset($context["help_tax_default"]) ? $context["help_tax_default"] : null);
        echo "\">";
        echo (isset($context["entry_tax_default"]) ? $context["entry_tax_default"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 506
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 508
        if (((isset($context["config_tax_default"]) ? $context["config_tax_default"] : null) == "shipping")) {
            // line 509
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 510
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      
                      ";
        } else {
            // line 513
            echo "                      
                      <option value=\"shipping\">";
            // line 514
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      
                      ";
        }
        // line 517
        echo "                      ";
        if (((isset($context["config_tax_default"]) ? $context["config_tax_default"] : null) == "payment")) {
            // line 518
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 519
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      
                      ";
        } else {
            // line 522
            echo "                      
                      <option value=\"payment\">";
            // line 523
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      
                      ";
        }
        // line 526
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 531
        echo (isset($context["help_tax_customer"]) ? $context["help_tax_customer"] : null);
        echo "\">";
        echo (isset($context["entry_tax_customer"]) ? $context["entry_tax_customer"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 534
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 536
        if (((isset($context["config_tax_customer"]) ? $context["config_tax_customer"] : null) == "shipping")) {
            // line 537
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 538
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      
                      ";
        } else {
            // line 541
            echo "                      
                      <option value=\"shipping\">";
            // line 542
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      
                      ";
        }
        // line 545
        echo "                      ";
        if (((isset($context["config_tax_customer"]) ? $context["config_tax_customer"] : null) == "payment")) {
            // line 546
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 547
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      
                      ";
        } else {
            // line 550
            echo "                      
                      <option value=\"payment\">";
            // line 551
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      
                      ";
        }
        // line 554
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 560
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 562
        echo (isset($context["help_customer_online"]) ? $context["help_customer_online"] : null);
        echo "\">";
        echo (isset($context["entry_customer_online"]) ? $context["entry_customer_online"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 564
        if ((isset($context["config_customer_online"]) ? $context["config_customer_online"] : null)) {
            // line 565
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 566
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 568
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 569
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 570
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 571
        if ( !(isset($context["config_customer_online"]) ? $context["config_customer_online"] : null)) {
            // line 572
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 573
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 575
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 576
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 577
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 581
        echo (isset($context["help_customer_activity"]) ? $context["help_customer_activity"] : null);
        echo "\">";
        echo (isset($context["entry_customer_activity"]) ? $context["entry_customer_activity"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 583
        if ((isset($context["config_customer_activity"]) ? $context["config_customer_activity"] : null)) {
            // line 584
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 585
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 587
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 588
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 589
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 590
        if ( !(isset($context["config_customer_activity"]) ? $context["config_customer_activity"] : null)) {
            // line 591
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 592
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 594
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 595
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 596
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 600
        echo (isset($context["entry_customer_search"]) ? $context["entry_customer_search"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 602
        if ((isset($context["config_customer_search"]) ? $context["config_customer_search"] : null)) {
            // line 603
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 604
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 606
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 607
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 608
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 609
        if ( !(isset($context["config_customer_search"]) ? $context["config_customer_search"] : null)) {
            // line 610
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 611
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 613
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 614
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 615
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 619
        echo (isset($context["help_customer_group"]) ? $context["help_customer_group"] : null);
        echo "\">";
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                      
                      ";
        // line 623
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 624
            echo "                      ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["config_customer_group_id"]) ? $context["config_customer_group_id"] : null))) {
                // line 625
                echo "                      
                      <option value=\"";
                // line 626
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                      
                      ";
            } else {
                // line 629
                echo "                      
                      <option value=\"";
                // line 630
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                      
                      ";
            }
            // line 633
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 634
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 639
        echo (isset($context["help_customer_group_display"]) ? $context["help_customer_group_display"] : null);
        echo "\">";
        echo (isset($context["entry_customer_group_display"]) ? $context["entry_customer_group_display"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 640
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 641
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 642
            if (twig_in_filter($this->getAttribute($context["customer_group"], "customer_group_id", array()), (isset($context["config_customer_group_display"]) ? $context["config_customer_group_display"] : null))) {
                // line 643
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\" />
                        ";
                // line 644
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
                        ";
            } else {
                // line 646
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" />
                        ";
                // line 647
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
                        ";
            }
            // line 648
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 651
        echo "                    ";
        if ((isset($context["error_customer_group_display"]) ? $context["error_customer_group_display"] : null)) {
            // line 652
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_customer_group_display"]) ? $context["error_customer_group_display"] : null);
            echo "</div>
                    ";
        }
        // line 653
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 656
        echo (isset($context["help_customer_price"]) ? $context["help_customer_price"] : null);
        echo "\">";
        echo (isset($context["entry_customer_price"]) ? $context["entry_customer_price"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 658
        if ((isset($context["config_customer_price"]) ? $context["config_customer_price"] : null)) {
            // line 659
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 660
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 662
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 663
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 664
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 665
        if ( !(isset($context["config_customer_price"]) ? $context["config_customer_price"] : null)) {
            // line 666
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 667
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 669
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 670
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 671
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 675
        echo (isset($context["help_login_attempts"]) ? $context["help_login_attempts"] : null);
        echo "\">";
        echo (isset($context["entry_login_attempts"]) ? $context["entry_login_attempts"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 677
        echo (isset($context["config_login_attempts"]) ? $context["config_login_attempts"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_login_attempts"]) ? $context["entry_login_attempts"] : null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 678
        if ((isset($context["error_login_attempts"]) ? $context["error_login_attempts"] : null)) {
            // line 679
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_login_attempts"]) ? $context["error_login_attempts"] : null);
            echo "</div>
                    ";
        }
        // line 680
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 683
        echo (isset($context["help_account"]) ? $context["help_account"] : null);
        echo "\">";
        echo (isset($context["entry_account"]) ? $context["entry_account"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 686
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 688
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 689
            echo "                      ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_account_id"]) ? $context["config_account_id"] : null))) {
                // line 690
                echo "                      
                      <option value=\"";
                // line 691
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            } else {
                // line 694
                echo "                      
                      <option value=\"";
                // line 695
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            }
            // line 698
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 699
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 705
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 707
        echo (isset($context["help_invoice_prefix"]) ? $context["help_invoice_prefix"] : null);
        echo "\">";
        echo (isset($context["entry_invoice_prefix"]) ? $context["entry_invoice_prefix"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 709
        echo (isset($context["config_invoice_prefix"]) ? $context["config_invoice_prefix"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_invoice_prefix"]) ? $context["entry_invoice_prefix"] : null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 713
        echo (isset($context["help_cart_weight"]) ? $context["help_cart_weight"] : null);
        echo "\">";
        echo (isset($context["entry_cart_weight"]) ? $context["entry_cart_weight"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 715
        if ((isset($context["config_cart_weight"]) ? $context["config_cart_weight"] : null)) {
            // line 716
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 717
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 719
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 720
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 721
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 722
        if ( !(isset($context["config_cart_weight"]) ? $context["config_cart_weight"] : null)) {
            // line 723
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 724
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 726
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 727
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 728
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 732
        echo (isset($context["help_checkout_guest"]) ? $context["help_checkout_guest"] : null);
        echo "\">";
        echo (isset($context["entry_checkout_guest"]) ? $context["entry_checkout_guest"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 734
        if ((isset($context["config_checkout_guest"]) ? $context["config_checkout_guest"] : null)) {
            // line 735
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 736
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 738
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 739
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 740
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 741
        if ( !(isset($context["config_checkout_guest"]) ? $context["config_checkout_guest"] : null)) {
            // line 742
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 743
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 745
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 746
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 747
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 751
        echo (isset($context["help_checkout"]) ? $context["help_checkout"] : null);
        echo "\">";
        echo (isset($context["entry_checkout"]) ? $context["entry_checkout"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 754
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 756
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 757
            echo "                      ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_checkout_id"]) ? $context["config_checkout_id"] : null))) {
                // line 758
                echo "                      
                      <option value=\"";
                // line 759
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            } else {
                // line 762
                echo "                      
                      <option value=\"";
                // line 763
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            }
            // line 766
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 767
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 772
        echo (isset($context["help_order_status"]) ? $context["help_order_status"] : null);
        echo "\">";
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      
                      ";
        // line 776
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 777
            echo "                      ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["config_order_status_id"]) ? $context["config_order_status_id"] : null))) {
                // line 778
                echo "                      
                      <option value=\"";
                // line 779
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                      
                      ";
            } else {
                // line 782
                echo "                      
                      <option value=\"";
                // line 783
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                      
                      ";
            }
            // line 786
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 787
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 792
        echo (isset($context["help_processing_status"]) ? $context["help_processing_status"] : null);
        echo "\">";
        echo (isset($context["entry_processing_status"]) ? $context["entry_processing_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 794
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 795
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 796
            if (twig_in_filter($this->getAttribute($context["order_status"], "order_status_id", array()), (isset($context["config_processing_status"]) ? $context["config_processing_status"] : null))) {
                // line 797
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" checked=\"checked\" />
                          ";
                // line 798
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                          ";
            } else {
                // line 800
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" />
                          ";
                // line 801
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                          ";
            }
            // line 802
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 804
        echo " </div>
                    ";
        // line 805
        if ((isset($context["error_processing_status"]) ? $context["error_processing_status"] : null)) {
            // line 806
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_processing_status"]) ? $context["error_processing_status"] : null);
            echo "</div>
                    ";
        }
        // line 807
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 810
        echo (isset($context["help_complete_status"]) ? $context["help_complete_status"] : null);
        echo "\">";
        echo (isset($context["entry_complete_status"]) ? $context["entry_complete_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 812
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 813
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 814
            if (twig_in_filter($this->getAttribute($context["order_status"], "order_status_id", array()), (isset($context["config_complete_status"]) ? $context["config_complete_status"] : null))) {
                // line 815
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" checked=\"checked\" />
                          ";
                // line 816
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                          ";
            } else {
                // line 818
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" />
                          ";
                // line 819
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                          ";
            }
            // line 820
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 822
        echo " </div>
                    ";
        // line 823
        if ((isset($context["error_complete_status"]) ? $context["error_complete_status"] : null)) {
            // line 824
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_complete_status"]) ? $context["error_complete_status"] : null);
            echo "</div>
                    ";
        }
        // line 825
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 828
        echo (isset($context["help_fraud_status"]) ? $context["help_fraud_status"] : null);
        echo "\">";
        echo (isset($context["entry_fraud_status"]) ? $context["entry_fraud_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">
                      
                      ";
        // line 832
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 833
            echo "                      ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["config_fraud_status_id"]) ? $context["config_fraud_status_id"] : null))) {
                // line 834
                echo "                      
                      <option value=\"";
                // line 835
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                      
                      ";
            } else {
                // line 838
                echo "                      
                      <option value=\"";
                // line 839
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                      
                      ";
            }
            // line 842
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 843
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 848
        echo (isset($context["help_api"]) ? $context["help_api"] : null);
        echo "\">";
        echo (isset($context["entry_api"]) ? $context["entry_api"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 851
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 853
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apis"]) ? $context["apis"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 854
            echo "                      ";
            if (($this->getAttribute($context["api"], "api_id", array()) == (isset($context["config_api_id"]) ? $context["config_api_id"] : null))) {
                // line 855
                echo "                      
                      <option value=\"";
                // line 856
                echo $this->getAttribute($context["api"], "api_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["api"], "username", array());
                echo "</option>
                      
                      ";
            } else {
                // line 859
                echo "                      
                      <option value=\"";
                // line 860
                echo $this->getAttribute($context["api"], "api_id", array());
                echo "\">";
                echo $this->getAttribute($context["api"], "username", array());
                echo "</option>
                      
                      ";
            }
            // line 863
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 864
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 870
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 872
        echo (isset($context["help_stock_display"]) ? $context["help_stock_display"] : null);
        echo "\">";
        echo (isset($context["entry_stock_display"]) ? $context["entry_stock_display"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 874
        if ((isset($context["config_stock_display"]) ? $context["config_stock_display"] : null)) {
            // line 875
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 876
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 878
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 879
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 880
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 881
        if ( !(isset($context["config_stock_display"]) ? $context["config_stock_display"] : null)) {
            // line 882
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 883
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 885
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 886
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 887
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 891
        echo (isset($context["help_stock_warning"]) ? $context["help_stock_warning"] : null);
        echo "\">";
        echo (isset($context["entry_stock_warning"]) ? $context["entry_stock_warning"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 893
        if ((isset($context["config_stock_warning"]) ? $context["config_stock_warning"] : null)) {
            // line 894
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 895
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 897
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 898
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 899
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 900
        if ( !(isset($context["config_stock_warning"]) ? $context["config_stock_warning"] : null)) {
            // line 901
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 902
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 904
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 905
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 906
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 910
        echo (isset($context["help_stock_checkout"]) ? $context["help_stock_checkout"] : null);
        echo "\">";
        echo (isset($context["entry_stock_checkout"]) ? $context["entry_stock_checkout"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 912
        if ((isset($context["config_stock_checkout"]) ? $context["config_stock_checkout"] : null)) {
            // line 913
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 914
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 916
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 917
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 918
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 919
        if ( !(isset($context["config_stock_checkout"]) ? $context["config_stock_checkout"] : null)) {
            // line 920
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 921
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 923
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 924
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 925
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 930
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 932
        echo (isset($context["entry_affiliate_group"]) ? $context["entry_affiliate_group"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">
                      
                      ";
        // line 936
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 937
            echo "                      ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["config_affiliate_group_id"]) ? $context["config_affiliate_group_id"] : null))) {
                // line 938
                echo "                      
                      <option value=\"";
                // line 939
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                      
                      ";
            } else {
                // line 942
                echo "                      
                      <option value=\"";
                // line 943
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                      
                      ";
            }
            // line 946
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 947
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 952
        echo (isset($context["help_affiliate_approval"]) ? $context["help_affiliate_approval"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate_approval"]) ? $context["entry_affiliate_approval"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 954
        if ((isset($context["config_affiliate_approval"]) ? $context["config_affiliate_approval"] : null)) {
            // line 955
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 956
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 958
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 959
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 960
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 961
        if ( !(isset($context["config_affiliate_approval"]) ? $context["config_affiliate_approval"] : null)) {
            // line 962
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 963
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 965
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 966
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 967
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 971
        echo (isset($context["help_affiliate_auto"]) ? $context["help_affiliate_auto"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate_auto"]) ? $context["entry_affiliate_auto"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 973
        if ((isset($context["config_affiliate_auto"]) ? $context["config_affiliate_auto"] : null)) {
            // line 974
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 975
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 977
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 978
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 979
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 980
        if ( !(isset($context["config_affiliate_auto"]) ? $context["config_affiliate_auto"] : null)) {
            // line 981
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 982
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 984
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 985
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 986
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 990
        echo (isset($context["help_affiliate_commission"]) ? $context["help_affiliate_commission"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate_commission"]) ? $context["entry_affiliate_commission"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 992
        echo (isset($context["config_affiliate_commission"]) ? $context["config_affiliate_commission"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_affiliate_commission"]) ? $context["entry_affiliate_commission"] : null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 996
        echo (isset($context["help_affiliate"]) ? $context["help_affiliate"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate"]) ? $context["entry_affiliate"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 999
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 1001
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1002
            echo "                      ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_affiliate_id"]) ? $context["config_affiliate_id"] : null))) {
                // line 1003
                echo "                      
                      <option value=\"";
                // line 1004
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            } else {
                // line 1007
                echo "                      
                      <option value=\"";
                // line 1008
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            }
            // line 1011
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1012
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1018
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 1020
        echo (isset($context["help_return"]) ? $context["help_return"] : null);
        echo "\">";
        echo (isset($context["entry_return"]) ? $context["entry_return"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 1023
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 1025
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1026
            echo "                      ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_return_id"]) ? $context["config_return_id"] : null))) {
                // line 1027
                echo "                      
                      <option value=\"";
                // line 1028
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            } else {
                // line 1031
                echo "                      
                      <option value=\"";
                // line 1032
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            }
            // line 1035
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1036
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 1041
        echo (isset($context["help_return_status"]) ? $context["help_return_status"] : null);
        echo "\">";
        echo (isset($context["entry_return_status"]) ? $context["entry_return_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">
                      
                      ";
        // line 1045
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["return_statuses"]) ? $context["return_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 1046
            echo "                      ";
            if (($this->getAttribute($context["return_status"], "return_status_id", array()) == (isset($context["config_return_status_id"]) ? $context["config_return_status_id"] : null))) {
                // line 1047
                echo "                      
                      <option value=\"";
                // line 1048
                echo $this->getAttribute($context["return_status"], "return_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["return_status"], "name", array());
                echo "</option>
                      
                      ";
            } else {
                // line 1051
                echo "                      
                      <option value=\"";
                // line 1052
                echo $this->getAttribute($context["return_status"], "return_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["return_status"], "name", array());
                echo "</option>
                      
                      ";
            }
            // line 1055
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1056
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1062
        echo (isset($context["text_captcha"]) ? $context["text_captcha"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1064
        echo (isset($context["help_captcha"]) ? $context["help_captcha"] : null);
        echo "\">";
        echo (isset($context["entry_captcha"]) ? $context["entry_captcha"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 1067
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 1069
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["captchas"]) ? $context["captchas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1070
            echo "                      ";
            if (($this->getAttribute($context["captcha"], "value", array()) == (isset($context["config_captcha"]) ? $context["config_captcha"] : null))) {
                // line 1071
                echo "                      
                      <option value=\"";
                // line 1072
                echo $this->getAttribute($context["captcha"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["captcha"], "text", array());
                echo "</option>
                      
                      ";
            } else {
                // line 1075
                echo "                      
                      <option value=\"";
                // line 1076
                echo $this->getAttribute($context["captcha"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["captcha"], "text", array());
                echo "</option>
                      
                      ";
            }
            // line 1079
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1080
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1085
        echo (isset($context["entry_captcha_page"]) ? $context["entry_captcha_page"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1087
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["captcha_pages"]) ? $context["captcha_pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1088
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1089
            if (twig_in_filter($this->getAttribute($context["captcha_page"], "value", array()), (isset($context["config_captcha_page"]) ? $context["config_captcha_page"] : null))) {
                // line 1090
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo $this->getAttribute($context["captcha_page"], "value", array());
                echo "\" checked=\"checked\" />
                          ";
                // line 1091
                echo $this->getAttribute($context["captcha_page"], "text", array());
                echo "
                          ";
            } else {
                // line 1093
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo $this->getAttribute($context["captcha_page"], "value", array());
                echo "\" />
                          ";
                // line 1094
                echo $this->getAttribute($context["captcha_page"], "text", array());
                echo "
                          ";
            }
            // line 1095
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1097
        echo " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1104
        echo (isset($context["entry_logo"]) ? $context["entry_logo"] : null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1105
        echo (isset($context["logo"]) ? $context["logo"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1106
        echo (isset($context["config_logo"]) ? $context["config_logo"] : null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1110
        echo (isset($context["help_icon"]) ? $context["help_icon"] : null);
        echo "\">";
        echo (isset($context["entry_icon"]) ? $context["entry_icon"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1111
        echo (isset($context["icon"]) ? $context["icon"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1112
        echo (isset($context["config_icon"]) ? $context["config_icon"] : null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1118
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1120
        echo (isset($context["help_mail_engine"]) ? $context["help_mail_engine"] : null);
        echo "\">";
        echo (isset($context["entry_mail_engine"]) ? $context["entry_mail_engine"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">
                      
                      ";
        // line 1124
        if (((isset($context["config_mail_engine"]) ? $context["config_mail_engine"] : null) == "mail")) {
            // line 1125
            echo "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 1126
            echo (isset($context["text_mail"]) ? $context["text_mail"] : null);
            echo "</option>
                      
                      ";
        } else {
            // line 1129
            echo "                      
                      <option value=\"mail\">";
            // line 1130
            echo (isset($context["text_mail"]) ? $context["text_mail"] : null);
            echo "</option>
                      
                      ";
        }
        // line 1133
        echo "                      ";
        if (((isset($context["config_mail_engine"]) ? $context["config_mail_engine"] : null) == "smtp")) {
            // line 1134
            echo "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 1135
            echo (isset($context["text_smtp"]) ? $context["text_smtp"] : null);
            echo "</option>
                      
                      ";
        } else {
            // line 1138
            echo "                      
                      <option value=\"smtp\">";
            // line 1139
            echo (isset($context["text_smtp"]) ? $context["text_smtp"] : null);
            echo "</option>
                      
                      ";
        }
        // line 1142
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1147
        echo (isset($context["help_mail_parameter"]) ? $context["help_mail_parameter"] : null);
        echo "\">";
        echo (isset($context["entry_mail_parameter"]) ? $context["entry_mail_parameter"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1149
        echo (isset($context["config_mail_parameter"]) ? $context["config_mail_parameter"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_parameter"]) ? $context["entry_mail_parameter"] : null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1153
        echo (isset($context["help_mail_smtp_hostname"]) ? $context["help_mail_smtp_hostname"] : null);
        echo "\">";
        echo (isset($context["entry_mail_smtp_hostname"]) ? $context["entry_mail_smtp_hostname"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1155
        echo (isset($context["config_mail_smtp_hostname"]) ? $context["config_mail_smtp_hostname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_hostname"]) ? $context["entry_mail_smtp_hostname"] : null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1159
        echo (isset($context["entry_mail_smtp_username"]) ? $context["entry_mail_smtp_username"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1161
        echo (isset($context["config_mail_smtp_username"]) ? $context["config_mail_smtp_username"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_username"]) ? $context["entry_mail_smtp_username"] : null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1165
        echo (isset($context["help_mail_smtp_password"]) ? $context["help_mail_smtp_password"] : null);
        echo "\">";
        echo (isset($context["entry_mail_smtp_password"]) ? $context["entry_mail_smtp_password"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1167
        echo (isset($context["config_mail_smtp_password"]) ? $context["config_mail_smtp_password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_password"]) ? $context["entry_mail_smtp_password"] : null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1171
        echo (isset($context["entry_mail_smtp_port"]) ? $context["entry_mail_smtp_port"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1173
        echo (isset($context["config_mail_smtp_port"]) ? $context["config_mail_smtp_port"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_port"]) ? $context["entry_mail_smtp_port"] : null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1177
        echo (isset($context["entry_mail_smtp_timeout"]) ? $context["entry_mail_smtp_timeout"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1179
        echo (isset($context["config_mail_smtp_timeout"]) ? $context["config_mail_smtp_timeout"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_timeout"]) ? $context["entry_mail_smtp_timeout"] : null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1184
        echo (isset($context["text_mail_alert"]) ? $context["text_mail_alert"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1186
        echo (isset($context["help_mail_alert"]) ? $context["help_mail_alert"] : null);
        echo "\">";
        echo (isset($context["entry_mail_alert"]) ? $context["entry_mail_alert"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mail_alerts"]) ? $context["mail_alerts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1189
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1190
            if (twig_in_filter($this->getAttribute($context["mail_alert"], "value", array()), (isset($context["config_mail_alert"]) ? $context["config_mail_alert"] : null))) {
                // line 1191
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo $this->getAttribute($context["mail_alert"], "value", array());
                echo "\" checked=\"checked\" />
                          ";
                // line 1192
                echo $this->getAttribute($context["mail_alert"], "text", array());
                echo "
                          ";
            } else {
                // line 1194
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo $this->getAttribute($context["mail_alert"], "value", array());
                echo "\" />
                          ";
                // line 1195
                echo $this->getAttribute($context["mail_alert"], "text", array());
                echo "
                          ";
            }
            // line 1196
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1198
        echo " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1202
        echo (isset($context["help_mail_alert_email"]) ? $context["help_mail_alert_email"] : null);
        echo "\">";
        echo (isset($context["entry_mail_alert_email"]) ? $context["entry_mail_alert_email"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1204
        echo (isset($context["entry_mail_alert_email"]) ? $context["entry_mail_alert_email"] : null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo (isset($context["config_mail_alert_email"]) ? $context["config_mail_alert_email"] : null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>

        <!--START OVICKO MULTISELLER-->
\t\t\t<div class=\"tab-pane\" id=\"tab-seller\"> 
\t\t\t <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 1213
        echo (isset($context["entry_default_seller"]) ? $context["entry_default_seller"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select name=\"config_defaultseller_id\" class=\"form-control\">
\t\t\t\t  ";
        // line 1216
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sellers"]) ? $context["sellers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["seller"]) {
            // line 1217
            echo "\t\t\t\t";
            if (($this->getAttribute($context["seller"], "seller_id", array()) == (isset($context["config_defaultseller_id"]) ? $context["config_defaultseller_id"] : null))) {
                // line 1218
                echo "\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["seller"], "seller_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["seller"], "username", array());
                echo "</option>
\t\t\t\t";
            } else {
                // line 1220
                echo "\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["seller"], "seller_id", array());
                echo "\">";
                echo $this->getAttribute($context["seller"], "username", array());
                echo "</option>
\t\t\t\t";
            }
            // line 1222
            echo "\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1223
        echo "\t\t\t\t</select>
\t\t\t  </div>
\t\t\t  </div>
\t\t\t   <div class=\"form-group\" style=\"display:none\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 1227
        echo (isset($context["entry_seller_autoapprove"]) ? $context["entry_seller_autoapprove"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">";
        // line 1228
        if ((isset($context["config_seller_autoapprove"]) ? $context["config_seller_autoapprove"] : null)) {
            // line 1229
            echo "            <input type=\"radio\" name=\"config_seller_autoapprove\" value=\"1\" checked=\"checked\" class=\"form-control1\"/>
            ";
            // line 1230
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
            <input type=\"radio\" name=\"config_seller_autoapprove\" value=\"0\" class=\"form-control1\"/>
            ";
            // line 1232
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
            ";
        } else {
            // line 1234
            echo "            <input type=\"radio\" name=\"config_seller_autoapprove\" value=\"1\" class=\"form-control1\"/>
            ";
            // line 1235
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
            <input type=\"radio\" name=\"config_seller_autoapprove\" value=\"0\" checked=\"checked\" class=\"form-control1\"/>
            ";
            // line 1237
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
            ";
        }
        // line 1238
        echo "</div>
\t\t\t </div>
\t\t\t<div class=\"form-group\" style=\"display:none\">
\t\t\t   <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 1241
        echo (isset($context["entry_product_autoapprove"]) ? $context["entry_product_autoapprove"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">";
        // line 1242
        if ((isset($context["config_product_autoapprove"]) ? $context["config_product_autoapprove"] : null)) {
            // line 1243
            echo "            <input type=\"radio\" name=\"config_product_autoapprove\" value=\"1\" checked=\"checked\" class=\"form-control1\"/>
            ";
            // line 1244
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
            <input type=\"radio\" name=\"config_product_autoapprove\" value=\"0\" class=\"form-control1\"/>
            ";
            // line 1246
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
            ";
        } else {
            // line 1248
            echo "            <input type=\"radio\" name=\"config_product_autoapprove\" value=\"1\" class=\"form-control1\"/>
            ";
            // line 1249
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
            <input type=\"radio\" name=\"config_product_autoapprove\" value=\"0\" checked=\"checked\" class=\"form-control1\"/>
            ";
            // line 1251
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
            ";
        }
        // line 1252
        echo "</div>
\t\t\t  </div>
\t\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 1255
        echo (isset($context["entry_saccount_terms"]) ? $context["entry_saccount_terms"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\"><select name=\"config_selleraccount_id\" class=\"form-control\">
\t\t\t<option value=\"0\">";
        // line 1257
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
\t\t\t";
        // line 1258
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1259
            echo "\t\t\t";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_selleraccount_id"]) ? $context["config_selleraccount_id"] : null))) {
                // line 1260
                echo "\t\t\t<option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
\t\t\t";
            } else {
                // line 1262
                echo "\t\t\t<option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
\t\t\t";
            }
            // line 1264
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1265
        echo "\t\t\t</select></div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 1268
        echo (isset($context["entry_default_commission"]) ? $context["entry_default_commission"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t<select name=\"config_sellercommission_id\" id=\"input-layout\" class=\"form-control\">
\t\t\t";
        // line 1271
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commissions"]) ? $context["commissions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["commission"]) {
            // line 1272
            echo "\t\t\t";
            if (($this->getAttribute($context["commission"], "commission_id", array()) == (isset($context["config_sellercommission_id"]) ? $context["config_sellercommission_id"] : null))) {
                // line 1273
                echo "\t\t\t<option value=\"";
                echo $this->getAttribute($context["commission"], "commission_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["commission"], "name", array());
                echo "</option>
\t\t\t";
            } else {
                // line 1275
                echo "\t\t\t<option value=\"";
                echo $this->getAttribute($context["commission"], "commission_id", array());
                echo "\">";
                echo $this->getAttribute($context["commission"], "name", array());
                echo "</option>
\t\t\t";
            }
            // line 1277
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1278
        echo "\t\t\t</select>
\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 1282
        echo (isset($context["entry_default_category"]) ? $context["entry_default_category"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1284
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 1285
            echo "\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label> ";
            // line 1286
            if (twig_in_filter($this->getAttribute($context["category"], "category_id", array()), (isset($context["config_product_category"]) ? $context["config_product_category"] : null))) {
                // line 1287
                echo "\t\t\t\t\t<input type=\"checkbox\" name=\"config_product_category[]\" value=\"";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\" checked=\"checked\" />
\t\t\t\t\t";
                // line 1288
                echo $this->getAttribute($context["category"], "name", array());
                echo "
\t\t\t\t\t";
            } else {
                // line 1290
                echo "\t\t\t\t\t<input type=\"checkbox\" name=\"config_product_category[]\" value=\"";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\" />
\t\t\t\t\t";
                // line 1291
                echo $this->getAttribute($context["category"], "name", array());
                echo "
\t\t\t\t\t";
            }
            // line 1292
            echo " </label>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1294
        echo " </div>
               <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\">";
        // line 1295
        echo (isset($context["text_select_all"]) ? $context["text_select_all"] : null);
        echo "</a> / <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\">";
        echo (isset($context["text_unselect_all"]) ? $context["text_unselect_all"] : null);
        echo "</a>
\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 1299
        echo (isset($context["text_orderstatus"]) ? $context["text_orderstatus"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1301
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 1302
            echo "\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label> ";
            // line 1303
            if (twig_in_filter($this->getAttribute($context["order_status"], "order_status_id", array()), (isset($context["config_seller_orderstatuses"]) ? $context["config_seller_orderstatuses"] : null))) {
                // line 1304
                echo "\t\t\t\t\t<input type=\"checkbox\" name=\"config_seller_orderstatuses[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" checked=\"checked\" />
\t\t\t\t\t";
                // line 1305
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
\t\t\t\t\t";
            } else {
                // line 1307
                echo "\t\t\t\t\t<input type=\"checkbox\" name=\"config_seller_orderstatuses[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" />
\t\t\t\t\t";
                // line 1308
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
\t\t\t\t\t";
            }
            // line 1309
            echo " </label>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1311
        echo " </div>
\t\t\t\t\t <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\">";
        // line 1312
        echo (isset($context["text_select_all"]) ? $context["text_select_all"] : null);
        echo "</a> / <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\">";
        echo (isset($context["text_unselect_all"]) ? $context["text_unselect_all"] : null);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 1316
        echo (isset($context["entry_eligible_payment"]) ? $context["entry_eligible_payment"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1318
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 1319
            echo "\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label> ";
            // line 1320
            if (twig_in_filter($this->getAttribute($context["order_status"], "order_status_id", array()), (isset($context["config_seller_payments"]) ? $context["config_seller_payments"] : null))) {
                // line 1321
                echo "\t\t\t\t\t<input type=\"checkbox\" name=\"config_seller_payments[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" checked=\"checked\" />
\t\t\t\t\t";
                // line 1322
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
\t\t\t\t\t";
            } else {
                // line 1324
                echo "\t\t\t\t\t<input type=\"checkbox\" name=\"config_seller_payments[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" />
\t\t\t\t\t";
                // line 1325
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
\t\t\t\t\t";
            }
            // line 1326
            echo " </label>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1328
        echo " </div>
\t\t\t\t\t <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\">";
        // line 1329
        echo (isset($context["text_select_all"]) ? $context["text_select_all"] : null);
        echo "</a> / <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\">";
        echo (isset($context["text_unselect_all"]) ? $context["text_unselect_all"] : null);
        echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t</div>
\t\t<!--END OVICKO MULTISELLER-->
\t\t
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1337
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1339
        echo (isset($context["help_maintenance"]) ? $context["help_maintenance"] : null);
        echo "\">";
        echo (isset($context["entry_maintenance"]) ? $context["entry_maintenance"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1341
        if ((isset($context["config_maintenance"]) ? $context["config_maintenance"] : null)) {
            // line 1342
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1343
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1345
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1346
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1347
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1348
        if ( !(isset($context["config_maintenance"]) ? $context["config_maintenance"] : null)) {
            // line 1349
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1350
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1352
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1353
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1354
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1358
        echo (isset($context["help_seo_url"]) ? $context["help_seo_url"] : null);
        echo "\">";
        echo (isset($context["entry_seo_url"]) ? $context["entry_seo_url"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1360
        if ((isset($context["config_seo_url"]) ? $context["config_seo_url"] : null)) {
            // line 1361
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1362
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1364
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1365
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1366
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1367
        if ( !(isset($context["config_seo_url"]) ? $context["config_seo_url"] : null)) {
            // line 1368
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1369
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1371
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1372
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1373
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1377
        echo (isset($context["help_robots"]) ? $context["help_robots"] : null);
        echo "\">";
        echo (isset($context["entry_robots"]) ? $context["entry_robots"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1379
        echo (isset($context["entry_robots"]) ? $context["entry_robots"] : null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo (isset($context["config_robots"]) ? $context["config_robots"] : null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1383
        echo (isset($context["help_compression"]) ? $context["help_compression"] : null);
        echo "\">";
        echo (isset($context["entry_compression"]) ? $context["entry_compression"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1385
        echo (isset($context["config_compression"]) ? $context["config_compression"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_compression"]) ? $context["entry_compression"] : null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1390
        echo (isset($context["text_security"]) ? $context["text_security"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1392
        echo (isset($context["help_secure"]) ? $context["help_secure"] : null);
        echo "\">";
        echo (isset($context["entry_secure"]) ? $context["entry_secure"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1394
        if ((isset($context["config_secure"]) ? $context["config_secure"] : null)) {
            // line 1395
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1396
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1398
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1399
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1400
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1401
        if ( !(isset($context["config_secure"]) ? $context["config_secure"] : null)) {
            // line 1402
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1403
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1405
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1406
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1407
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1411
        echo (isset($context["help_password"]) ? $context["help_password"] : null);
        echo "\">";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1413
        if ((isset($context["config_password"]) ? $context["config_password"] : null)) {
            // line 1414
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1415
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1417
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1418
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1419
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1420
        if ( !(isset($context["config_password"]) ? $context["config_password"] : null)) {
            // line 1421
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1422
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1424
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1425
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1426
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1430
        echo (isset($context["help_shared"]) ? $context["help_shared"] : null);
        echo "\">";
        echo (isset($context["entry_shared"]) ? $context["entry_shared"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1432
        if ((isset($context["config_shared"]) ? $context["config_shared"] : null)) {
            // line 1433
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1434
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1436
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1437
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1438
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1439
        if ( !(isset($context["config_shared"]) ? $context["config_shared"] : null)) {
            // line 1440
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1441
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1443
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1444
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1445
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1449
        echo (isset($context["help_encryption"]) ? $context["help_encryption"] : null);
        echo "\">";
        echo (isset($context["entry_encryption"]) ? $context["entry_encryption"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1451
        echo (isset($context["entry_encryption"]) ? $context["entry_encryption"] : null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo (isset($context["config_encryption"]) ? $context["config_encryption"] : null);
        echo "</textarea>
                    ";
        // line 1452
        if ((isset($context["error_encryption"]) ? $context["error_encryption"] : null)) {
            // line 1453
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_encryption"]) ? $context["error_encryption"] : null);
            echo "</div>
                    ";
        }
        // line 1454
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1458
        echo (isset($context["text_upload"]) ? $context["text_upload"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1460
        echo (isset($context["help_file_max_size"]) ? $context["help_file_max_size"] : null);
        echo "\">";
        echo (isset($context["entry_file_max_size"]) ? $context["entry_file_max_size"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1462
        echo (isset($context["config_file_max_size"]) ? $context["config_file_max_size"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_file_max_size"]) ? $context["entry_file_max_size"] : null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1466
        echo (isset($context["help_file_ext_allowed"]) ? $context["help_file_ext_allowed"] : null);
        echo "\">";
        echo (isset($context["entry_file_ext_allowed"]) ? $context["entry_file_ext_allowed"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1468
        echo (isset($context["entry_file_ext_allowed"]) ? $context["entry_file_ext_allowed"] : null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo (isset($context["config_file_ext_allowed"]) ? $context["config_file_ext_allowed"] : null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1472
        echo (isset($context["help_file_mime_allowed"]) ? $context["help_file_mime_allowed"] : null);
        echo "\">";
        echo (isset($context["entry_file_mime_allowed"]) ? $context["entry_file_mime_allowed"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1474
        echo (isset($context["entry_file_mime_allowed"]) ? $context["entry_file_mime_allowed"] : null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo (isset($context["config_file_mime_allowed"]) ? $context["config_file_mime_allowed"] : null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1479
        echo (isset($context["text_error"]) ? $context["text_error"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1481
        echo (isset($context["entry_error_display"]) ? $context["entry_error_display"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1483
        if ((isset($context["config_error_display"]) ? $context["config_error_display"] : null)) {
            // line 1484
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1485
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1487
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1488
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1489
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1490
        if ( !(isset($context["config_error_display"]) ? $context["config_error_display"] : null)) {
            // line 1491
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1492
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1494
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1495
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1496
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1500
        echo (isset($context["entry_error_log"]) ? $context["entry_error_log"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1502
        if ((isset($context["config_error_log"]) ? $context["config_error_log"] : null)) {
            // line 1503
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1504
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1506
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1507
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1508
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1509
        if ( !(isset($context["config_error_log"]) ? $context["config_error_log"] : null)) {
            // line 1510
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1511
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1513
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1514
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1515
        echo "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1519
        echo (isset($context["entry_error_filename"]) ? $context["entry_error_filename"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1521
        echo (isset($context["config_error_filename"]) ? $context["config_error_filename"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_error_filename"]) ? $context["entry_error_filename"] : null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1522
        if ((isset($context["error_log"]) ? $context["error_log"] : null)) {
            // line 1523
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_log"]) ? $context["error_log"] : null);
            echo "</div>
                    ";
        }
        // line 1524
        echo " </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1536
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1558
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1567
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1573
        echo (isset($context["config_zone_id"]) ? $context["config_zone_id"] : null);
        echo "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1580
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>
";
        // line 1595
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4125 => 1595,  4107 => 1580,  4097 => 1573,  4088 => 1567,  4076 => 1558,  4051 => 1536,  4037 => 1524,  4031 => 1523,  4029 => 1522,  4023 => 1521,  4018 => 1519,  4012 => 1515,  4007 => 1514,  4004 => 1513,  3999 => 1511,  3996 => 1510,  3994 => 1509,  3991 => 1508,  3986 => 1507,  3983 => 1506,  3978 => 1504,  3975 => 1503,  3973 => 1502,  3968 => 1500,  3962 => 1496,  3957 => 1495,  3954 => 1494,  3949 => 1492,  3946 => 1491,  3944 => 1490,  3941 => 1489,  3936 => 1488,  3933 => 1487,  3928 => 1485,  3925 => 1484,  3923 => 1483,  3918 => 1481,  3913 => 1479,  3903 => 1474,  3896 => 1472,  3887 => 1468,  3880 => 1466,  3871 => 1462,  3864 => 1460,  3859 => 1458,  3853 => 1454,  3847 => 1453,  3845 => 1452,  3839 => 1451,  3832 => 1449,  3826 => 1445,  3821 => 1444,  3818 => 1443,  3813 => 1441,  3810 => 1440,  3808 => 1439,  3805 => 1438,  3800 => 1437,  3797 => 1436,  3792 => 1434,  3789 => 1433,  3787 => 1432,  3780 => 1430,  3774 => 1426,  3769 => 1425,  3766 => 1424,  3761 => 1422,  3758 => 1421,  3756 => 1420,  3753 => 1419,  3748 => 1418,  3745 => 1417,  3740 => 1415,  3737 => 1414,  3735 => 1413,  3728 => 1411,  3722 => 1407,  3717 => 1406,  3714 => 1405,  3709 => 1403,  3706 => 1402,  3704 => 1401,  3701 => 1400,  3696 => 1399,  3693 => 1398,  3688 => 1396,  3685 => 1395,  3683 => 1394,  3676 => 1392,  3671 => 1390,  3661 => 1385,  3654 => 1383,  3645 => 1379,  3638 => 1377,  3632 => 1373,  3627 => 1372,  3624 => 1371,  3619 => 1369,  3616 => 1368,  3614 => 1367,  3611 => 1366,  3606 => 1365,  3603 => 1364,  3598 => 1362,  3595 => 1361,  3593 => 1360,  3586 => 1358,  3580 => 1354,  3575 => 1353,  3572 => 1352,  3567 => 1350,  3564 => 1349,  3562 => 1348,  3559 => 1347,  3554 => 1346,  3551 => 1345,  3546 => 1343,  3543 => 1342,  3541 => 1341,  3534 => 1339,  3529 => 1337,  3516 => 1329,  3513 => 1328,  3505 => 1326,  3500 => 1325,  3495 => 1324,  3490 => 1322,  3485 => 1321,  3483 => 1320,  3480 => 1319,  3476 => 1318,  3471 => 1316,  3462 => 1312,  3459 => 1311,  3451 => 1309,  3446 => 1308,  3441 => 1307,  3436 => 1305,  3431 => 1304,  3429 => 1303,  3426 => 1302,  3422 => 1301,  3417 => 1299,  3408 => 1295,  3405 => 1294,  3397 => 1292,  3392 => 1291,  3387 => 1290,  3382 => 1288,  3377 => 1287,  3375 => 1286,  3372 => 1285,  3368 => 1284,  3363 => 1282,  3357 => 1278,  3351 => 1277,  3343 => 1275,  3335 => 1273,  3332 => 1272,  3328 => 1271,  3322 => 1268,  3317 => 1265,  3311 => 1264,  3303 => 1262,  3295 => 1260,  3292 => 1259,  3288 => 1258,  3284 => 1257,  3279 => 1255,  3274 => 1252,  3269 => 1251,  3264 => 1249,  3261 => 1248,  3256 => 1246,  3251 => 1244,  3248 => 1243,  3246 => 1242,  3242 => 1241,  3237 => 1238,  3232 => 1237,  3227 => 1235,  3224 => 1234,  3219 => 1232,  3214 => 1230,  3211 => 1229,  3209 => 1228,  3205 => 1227,  3199 => 1223,  3193 => 1222,  3185 => 1220,  3177 => 1218,  3174 => 1217,  3170 => 1216,  3164 => 1213,  3150 => 1204,  3143 => 1202,  3137 => 1198,  3129 => 1196,  3124 => 1195,  3119 => 1194,  3114 => 1192,  3109 => 1191,  3107 => 1190,  3104 => 1189,  3100 => 1188,  3093 => 1186,  3088 => 1184,  3078 => 1179,  3073 => 1177,  3064 => 1173,  3059 => 1171,  3050 => 1167,  3043 => 1165,  3034 => 1161,  3029 => 1159,  3020 => 1155,  3013 => 1153,  3004 => 1149,  2997 => 1147,  2990 => 1142,  2984 => 1139,  2981 => 1138,  2975 => 1135,  2972 => 1134,  2969 => 1133,  2963 => 1130,  2960 => 1129,  2954 => 1126,  2951 => 1125,  2949 => 1124,  2940 => 1120,  2935 => 1118,  2926 => 1112,  2920 => 1111,  2914 => 1110,  2907 => 1106,  2901 => 1105,  2897 => 1104,  2888 => 1097,  2880 => 1095,  2875 => 1094,  2870 => 1093,  2865 => 1091,  2860 => 1090,  2858 => 1089,  2855 => 1088,  2851 => 1087,  2846 => 1085,  2839 => 1080,  2833 => 1079,  2825 => 1076,  2822 => 1075,  2814 => 1072,  2811 => 1071,  2808 => 1070,  2804 => 1069,  2799 => 1067,  2791 => 1064,  2786 => 1062,  2778 => 1056,  2772 => 1055,  2764 => 1052,  2761 => 1051,  2753 => 1048,  2750 => 1047,  2747 => 1046,  2743 => 1045,  2734 => 1041,  2727 => 1036,  2721 => 1035,  2713 => 1032,  2710 => 1031,  2702 => 1028,  2699 => 1027,  2696 => 1026,  2692 => 1025,  2687 => 1023,  2679 => 1020,  2674 => 1018,  2666 => 1012,  2660 => 1011,  2652 => 1008,  2649 => 1007,  2641 => 1004,  2638 => 1003,  2635 => 1002,  2631 => 1001,  2626 => 999,  2618 => 996,  2609 => 992,  2602 => 990,  2596 => 986,  2591 => 985,  2588 => 984,  2583 => 982,  2580 => 981,  2578 => 980,  2575 => 979,  2570 => 978,  2567 => 977,  2562 => 975,  2559 => 974,  2557 => 973,  2550 => 971,  2544 => 967,  2539 => 966,  2536 => 965,  2531 => 963,  2528 => 962,  2526 => 961,  2523 => 960,  2518 => 959,  2515 => 958,  2510 => 956,  2507 => 955,  2505 => 954,  2498 => 952,  2491 => 947,  2485 => 946,  2477 => 943,  2474 => 942,  2466 => 939,  2463 => 938,  2460 => 937,  2456 => 936,  2449 => 932,  2444 => 930,  2437 => 925,  2432 => 924,  2429 => 923,  2424 => 921,  2421 => 920,  2419 => 919,  2416 => 918,  2411 => 917,  2408 => 916,  2403 => 914,  2400 => 913,  2398 => 912,  2391 => 910,  2385 => 906,  2380 => 905,  2377 => 904,  2372 => 902,  2369 => 901,  2367 => 900,  2364 => 899,  2359 => 898,  2356 => 897,  2351 => 895,  2348 => 894,  2346 => 893,  2339 => 891,  2333 => 887,  2328 => 886,  2325 => 885,  2320 => 883,  2317 => 882,  2315 => 881,  2312 => 880,  2307 => 879,  2304 => 878,  2299 => 876,  2296 => 875,  2294 => 874,  2287 => 872,  2282 => 870,  2274 => 864,  2268 => 863,  2260 => 860,  2257 => 859,  2249 => 856,  2246 => 855,  2243 => 854,  2239 => 853,  2234 => 851,  2226 => 848,  2219 => 843,  2213 => 842,  2205 => 839,  2202 => 838,  2194 => 835,  2191 => 834,  2188 => 833,  2184 => 832,  2175 => 828,  2170 => 825,  2164 => 824,  2162 => 823,  2159 => 822,  2151 => 820,  2146 => 819,  2141 => 818,  2136 => 816,  2131 => 815,  2129 => 814,  2126 => 813,  2122 => 812,  2115 => 810,  2110 => 807,  2104 => 806,  2102 => 805,  2099 => 804,  2091 => 802,  2086 => 801,  2081 => 800,  2076 => 798,  2071 => 797,  2069 => 796,  2066 => 795,  2062 => 794,  2055 => 792,  2048 => 787,  2042 => 786,  2034 => 783,  2031 => 782,  2023 => 779,  2020 => 778,  2017 => 777,  2013 => 776,  2004 => 772,  1997 => 767,  1991 => 766,  1983 => 763,  1980 => 762,  1972 => 759,  1969 => 758,  1966 => 757,  1962 => 756,  1957 => 754,  1949 => 751,  1943 => 747,  1938 => 746,  1935 => 745,  1930 => 743,  1927 => 742,  1925 => 741,  1922 => 740,  1917 => 739,  1914 => 738,  1909 => 736,  1906 => 735,  1904 => 734,  1897 => 732,  1891 => 728,  1886 => 727,  1883 => 726,  1878 => 724,  1875 => 723,  1873 => 722,  1870 => 721,  1865 => 720,  1862 => 719,  1857 => 717,  1854 => 716,  1852 => 715,  1845 => 713,  1836 => 709,  1829 => 707,  1824 => 705,  1816 => 699,  1810 => 698,  1802 => 695,  1799 => 694,  1791 => 691,  1788 => 690,  1785 => 689,  1781 => 688,  1776 => 686,  1768 => 683,  1763 => 680,  1757 => 679,  1755 => 678,  1749 => 677,  1742 => 675,  1736 => 671,  1731 => 670,  1728 => 669,  1723 => 667,  1720 => 666,  1718 => 665,  1715 => 664,  1710 => 663,  1707 => 662,  1702 => 660,  1699 => 659,  1697 => 658,  1690 => 656,  1685 => 653,  1679 => 652,  1676 => 651,  1668 => 648,  1663 => 647,  1658 => 646,  1653 => 644,  1648 => 643,  1646 => 642,  1643 => 641,  1639 => 640,  1633 => 639,  1626 => 634,  1620 => 633,  1612 => 630,  1609 => 629,  1601 => 626,  1598 => 625,  1595 => 624,  1591 => 623,  1582 => 619,  1576 => 615,  1571 => 614,  1568 => 613,  1563 => 611,  1560 => 610,  1558 => 609,  1555 => 608,  1550 => 607,  1547 => 606,  1542 => 604,  1539 => 603,  1537 => 602,  1532 => 600,  1526 => 596,  1521 => 595,  1518 => 594,  1513 => 592,  1510 => 591,  1508 => 590,  1505 => 589,  1500 => 588,  1497 => 587,  1492 => 585,  1489 => 584,  1487 => 583,  1480 => 581,  1474 => 577,  1469 => 576,  1466 => 575,  1461 => 573,  1458 => 572,  1456 => 571,  1453 => 570,  1448 => 569,  1445 => 568,  1440 => 566,  1437 => 565,  1435 => 564,  1428 => 562,  1423 => 560,  1415 => 554,  1409 => 551,  1406 => 550,  1400 => 547,  1397 => 546,  1394 => 545,  1388 => 542,  1385 => 541,  1379 => 538,  1376 => 537,  1374 => 536,  1369 => 534,  1361 => 531,  1354 => 526,  1348 => 523,  1345 => 522,  1339 => 519,  1336 => 518,  1333 => 517,  1327 => 514,  1324 => 513,  1318 => 510,  1315 => 509,  1313 => 508,  1308 => 506,  1300 => 503,  1294 => 499,  1289 => 498,  1286 => 497,  1281 => 495,  1278 => 494,  1276 => 493,  1273 => 492,  1268 => 491,  1265 => 490,  1260 => 488,  1257 => 487,  1255 => 486,  1250 => 484,  1245 => 482,  1239 => 478,  1233 => 477,  1231 => 476,  1225 => 475,  1218 => 473,  1213 => 470,  1207 => 469,  1205 => 468,  1199 => 467,  1192 => 465,  1187 => 463,  1180 => 458,  1175 => 457,  1172 => 456,  1167 => 454,  1164 => 453,  1162 => 452,  1159 => 451,  1154 => 450,  1151 => 449,  1146 => 447,  1143 => 446,  1141 => 445,  1134 => 443,  1128 => 439,  1123 => 438,  1120 => 437,  1115 => 435,  1112 => 434,  1110 => 433,  1107 => 432,  1102 => 431,  1099 => 430,  1094 => 428,  1091 => 427,  1089 => 426,  1082 => 424,  1077 => 422,  1071 => 418,  1065 => 417,  1063 => 416,  1057 => 415,  1050 => 413,  1044 => 409,  1039 => 408,  1036 => 407,  1031 => 405,  1028 => 404,  1026 => 403,  1023 => 402,  1018 => 401,  1015 => 400,  1010 => 398,  1007 => 397,  1005 => 396,  998 => 394,  993 => 392,  984 => 385,  978 => 384,  970 => 381,  967 => 380,  959 => 377,  956 => 376,  953 => 375,  949 => 374,  942 => 370,  935 => 365,  929 => 364,  921 => 361,  918 => 360,  910 => 357,  907 => 356,  904 => 355,  900 => 354,  893 => 350,  887 => 346,  882 => 345,  879 => 344,  874 => 342,  871 => 341,  869 => 340,  866 => 339,  861 => 338,  858 => 337,  853 => 335,  850 => 334,  848 => 333,  841 => 331,  834 => 326,  828 => 325,  820 => 322,  817 => 321,  809 => 318,  806 => 317,  803 => 316,  799 => 315,  790 => 311,  783 => 306,  777 => 305,  769 => 302,  766 => 301,  758 => 298,  755 => 297,  752 => 296,  748 => 295,  741 => 291,  734 => 286,  728 => 285,  720 => 282,  717 => 281,  709 => 278,  706 => 277,  703 => 276,  699 => 275,  692 => 271,  682 => 264,  675 => 259,  669 => 258,  661 => 255,  658 => 254,  650 => 251,  647 => 250,  644 => 249,  640 => 248,  633 => 244,  628 => 241,  623 => 239,  615 => 237,  610 => 236,  605 => 235,  600 => 233,  595 => 232,  593 => 231,  590 => 230,  586 => 229,  580 => 228,  577 => 227,  575 => 226,  567 => 223,  560 => 221,  551 => 217,  544 => 215,  537 => 211,  531 => 210,  527 => 209,  518 => 205,  513 => 203,  508 => 200,  502 => 199,  500 => 198,  494 => 197,  489 => 195,  484 => 192,  478 => 191,  476 => 190,  470 => 189,  465 => 187,  456 => 183,  449 => 181,  444 => 178,  438 => 177,  436 => 176,  430 => 175,  425 => 173,  420 => 170,  414 => 169,  412 => 168,  406 => 167,  401 => 165,  396 => 162,  390 => 161,  388 => 160,  382 => 159,  377 => 157,  368 => 150,  362 => 149,  354 => 146,  351 => 145,  343 => 142,  340 => 141,  337 => 140,  333 => 139,  326 => 135,  318 => 129,  312 => 128,  304 => 125,  301 => 124,  293 => 121,  290 => 120,  287 => 119,  283 => 118,  276 => 114,  267 => 110,  262 => 108,  253 => 104,  248 => 102,  243 => 99,  237 => 98,  235 => 97,  229 => 96,  224 => 94,  213 => 86,  209 => 85,  202 => 81,  194 => 76,  190 => 75,  183 => 71,  176 => 67,  171 => 65,  162 => 61,  157 => 59,  148 => 55,  143 => 53,  132 => 45,  123 => 39,  119 => 38,  115 => 37,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  94 => 31,  88 => 28,  84 => 26,  76 => 22,  73 => 21,  65 => 17,  63 => 16,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" id="button-save" form="form-setting" data-toggle="tooltip" title="{{ button_save }}" disabled="disabled" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid"> {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-setting" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-store" data-toggle="tab">{{ tab_store }}</a></li>*/
/*             <li><a href="#tab-local" data-toggle="tab">{{ tab_local }}</a></li>*/
/*             <li><a href="#tab-option" data-toggle="tab">{{ tab_option }}</a></li>*/
/*             <li><a href="#tab-image" data-toggle="tab">{{ tab_image }}</a></li>*/
/*             <li><a href="#tab-mail" data-toggle="tab">{{ tab_mail }}</a></li>*/
/*             <li><a href="#tab-server" data-toggle="tab">{{ tab_server }}</a></li>*/
/* */
/* 			<li><a href="#tab-whatsapp" data-toggle="tab">Whatsapp Order</a></li>*/
/* 			*/
/* */
/*         <!--START OVICKO MULTISELLER-->*/
/* 		<li><a href="#tab-seller" data-toggle="tab">{{ tab_seller }}</a></li>*/
/* 		<!--END OVICKO MULTISELLER-->*/
/* 		*/
/*           </ul>*/
/*           <div class="tab-content">*/
/* */
/* 				<div class="tab-pane" id="tab-whatsapp">*/
/* 				 <div class="form-group">*/
/* 	                <label class="col-sm-2 control-label" for="input-meta-title">{{ entry_whatsappno }}</label>*/
/* 	                <div class="col-sm-10">*/
/* 	                  <input type="text" name="config_whatsapp_no" value="{{ config_whatsapp_no }}" placeholder="{{ config_whatsapp_no }}" id="input-meta-title" class="form-control" />*/
/* 	                </div>*/
/* 	              </div>*/
/* 	              <div class="form-group">*/
/* 	                <label class="col-sm-2 control-label" for="input-meta-title">{{ entry_whatsappno_buttontext }}</label>*/
/* 	                <div class="col-sm-10">*/
/* 	                  <input type="text" name="config_whatsapp_btntext" value="{{ config_whatsapp_btntext }}" placeholder="{{ config_whatsapp_btntext }}" id="input-meta-title" class="form-control" />*/
/* 	                </div>*/
/* 	              </div>*/
/* 	              <div class="form-group">*/
/* 	                <label class="col-sm-2 control-label" for="input-meta-title">{{ entry_whatsapp_message }}</label>*/
/* 	                <div class="col-sm-10">*/
/* 	                 <textarea name="config_whatsapp_msg" id="input-whatsapp-msg" class="form-control">{{ config_whatsapp_msg}}</textarea>	*/
/* 	                </div>*/
/* 	              </div>*/
/* 	              <div class="form-group">*/
/* 	                <label class="col-sm-2 control-label" for="input-meta-title">{{ entry_whatsapp_showonheader }}</label>*/
/* 	                <div class="col-sm-10">*/
/* 	                	<select name="config_whatsapp_ontop" class="form-control">*/
/* 	                		<option>-- Select --</option>*/
/* 	                		<option value="1" {{ (config_whatsapp_ontop == 1) ? 'selected' : '' }}>Yes</option>*/
/* 	                		<option value="0" {{ (config_whatsapp_ontop == 0) ? 'selected' : '' }}>No</option>*/
/* 	                	</select>*/
/* 	                </div>*/
/* 	              </div>*/
/* 	              <div class="form-group">*/
/* 	                <label class="col-sm-2 control-label" for="input-meta-title">{{ entry_whatsapp_showonfooter }} </label>*/
/* 	                <div class="col-sm-10">*/
/* 	                	<select name="config_whatsapp_onbottom" class="form-control">*/
/* 	                		<option>-- Select --</option>*/
/* 	                		<option value="1" {{ (config_whatsapp_onbottom == 1) ? 'selected' : '' }}>Yes</option>*/
/* 	                		<option value="0" {{ (config_whatsapp_onbottom == 0) ? 'selected' : '' }}>No</option>*/
/* 	                	</select>*/
/* 	                </div>*/
/* 	              </div>*/
/* 				</div>*/
/* 			*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-title">{{ entry_meta_title }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_meta_title" value="{{ config_meta_title }}" placeholder="{{ entry_meta_title }}" id="input-meta-title" class="form-control" />*/
/*                   {% if error_meta_title %}*/
/*                   <div class="text-danger">{{ error_meta_title }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-description">{{ entry_meta_description }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_meta_description" rows="5" placeholder="{{ entry_meta_description }}" id="input-meta-description" class="form-control">{{ config_meta_description }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-keyword">{{ entry_meta_keyword }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_meta_keyword" rows="5" placeholder="{{ entry_meta_keyword }}" id="input-meta-keyword" class="form-control">{{ config_meta_keyword }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-theme">{{ entry_theme }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_theme" id="input-theme" class="form-control">*/
/*                     */
/*                     {% for theme in themes %}*/
/*                     {% if theme.value == config_theme %}*/
/*                     */
/*                     <option value="{{ theme.value }}" selected="selected">{{ theme.text }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ theme.value }}">{{ theme.text }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                   <br />*/
/*                   <img src="" alt="" id="theme" class="img-thumbnail" /></div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-layout">{{ entry_layout }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_layout_id" id="input-layout" class="form-control">*/
/*                     */
/*                     {% for layout in layouts %}*/
/*                     {% if layout.layout_id == config_layout_id %}*/
/*                     */
/*                     <option value="{{ layout.layout_id }}" selected="selected">{{ layout.name }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ layout.layout_id }}">{{ layout.name }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-store">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_name" value="{{ config_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*                   {% if error_name %}*/
/*                   <div class="text-danger">{{ error_name }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-owner">{{ entry_owner }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_owner" value="{{ config_owner }}" placeholder="{{ entry_owner }}" id="input-owner" class="form-control" />*/
/*                   {% if error_owner %}*/
/*                   <div class="text-danger">{{ error_owner }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-address">{{ entry_address }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_address" placeholder="{{ entry_address }}" rows="5" id="input-address" class="form-control">{{ config_address }}</textarea>*/
/*                   {% if error_address %}*/
/*                   <div class="text-danger">{{ error_address }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-geocode"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_geocode }}">{{ entry_geocode }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_geocode" value="{{ config_geocode }}" placeholder="{{ entry_geocode }}" id="input-geocode" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_email" value="{{ config_email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*                   {% if error_email %}*/
/*                   <div class="text-danger">{{ error_email }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_telephone" value="{{ config_telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*                   {% if error_telephone %}*/
/*                   <div class="text-danger">{{ error_telephone }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-fax">{{ entry_fax }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_fax" value="{{ config_fax }}" placeholder="{{ entry_fax }}" id="input-fax" class="form-control" />*/
/*                 </div>*/
/*               </div>              */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-image">{{ entry_image }}</label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="config_image" value="{{ config_image }}" id="input-image" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-open"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_open }}">{{ entry_open }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_open" rows="5" placeholder="{{ entry_open }}" id="input-open" class="form-control">{{ config_open }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-comment"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_comment }}">{{ entry_comment }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_comment" rows="5" placeholder="{{ entry_comment }}" id="input-comment" class="form-control">{{ config_comment }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               {% if locations %}*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_location }}">{{ entry_location }}</span></label>*/
/*                 <div class="col-sm-10"> {% for location in locations %}*/
/*                   <div class="checkbox">*/
/*                     <label> {% if location.location_id in config_location %}*/
/*                       <input type="checkbox" name="config_location[]" value="{{ location.location_id }}" checked="checked" />*/
/*                       {{ location.name }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="config_location[]" value="{{ location.location_id }}" />*/
/*                       {{ location.name }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                   {% endfor %} </div>*/
/*               </div>*/
/*               {% endif %} </div>*/
/*             <div class="tab-pane" id="tab-local">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-country">{{ entry_country }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_country_id" id="input-country" class="form-control">*/
/*                     */
/*                     {% for country in countries %}*/
/*                     {% if country.country_id == config_country_id %}*/
/*                     */
/*                     <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-zone">{{ entry_zone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_zone_id" id="input-zone" class="form-control">*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-language">{{ entry_language }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_language" id="input-language" class="form-control">*/
/*                     */
/*                     {% for language in languages %}*/
/*                     {% if language.code == config_language %}*/
/*                     */
/*                     <option value="{{ language.code }}" selected="selected">{{ language.name }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ language.code }}">{{ language.name }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-admin-language">{{ entry_admin_language }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_admin_language" id="input-admin-language" class="form-control">*/
/*                     */
/*                     {% for language in languages %}*/
/*                     {% if language.code == config_admin_language %}*/
/*                     */
/*                     <option value="{{ language.code }}" selected="selected">{{ language.name }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ language.code }}">{{ language.name }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-currency"><span data-toggle="tooltip" title="{{ help_currency }}">{{ entry_currency }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_currency" id="input-currency" class="form-control">*/
/*                     */
/*                     {% for currency in currencies %}*/
/*                     {% if currency.code == config_currency %}*/
/*                     */
/*                     <option value="{{ currency.code }}" selected="selected">{{ currency.title }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ currency.code }}">{{ currency.title }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_currency_auto }}">{{ entry_currency_auto }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <label class="radio-inline"> {% if config_currency_auto %}*/
/*                     <input type="radio" name="config_currency_auto" value="1" checked="checked" />*/
/*                     {{ text_yes }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="config_currency_auto" value="1" />*/
/*                     {{ text_yes }}*/
/*                     {% endif %} </label>*/
/*                   <label class="radio-inline"> {% if not config_currency_auto %}*/
/*                     <input type="radio" name="config_currency_auto" value="0" checked="checked" />*/
/*                     {{ text_no }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="config_currency_auto" value="0" />*/
/*                     {{ text_no }}*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-length-class">{{ entry_length_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_length_class_id" id="input-length-class" class="form-control">*/
/*                     */
/*                     {% for length_class in length_classes %}*/
/*                     {% if length_class.length_class_id == config_length_class_id %}*/
/*                     */
/*                     <option value="{{ length_class.length_class_id }}" selected="selected">{{ length_class.title }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ length_class.length_class_id }}">{{ length_class.title }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-weight-class">{{ entry_weight_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_weight_class_id" id="input-weight-class" class="form-control">*/
/*                     */
/*                     {% for weight_class in weight_classes %}*/
/*                     {% if weight_class.weight_class_id == config_weight_class_id %}*/
/*                     */
/*                     <option value="{{ weight_class.weight_class_id }}" selected="selected">{{ weight_class.title }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ weight_class.weight_class_id }}">{{ weight_class.title }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-option">*/
/*               <fieldset>*/
/*                 <legend>{{ text_product }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_product_count }}">{{ entry_product_count }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_product_count %}*/
/*                       <input type="radio" name="config_product_count" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_product_count" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_product_count %}*/
/*                       <input type="radio" name="config_product_count" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_product_count" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-admin-limit"><span data-toggle="tooltip" title="{{ help_limit_admin }}">{{ entry_limit_admin }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_limit_admin" value="{{ config_limit_admin }}" placeholder="{{ entry_limit_admin }}" id="input-admin-limit" class="form-control" />*/
/*                     {% if error_limit_admin %}*/
/*                     <div class="text-danger">{{ error_limit_admin }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_review }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_review }}">{{ entry_review }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_review_status %}*/
/*                       <input type="radio" name="config_review_status" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_status" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_review_status %}*/
/*                       <input type="radio" name="config_review_status" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_status" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_review_guest }}">{{ entry_review_guest }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_review_guest %}*/
/*                       <input type="radio" name="config_review_guest" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_guest" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_review_guest %}*/
/*                       <input type="radio" name="config_review_guest" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_guest" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_voucher }}</legend>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-voucher-min"><span data-toggle="tooltip" title="{{ help_voucher_min }}">{{ entry_voucher_min }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_voucher_min" value="{{ config_voucher_min }}" placeholder="{{ entry_voucher_min }}" id="input-voucher-min" class="form-control" />*/
/*                     {% if error_voucher_min %}*/
/*                     <div class="text-danger">{{ error_voucher_min }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-voucher-max"><span data-toggle="tooltip" title="{{ help_voucher_max }}">{{ entry_voucher_max }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_voucher_max" value="{{ config_voucher_max }}" placeholder="{{ entry_voucher_max }}" id="input-voucher-max" class="form-control" />*/
/*                     {% if error_voucher_max %}*/
/*                     <div class="text-danger">{{ error_voucher_max }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_tax }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_tax }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_tax %}*/
/*                       <input type="radio" name="config_tax" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_tax" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_tax %}*/
/*                       <input type="radio" name="config_tax" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_tax" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-tax-default"><span data-toggle="tooltip" title="{{ help_tax_default }}">{{ entry_tax_default }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_tax_default" id="input-tax-default" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       */
/*                       {% if config_tax_default == 'shipping' %}*/
/*                       */
/*                       <option value="shipping" selected="selected">{{ text_shipping }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="shipping">{{ text_shipping }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% if config_tax_default == 'payment' %}*/
/*                       */
/*                       <option value="payment" selected="selected">{{ text_payment }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="payment">{{ text_payment }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-tax-customer"><span data-toggle="tooltip" title="{{ help_tax_customer }}">{{ entry_tax_customer }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_tax_customer" id="input-tax-customer" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       */
/*                       {% if config_tax_customer == 'shipping' %}*/
/*                       */
/*                       <option value="shipping" selected="selected">{{ text_shipping }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="shipping">{{ text_shipping }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% if config_tax_customer == 'payment' %}*/
/*                       */
/*                       <option value="payment" selected="selected">{{ text_payment }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="payment">{{ text_payment }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_account }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_online }}">{{ entry_customer_online }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_online %}*/
/*                       <input type="radio" name="config_customer_online" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_online" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_customer_online %}*/
/*                       <input type="radio" name="config_customer_online" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_online" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_activity }}">{{ entry_customer_activity }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_activity %}*/
/*                       <input type="radio" name="config_customer_activity" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_activity" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_customer_activity %}*/
/*                       <input type="radio" name="config_customer_activity" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_activity" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_customer_search }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_search %}*/
/*                       <input type="radio" name="config_customer_search" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_search" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_customer_search %}*/
/*                       <input type="radio" name="config_customer_search" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_search" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-customer-group"><span data-toggle="tooltip" title="{{ help_customer_group }}">{{ entry_customer_group }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_customer_group_id" id="input-customer-group" class="form-control">*/
/*                       */
/*                       {% for customer_group in customer_groups %}*/
/*                       {% if customer_group.customer_group_id == config_customer_group_id %}*/
/*                       */
/*                       <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_group_display }}">{{ entry_customer_group_display }}</span></label>*/
/*                   <div class="col-sm-10"> {% for customer_group in customer_groups %}*/
/*                     <div class="checkbox">*/
/*                       <label> {% if customer_group.customer_group_id in config_customer_group_display %}*/
/*                         <input type="checkbox" name="config_customer_group_display[]" value="{{ customer_group.customer_group_id }}" checked="checked" />*/
/*                         {{ customer_group.name }}*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="config_customer_group_display[]" value="{{ customer_group.customer_group_id }}" />*/
/*                         {{ customer_group.name }}*/
/*                         {% endif %} </label>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                     {% if error_customer_group_display %}*/
/*                     <div class="text-danger">{{ error_customer_group_display }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_price }}">{{ entry_customer_price }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_price %}*/
/*                       <input type="radio" name="config_customer_price" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_price" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_customer_price %}*/
/*                       <input type="radio" name="config_customer_price" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_price" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-login-attempts"><span data-toggle="tooltip" title="{{ help_login_attempts }}">{{ entry_login_attempts }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_login_attempts" value="{{ config_login_attempts }}" placeholder="{{ entry_login_attempts }}" id="input-login-attempts" class="form-control" />*/
/*                     {% if error_login_attempts %}*/
/*                     <div class="text-danger">{{ error_login_attempts }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-account"><span data-toggle="tooltip" title="{{ help_account }}">{{ entry_account }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_account_id" id="input-account" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_account_id %}*/
/*                       */
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_checkout }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-invoice-prefix"><span data-toggle="tooltip" title="{{ help_invoice_prefix }}">{{ entry_invoice_prefix }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_invoice_prefix" value="{{ config_invoice_prefix }}" placeholder="{{ entry_invoice_prefix }}" id="input-invoice-prefix" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_cart_weight }}">{{ entry_cart_weight }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_cart_weight %}*/
/*                       <input type="radio" name="config_cart_weight" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_cart_weight" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_cart_weight %}*/
/*                       <input type="radio" name="config_cart_weight" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_cart_weight" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_checkout_guest }}">{{ entry_checkout_guest }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_checkout_guest %}*/
/*                       <input type="radio" name="config_checkout_guest" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_checkout_guest" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_checkout_guest %}*/
/*                       <input type="radio" name="config_checkout_guest" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_checkout_guest" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-checkout"><span data-toggle="tooltip" title="{{ help_checkout }}">{{ entry_checkout }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_checkout_id" id="input-checkout" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_checkout_id %}*/
/*                       */
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-order-status"><span data-toggle="tooltip" title="{{ help_order_status }}">{{ entry_order_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_order_status_id" id="input-order-status" class="form-control">*/
/*                       */
/*                       {% for order_status in order_statuses %}*/
/*                       {% if order_status.order_status_id == config_order_status_id %}*/
/*                       */
/*                       <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-process-status"><span data-toggle="tooltip" title="{{ help_processing_status }}">{{ entry_processing_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for order_status in order_statuses %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if order_status.order_status_id in config_processing_status %}*/
/*                           <input type="checkbox" name="config_processing_status[]" value="{{ order_status.order_status_id }}" checked="checked" />*/
/*                           {{ order_status.name }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_processing_status[]" value="{{ order_status.order_status_id }}" />*/
/*                           {{ order_status.name }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                       {% endfor %} </div>*/
/*                     {% if error_processing_status %}*/
/*                     <div class="text-danger">{{ error_processing_status }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-complete-status"><span data-toggle="tooltip" title="{{ help_complete_status }}">{{ entry_complete_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for order_status in order_statuses %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if order_status.order_status_id in config_complete_status %}*/
/*                           <input type="checkbox" name="config_complete_status[]" value="{{ order_status.order_status_id }}" checked="checked" />*/
/*                           {{ order_status.name }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_complete_status[]" value="{{ order_status.order_status_id }}" />*/
/*                           {{ order_status.name }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                       {% endfor %} </div>*/
/*                     {% if error_complete_status %}*/
/*                     <div class="text-danger">{{ error_complete_status }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-fraud-status"><span data-toggle="tooltip" title="{{ help_fraud_status }}">{{ entry_fraud_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_fraud_status_id" id="input-fraud-status" class="form-control">*/
/*                       */
/*                       {% for order_status in order_statuses %}*/
/*                       {% if order_status.order_status_id == config_fraud_status_id %}*/
/*                       */
/*                       <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-api"><span data-toggle="tooltip" title="{{ help_api }}">{{ entry_api }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_api_id" id="input-api" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for api in apis %}*/
/*                       {% if api.api_id == config_api_id %}*/
/*                       */
/*                       <option value="{{ api.api_id }}" selected="selected">{{ api.username }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ api.api_id }}">{{ api.username }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_stock }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_display }}">{{ entry_stock_display }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_stock_display %}*/
/*                       <input type="radio" name="config_stock_display" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_display" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_stock_display %}*/
/*                       <input type="radio" name="config_stock_display" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_display" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_warning }}">{{ entry_stock_warning }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_stock_warning %}*/
/*                       <input type="radio" name="config_stock_warning" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_warning" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_stock_warning %}*/
/*                       <input type="radio" name="config_stock_warning" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_warning" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_checkout }}">{{ entry_stock_checkout }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_stock_checkout %}*/
/*                       <input type="radio" name="config_stock_checkout" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_checkout" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_stock_checkout %}*/
/*                       <input type="radio" name="config_stock_checkout" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_checkout" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_affiliate }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate-group">{{ entry_affiliate_group }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_affiliate_group_id" id="input-affiliate-group" class="form-control">*/
/*                       */
/*                       {% for customer_group in customer_groups %}*/
/*                       {% if customer_group.customer_group_id == config_affiliate_group_id %}*/
/*                       */
/*                       <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_affiliate_approval }}">{{ entry_affiliate_approval }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_affiliate_approval %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_affiliate_approval %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_affiliate_auto }}">{{ entry_affiliate_auto }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_affiliate_auto %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_affiliate_auto %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate-commission"><span data-toggle="tooltip" title="{{ help_affiliate_commission }}">{{ entry_affiliate_commission }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_affiliate_commission" value="{{ config_affiliate_commission }}" placeholder="{{ entry_affiliate_commission }}" id="input-affiliate-commission" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate"><span data-toggle="tooltip" title="{{ help_affiliate }}">{{ entry_affiliate }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_affiliate_id" id="input-affiliate" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_affiliate_id %}*/
/*                       */
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_return }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-return"><span data-toggle="tooltip" title="{{ help_return }}">{{ entry_return }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_return_id" id="input-return" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_return_id %}*/
/*                       */
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-return-status"><span data-toggle="tooltip" title="{{ help_return_status }}">{{ entry_return_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_return_status_id" id="input-return-status" class="form-control">*/
/*                       */
/*                       {% for return_status in return_statuses %}*/
/*                       {% if return_status.return_status_id == config_return_status_id %}*/
/*                       */
/*                       <option value="{{ return_status.return_status_id }}" selected="selected">{{ return_status.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ return_status.return_status_id }}">{{ return_status.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_captcha }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_captcha }}">{{ entry_captcha }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_captcha" id="input-captcha" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       */
/*                       {% for captcha in captchas %}*/
/*                       {% if captcha.value == config_captcha %}*/
/*                       */
/*                       <option value="{{ captcha.value }}" selected="selected">{{ captcha.text }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ captcha.value }}">{{ captcha.text }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_captcha_page }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for captcha_page in captcha_pages %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if captcha_page.value in config_captcha_page %}*/
/*                           <input type="checkbox" name="config_captcha_page[]" value="{{ captcha_page.value }}" checked="checked" />*/
/*                           {{ captcha_page.text }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_captcha_page[]" value="{{ captcha_page.value }}" />*/
/*                           {{ captcha_page.text }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                       {% endfor %} </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-image">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-logo">{{ entry_logo }}</label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-logo" data-toggle="image" class="img-thumbnail"><img src="{{ logo }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="config_logo" value="{{ config_logo }}" id="input-logo" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-icon"><span data-toggle="tooltip" title="{{ help_icon }}">{{ entry_icon }}</span></label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-icon" data-toggle="image" class="img-thumbnail"><img src="{{ icon }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="config_icon" value="{{ config_icon }}" id="input-icon" />*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-mail">*/
/*               <fieldset>*/
/*                 <legend>{{ text_general }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-engine"><span data-toggle="tooltip" title="{{ help_mail_engine }}">{{ entry_mail_engine }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_mail_engine" id="input-mail-engine" class="form-control">*/
/*                       */
/*                       {% if config_mail_engine == 'mail' %}*/
/*                       */
/*                       <option value="mail" selected="selected">{{ text_mail }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="mail">{{ text_mail }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% if config_mail_engine == 'smtp' %}*/
/*                       */
/*                       <option value="smtp" selected="selected">{{ text_smtp }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="smtp">{{ text_smtp }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-parameter"><span data-toggle="tooltip" title="{{ help_mail_parameter }}">{{ entry_mail_parameter }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_parameter" value="{{ config_mail_parameter }}" placeholder="{{ entry_mail_parameter }}" id="input-mail-parameter" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-hostname"><span data-toggle="tooltip" title="{{ help_mail_smtp_hostname }}">{{ entry_mail_smtp_hostname }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_hostname" value="{{ config_mail_smtp_hostname }}" placeholder="{{ entry_mail_smtp_hostname }}" id="input-mail-smtp-hostname" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-username">{{ entry_mail_smtp_username }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_username" value="{{ config_mail_smtp_username }}" placeholder="{{ entry_mail_smtp_username }}" id="input-mail-smtp-username" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-password"><span data-toggle="tooltip" title="{{ help_mail_smtp_password }}">{{ entry_mail_smtp_password }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_password" value="{{ config_mail_smtp_password }}" placeholder="{{ entry_mail_smtp_password }}" id="input-mail-smtp-password" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-port">{{ entry_mail_smtp_port }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_port" value="{{ config_mail_smtp_port }}" placeholder="{{ entry_mail_smtp_port }}" id="input-mail-smtp-port" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-timeout">{{ entry_mail_smtp_timeout }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_timeout" value="{{ config_mail_smtp_timeout }}" placeholder="{{ entry_mail_smtp_timeout }}" id="input-mail-smtp-timeout" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_mail_alert }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_mail_alert }}">{{ entry_mail_alert }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for mail_alert in mail_alerts %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if mail_alert.value in config_mail_alert %}*/
/*                           <input type="checkbox" name="config_mail_alert[]" value="{{ mail_alert.value }}" checked="checked" />*/
/*                           {{ mail_alert.text }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_mail_alert[]" value="{{ mail_alert.value }}" />*/
/*                           {{ mail_alert.text }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                       {% endfor %} </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-alert-email"><span data-toggle="tooltip" title="{{ help_mail_alert_email }}">{{ entry_mail_alert_email }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_mail_alert_email" rows="5" placeholder="{{ entry_mail_alert_email }}" id="input-alert-email" class="form-control">{{ config_mail_alert_email }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/* */
/*         <!--START OVICKO MULTISELLER-->*/
/* 			<div class="tab-pane" id="tab-seller"> */
/* 			 <div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-layout">{{ entry_default_seller }}</label>*/
/* 				<div class="col-sm-10">*/
/* 				<select name="config_defaultseller_id" class="form-control">*/
/* 				  {% for seller in sellers %}*/
/* 				{% if seller.seller_id == config_defaultseller_id  %}*/
/* 				<option value="{{ seller.seller_id }}" selected="selected">{{ seller.username }}</option>*/
/* 				{% else %}*/
/* 				<option value="{{ seller.seller_id }}">{{ seller.username }}</option>*/
/* 				{% endif %}*/
/* 				 {% endfor %}*/
/* 				</select>*/
/* 			  </div>*/
/* 			  </div>*/
/* 			   <div class="form-group" style="display:none">*/
/* 				<label class="col-sm-2 control-label" for="input-layout">{{ entry_seller_autoapprove }}</label>*/
/* 				<div class="col-sm-10">{% if config_seller_autoapprove  %}*/
/*             <input type="radio" name="config_seller_autoapprove" value="1" checked="checked" class="form-control1"/>*/
/*             {{ text_yes }}*/
/*             <input type="radio" name="config_seller_autoapprove" value="0" class="form-control1"/>*/
/*             {{ text_no }}*/
/*             {% else %}*/
/*             <input type="radio" name="config_seller_autoapprove" value="1" class="form-control1"/>*/
/*             {{ text_yes }}*/
/*             <input type="radio" name="config_seller_autoapprove" value="0" checked="checked" class="form-control1"/>*/
/*             {{ text_no }}*/
/*             {% endif %}</div>*/
/* 			 </div>*/
/* 			<div class="form-group" style="display:none">*/
/* 			   <label class="col-sm-2 control-label" for="input-layout">{{ entry_product_autoapprove }}</label>*/
/* 				<div class="col-sm-10">{% if config_product_autoapprove  %}*/
/*             <input type="radio" name="config_product_autoapprove" value="1" checked="checked" class="form-control1"/>*/
/*             {{ text_yes }}*/
/*             <input type="radio" name="config_product_autoapprove" value="0" class="form-control1"/>*/
/*             {{ text_no }}*/
/*             {% else %}*/
/*             <input type="radio" name="config_product_autoapprove" value="1" class="form-control1"/>*/
/*             {{ text_yes }}*/
/*             <input type="radio" name="config_product_autoapprove" value="0" checked="checked" class="form-control1"/>*/
/*             {{ text_no }}*/
/*             {% endif %}</div>*/
/* 			  </div>*/
/* 			<div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="input-layout">{{ entry_saccount_terms }}</label>*/
/* 			<div class="col-sm-10"><select name="config_selleraccount_id" class="form-control">*/
/* 			<option value="0">{{ text_none }}</option>*/
/* 			{% for information in informations %}*/
/* 			{% if information.information_id == config_selleraccount_id %}*/
/* 			<option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/* 			{% else %}*/
/* 			<option value="{{ information.information_id }}">{{ information.title }}</option>*/
/* 			{% endif %}*/
/* 			{% endfor %}*/
/* 			</select></div>*/
/* 			</div>*/
/* 			<div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="input-layout">{{ entry_default_commission }}</label>*/
/* 			<div class="col-sm-10">*/
/* 			<select name="config_sellercommission_id" id="input-layout" class="form-control">*/
/* 			{% for  commission in commissions  %}*/
/* 			{% if commission.commission_id == config_sellercommission_id  %}*/
/* 			<option value="{{ commission.commission_id }}" selected="selected">{{ commission.name }}</option>*/
/* 			{% else %}*/
/* 			<option value="{{ commission.commission_id }}">{{ commission.name }}</option>*/
/* 			{% endif %}*/
/* 			{% endfor %}*/
/* 			</select>*/
/* 			</div>*/
/* 			</div>*/
/* 			<div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="input-layout">{{ entry_default_category }}</label>*/
/* 			<div class="col-sm-10">*/
/* 			<div class="well well-sm" style="height: 150px; overflow: auto;"> {% for category in categories %}*/
/* 					<div class="checkbox">*/
/* 					<label> {% if category.category_id in config_product_category %}*/
/* 					<input type="checkbox" name="config_product_category[]" value="{{ category.category_id }}" checked="checked" />*/
/* 					{{ category.name }}*/
/* 					{% else %}*/
/* 					<input type="checkbox" name="config_product_category[]" value="{{ category.category_id }}" />*/
/* 					{{ category.name }}*/
/* 					{% endif %} </label>*/
/* 					</div>*/
/* 					{% endfor %} </div>*/
/*                <a onclick="$(this).parent().find(':checkbox').prop('checked', true);">{{ text_select_all }}</a> / <a onclick="$(this).parent().find(':checkbox').prop('checked', false);">{{ text_unselect_all }}</a>*/
/* 			</div>*/
/* 			</div>*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-layout">{{ text_orderstatus }}</label>*/
/* 				<div class="col-sm-10">*/
/* 				    <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for order_status in order_statuses %}*/
/* 					<div class="checkbox">*/
/* 					<label> {% if order_status.order_status_id in config_seller_orderstatuses %}*/
/* 					<input type="checkbox" name="config_seller_orderstatuses[]" value="{{ order_status.order_status_id }}" checked="checked" />*/
/* 					{{ order_status.name }}*/
/* 					{% else %}*/
/* 					<input type="checkbox" name="config_seller_orderstatuses[]" value="{{ order_status.order_status_id }}" />*/
/* 					{{ order_status.name }}*/
/* 					{% endif %} </label>*/
/* 					</div>*/
/* 					{% endfor %} </div>*/
/* 					 <a onclick="$(this).parent().find(':checkbox').prop('checked', true);">{{ text_select_all }}</a> / <a onclick="$(this).parent().find(':checkbox').prop('checked', false);">{{ text_unselect_all }}</a>*/
/* 					</div>*/
/* 			</div>*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-layout">{{ entry_eligible_payment }}</label>*/
/* 				<div class="col-sm-10">*/
/* 				<div class="well well-sm" style="height: 150px; overflow: auto;"> {% for order_status in order_statuses %}*/
/* 					<div class="checkbox">*/
/* 					<label> {% if order_status.order_status_id in config_seller_payments %}*/
/* 					<input type="checkbox" name="config_seller_payments[]" value="{{ order_status.order_status_id }}" checked="checked" />*/
/* 					{{ order_status.name }}*/
/* 					{% else %}*/
/* 					<input type="checkbox" name="config_seller_payments[]" value="{{ order_status.order_status_id }}" />*/
/* 					{{ order_status.name }}*/
/* 					{% endif %} </label>*/
/* 					</div>*/
/* 					{% endfor %} </div>*/
/* 					 <a onclick="$(this).parent().find(':checkbox').prop('checked', true);">{{ text_select_all }}</a> / <a onclick="$(this).parent().find(':checkbox').prop('checked', false);">{{ text_unselect_all }}</a>*/
/* 				</div>*/
/* 			</div>*/
/* 	</div>*/
/* 		<!--END OVICKO MULTISELLER-->*/
/* 		*/
/*             <div class="tab-pane" id="tab-server">*/
/*               <fieldset>*/
/*                 <legend>{{ text_general }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_maintenance }}">{{ entry_maintenance }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_maintenance %}*/
/*                       <input type="radio" name="config_maintenance" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_maintenance" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_maintenance %}*/
/*                       <input type="radio" name="config_maintenance" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_maintenance" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_seo_url }}">{{ entry_seo_url }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_seo_url %}*/
/*                       <input type="radio" name="config_seo_url" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_seo_url" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_seo_url %}*/
/*                       <input type="radio" name="config_seo_url" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_seo_url" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-robots"><span data-toggle="tooltip" title="{{ help_robots }}">{{ entry_robots }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_robots" rows="5" placeholder="{{ entry_robots }}" id="input-robots" class="form-control">{{ config_robots }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-compression"><span data-toggle="tooltip" title="{{ help_compression }}">{{ entry_compression }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_compression" value="{{ config_compression }}" placeholder="{{ entry_compression }}" id="input-compression" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_security }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_secure }}">{{ entry_secure }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_secure %}*/
/*                       <input type="radio" name="config_secure" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_secure" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_secure %}*/
/*                       <input type="radio" name="config_secure" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_secure" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_password }}">{{ entry_password }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_password %}*/
/*                       <input type="radio" name="config_password" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_password" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_password %}*/
/*                       <input type="radio" name="config_password" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_password" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_shared }}">{{ entry_shared }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_shared %}*/
/*                       <input type="radio" name="config_shared" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_shared" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_shared %}*/
/*                       <input type="radio" name="config_shared" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_shared" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-encryption"><span data-toggle="tooltip" title="{{ help_encryption }}">{{ entry_encryption }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_encryption" rows="5" placeholder="{{ entry_encryption }}" id="input-encryption" class="form-control">{{ config_encryption }}</textarea>*/
/*                     {% if error_encryption %}*/
/*                     <div class="text-danger">{{ error_encryption }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_upload }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-file-max-size"><span data-toggle="tooltip" title="{{ help_file_max_size }}">{{ entry_file_max_size }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_file_max_size" value="{{ config_file_max_size }}" placeholder="{{ entry_file_max_size }}" id="input-file-max-size" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-file-ext-allowed"><span data-toggle="tooltip" title="{{ help_file_ext_allowed }}">{{ entry_file_ext_allowed }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_file_ext_allowed" rows="5" placeholder="{{ entry_file_ext_allowed }}" id="input-file-ext-allowed" class="form-control">{{ config_file_ext_allowed }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-file-mime-allowed"><span data-toggle="tooltip" title="{{ help_file_mime_allowed }}">{{ entry_file_mime_allowed }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_file_mime_allowed" rows="5" placeholder="{{ entry_file_mime_allowed }}" id="input-file-mime-allowed" class="form-control">{{ config_file_mime_allowed }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_error }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_error_display }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_error_display %}*/
/*                       <input type="radio" name="config_error_display" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_display" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_error_display %}*/
/*                       <input type="radio" name="config_error_display" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_display" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_error_log }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_error_log %}*/
/*                       <input type="radio" name="config_error_log" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_log" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_error_log %}*/
/*                       <input type="radio" name="config_error_log" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_log" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}</label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-error-filename">{{ entry_error_filename }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_error_filename" value="{{ config_error_filename }}" placeholder="{{ entry_error_filename }}" id="input-error-filename" class="form-control" />*/
/*                     {% if error_log %}*/
/*                     <div class="text-danger">{{ error_log }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('select[name=\'config_theme\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=setting/setting/theme&user_token={{ user_token }}&theme=' + this.value,*/
/* 		dataType: 'html',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'config_theme\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'config_theme\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(html) {*/
/* 			$('#theme').attr('src', html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'config_theme\']').trigger('change');*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('select[name=\'config_country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'config_country_id\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'config_country_id\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/*           			html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == '{{ config_zone_id }}') {*/
/*             			html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('select[name=\'config_zone_id\']').html(html);*/
/* 			*/
/* 			$('#button-save').prop('disabled', false);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'config_country_id\']').trigger('change');*/
/* //--></script></div>*/
/* {{ footer }} */
