<div class="wpup-el-sort"> 
    <div v-if="isTemplateMode"  @click.prevent="elementUpdate( row, col, ele)" class="wpup-update-ele">
        <div class="wpup-row-move-icon">
            <i class="wpup-ele-drag fa fa-arrows-alt" aria-hidden="true"></i>
        </div>
        <div class="wpup-row-id"><?php _e( 'Element', 'wpup' ); ?> #{{ele.id}}</div>
    </div>
    <div class="wpup-label-wrap wpup-clearfix">
        
        <label class="wpup-label">{{ele.ele_settings_field_val.label}}</label>

        <div v-if="!isUpdateMode && isTemplateMode && (ele.field_val == '')" class="wpup-label-content wpup-clearfix">{{ ele.ele_settings_field_val.content }}</div>
        <div v-if="isProfileMode() && (ele.field_val != '')" class="wpup-label-content wpup-clearfix">{{ ele.field_val }}</div>
        
        <div v-if="view_self_profile(ele)" class="wpup-label-content wpup-clearfix">
            {{ele.ele_settings_field_val.content}}
        </div>
         <div v-if="view_as_other_user(ele)" class="wpup-label-content wpup-clearfix">
            <?php _e('No ' , 'wpup'); ?>{{ele.ele_settings_field_val.label}}<?php _e( ' info to show'); ?>
        </div>

        <div v-if="isUpdateMode" class="wpup-label-content wpup-clearfix">
            <input class="wpup-update-individual-field" :disabled="ele.ele_settings_field_val.disabled" :name="ele.ele_settings_field_val.name" v-model="ele.field_val" :placeholder="ele.ele_settings_field_val.placeholder" type="text">
            <div class="wpup-help-text" v-if="ele.ele_settings_field_val.description != ''">{{ ele.ele_settings_field_val.description }}</div>
        </div>
    </div>
</div>