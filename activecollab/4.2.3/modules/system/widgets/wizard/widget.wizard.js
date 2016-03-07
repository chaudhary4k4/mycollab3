(function($){var public_methods={init:function(options){return this.each(function(){var wrapper=$(this);var wrapper_dom=this;this.wiz_data={settings:jQuery.extend({},options)};this.wiz_data.table_wrapper=$('<table class="wizard_table"></table>').appendTo(wrapper);render_steps.apply(this)})},next_step:function(){return this.each(function(){next_step.apply(this)})}};var render_steps=function(){var wrapper=$(this);var wrapper_dom=this;if(this["wiz_data"]["settings"]["steps"]){var steps_count=this["wiz_data"]["settings"]["steps"].length;$.each(this["wiz_data"]["settings"]["steps"],function(step_index,step){var step_row=$('<tr step_id="'+step_index+'"></tr>').appendTo(wrapper_dom.wiz_data.table_wrapper);var step_number_cell=$('<td class="wizard_step_number"><span class="wizard_step_number_outer"><span class="wizard_step_number_inner">'+(step_index+1)+"</span></span></td>").appendTo(step_row);var step_wrapper_cell=$('<td class="wizard_step_wrapper"></td>').appendTo(step_row);step.render.apply(wrapper_dom,[step_wrapper_cell,step==0]);if(step_index==0){step_number_cell.css("background-position","center "+Math.round(step_number_cell.height()/2)+"px");set_active_step.apply(wrapper_dom,[step_row])}else{if(step_index==(steps_count-1)){step_number_cell.css("background-position","center "+(-400+Math.round(step_number_cell.height()/2))+"px")}}})}};var activate_step=function(step){step.addClass("active");var step_id=step.attr("step_id");var step_definition=this["wiz_data"]["settings"]["steps"][step_id];if(step_definition){if(step_definition.activate){step_definition.activate.apply(this,[step.find("td.wizard_step_wrapper:first")])}}step.find("textarea, select, input").eq(0).focus()};var deactivate_step=function(step){step.removeClass("active");var step_id=step.attr("step_id");var step_definition=this["wiz_data"]["settings"]["steps"][step_id];if(step_definition){if(step_definition.deactivate){step_definition.deactivate.apply(this,[step.find("td.wizard_step_wrapper:first")])}}step.find(":focus").blur()};var set_active_step=function(step){var current_step=get_current_step.apply(this);activate_step.apply(this,[step]);if(current_step){deactivate_step.apply(this,[step])}};var get_current_step=function(return_step_index){var current_step=this.wiz_data.table_wrapper.find("tr.active");if(current_step.length){return return_step_index?current_step.attr("step_id"):current_step}return null};var get_step=function(step_index){return this.wiz_data.table_wrapper.find("tr").eq(step_index)};var complete_steps=function(){if(this.wiz_data.settings["complete"]){this.wiz_data.settings["complete"].apply(this)}};var next_step=function(){var current_step=get_current_step.apply(this);var next_step=null;if(current_step){next_step=current_step.next("tr")}else{next_step=get_step.apply(this,[0])}if(current_step){deactivate_step.apply(this,[current_step])}if(next_step.length){activate_step.apply(this,[next_step])}else{complete_steps.apply(this)}};var plugin_name="wizard";$.fn[plugin_name]=function(method){if(public_methods[method]){return public_methods[method].apply(this,Array.prototype.slice.call(arguments,1))}else{if(typeof method==="object"||!method){return public_methods.init.apply(this,arguments)}else{$.error("Method "+method+" does not exist in jQuery."+plugin_name)}}}})(jQuery);