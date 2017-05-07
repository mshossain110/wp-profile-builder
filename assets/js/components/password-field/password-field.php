<div class="wpup-el-sort"> 
    <div v-if="isTemplateMode" @click.self.prevent="elementUpdate( row, col, ele)" class="wpup-update-ele">
        <i class="wpup-ele-drag fa fa-arrows-alt" aria-hidden="true"></i>
        <?php _e( 'Element', 'wpup' ); ?> #{{ele.id}}
    </div>
    <div class="wpup-label-wrap">
        <label  class="wpup-label">{{ele.ele_settings_field_val.label}}</label>
        <div v-if="!isUpdateMode && ele.field_val == ''" class="wpup-label-content wpup-clearfix">{{ ele.ele_settings_field_val.content }}</div>
        <div v-if="!isUpdateMode && ele.field_val != ''" class="wpup-label-content wpup-clearfix">{{ ele.field_val }}</div>

        <div v-if="isUpdateMode" class="wpup-label-content wpup-clearfix">
            <div v-if="generate_password" class="wpup-password-field-wrap">
                <input class="wpup-update-individual-field" :disabled="ele.ele_settings_field_val.disabled" :name="ele.ele_settings_field_val.name" v-model="ele.field_val" :placeholder="ele.ele_settings_field_val.placeholder" type="password">
                <span class="wpup-pass-cross-icon-wrap"><i @click.prevent="activePasswordField()" class="fa fa-times-circle"></i></span> 
                <div v-if="ele.ele_settings_field.description">{{ ele.ele_settings_field_val.description }}</div>
            </div>
            <button @click.prevent="activePasswordField()" v-else><?php _e( 'Generate new password', 'wpup' ); ?></button>
        </div>

    </div>
</div>