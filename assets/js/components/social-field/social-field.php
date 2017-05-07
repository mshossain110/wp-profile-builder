<div class="wpup-el-sort"> 
    <div v-if="isTemplateMode" @click.self.prevent="elementUpdate( row, col, ele)" class="wpup-update-ele">
        <i class="wpup-ele-drag fa fa-arrows-alt" aria-hidden="true"></i>
        <?php _e( 'Element', 'wpup' ); ?> #{{ele.id}}
    </div>
    <div class="wpup-label-wrap wpup-clearfix">

        <label class="wpup-label">{{ele.ele_settings_field_val.label}}</label>
        <div v-if="!isUpdateMode && ele.field_val == ''" class="wpup-label-content wpup-clearfix">{{ ele.ele_settings_field_val.content }}</div>
        <div v-if="!isUpdateMode && ele.field_val != ''" class="wpup-label-content wpup-clearfix">{{ ele.field_val }}</div>

        <div v-if="isUpdateMode">
            <input class="wpup-update-individual-field" :name="ele.ele_settings_field_val.name" v-model="ele.field_val" :placeholder="ele.ele_settings_field_val.content" type="text">
        </div>
    </div>

</div>