<?php
// From fields
$from_fields = apply_filters( 'woocommerce_catalog_enquiry_from_fileds', array(
"name_label" => 
    array('title' => __('Name', 'woocommerce-catalog-enquiry'), 
        'id' => 'name-label', 
        'name' => 'name_label', 
        'label_for' => 'name-label', 
        'placeholder' => __('Default: Name' , 'woocommerce-catalog-enquiry')
        ),

"email_label" => 
    array('title' => __('Email', 'woocommerce-catalog-enquiry'), 
        'id' => 'email-label', 
        'name' => 'email_label', 
        'label_for' => 'email-label',
        'placeholder' => __('Default: Email', 'woocommerce-catalog-enquiry')
        ),
"form_phone" => 
    array('title' => __('Phone', 'woocommerce-catalog-enquiry'),
        'id' => 'is-phone', 
        'name' => 'form_phone', 
        'label_for' => 'phone-label', 
        'is_enable'=> 'Enable',
        'placeholder' => __('Default: Phone', 'woocommerce-catalog-enquiry')

        ),

"form_address" => 
    array('title' => __('Address', 'woocommerce-catalog-enquiry'), 
        'id' => 'is-address', 
        'name' => 'form_address', 
        'label_for' => 'address-label',
        'is_enable'=> 'Enable',
        'placeholder' => __('Default: Address', 'woocommerce-catalog-enquiry')

        ),

"form_subject" => 
    array('title' => __('Enquiry About', 'woocommerce-catalog-enquiry'),
        'id' => 'is-subject',
        'name' => 'form_subject', 
        'label_for' => 'subject-label',
        'is_enable'=> 'Enable',
        'placeholder' => __('Default: Subject', 'woocommerce-catalog-enquiry')
        ),

"form_comment" => 
    array('title' => __('Enquiry Details', 'woocommerce-catalog-enquiry'), 
        'id' => 'is-comment', 
        'name' => 'form_comment', 
        'label_for' => 'comment-label',
        'is_enable'=> 'Enable',
        'placeholder' => __('Default: Comment', 'woocommerce-catalog-enquiry')
       ),
"form_fileupload" => 
    array('title' => __('File Upload', 'woocommerce-catalog-enquiry'), 
        'id' => 'is-fileupload', 
        'name' => 'form_fileupload', 
        'label_for' => 'fileupload-label', 
        'is_enable'=> 'Enable',
        'placeholder' => __('Default: Upload', 'woocommerce-catalog-enquiry')
        ),

"filesize_limit" => 
    array('title' => __('File Upload Size Limit ( in MB )', 'woocommerce-catalog-enquiry'), 
        'id' => 'filesize-limit',
        'name' => 'filesize_limit',  
        'label_for' => 'filesize-limit',
        'placeholder' => __('Default: Size Limit', 'woocommerce-catalog-enquiry')
        ),

"form_captcha" => 
    array(
     'title' => __('Captcha', 'woocommerce-catalog-enquiry'),
     'id' => 'is-captcha', 
     'name' => 'form_captcha', 
     'label_for' => 'captcha-label',
     'is_enable'=> 'Enable',
     'placeholder' => __('Default: Capta', 'woocommerce-catalog-enquiry')

     ),
    )
);
// from heading
$from_heading = apply_filters( 'woocommerce_catalog_enquiry_from_heading', array(
    __( "Field Name", 'woocommerce-catalog-enquiry' ),
    __( "Enable / Disable", 'woocommerce-catalog-enquiry' ),
    __( "Set New Field Name", 'woocommerce-catalog-enquiry' )
    
    ) );

?>

<table class="table table-bordered responsive-table wcmp_catalog_from_setting widefat">
    <thead>
        <tr>
        <?php
        foreach ($from_heading as $key_heading => $value_heading) {
        ?>
            <th>
                <?php echo $value_heading; ?>
            </th>  
        <?php
        }
        ?>        
        </tr>
    </thead>
    <tbody>
    <?php
       foreach ($from_fields as $key => $value) {
        ?>
        <tr>
            <td >
                <?php
                echo $value['title'];
                ?>
            </td>
            <td>
                <?php 
                $ids = $value['name' ];
                if( isset($value['is_enable' ] ) ){
                    echo "<label class='switch'><input class='".$value['id']."' type='checkbox' name='{$setting_id}[$ids][is_enable]' value='".$value['is_enable']."' " . ( ( isset($options[ $ids ]['is_enable']) ? $options[ $ids ]['is_enable'] == "Enable" : '') ? 'checked' : '' ) . "  /><span class='slider round'></span></label><br/>";
                }
                ?>
            </td>
            <td>
                <?php
                if( isset($value['label_for' ] ) ){
                    $extra = isset( $value['label_for' ] ) ? $value['label_for' ] : '';
                    $extra_name = isset( $value['name' ] ) ? $value['name' ] : '';
                    $place_holder = isset( $value['placeholder' ] ) ? $value['placeholder' ] : '';
                
                    echo "<input id='".$extra."' class='regular-text' name='{$setting_id}[$extra_name][label]' type='text' value='" . esc_attr( isset( $options[ $extra_name ]['label'] ) ? $options[ $extra_name ]['label'] : '' ) . "' placeholder='".$place_holder."' /><br>";
                }
                ?> 
            </td>
        </tr>
         <?php
        }
        ?>
    </tbody>
</table>
<br>

<?php

echo __('Want to customise the form as per your need? To have a fully customizable form kindly upgrade to <a href="https://wc-marketplace.com/product/woocommerce-catalog-enquiry-pro/" target="_blank">WooCommerce Catalog Enquiry Pro</a>', 'woocommerce-catalog-enquiry', 'woocommerce-catalog-enquiry');