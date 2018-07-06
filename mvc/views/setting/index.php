


<div class="box">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-gears"></i> <?=$this->lang->line('panel_title')?></h3>


        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><i class="fa fa-laptop"></i> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('menu_setting')?></li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
                <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                    <?php
                        if(form_error('sname'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="sname" class="col-sm-2 control-label ">
                            <?=$this->lang->line("setting_school_name")?>
                            &nbsp;<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="set your site title here"></i>
                        </label>

                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="sname" name="sname" value="<?=set_value('sname', $setting->sname)?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('sname'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('phone'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="phone" class="col-sm-2 control-label">
                            <?=$this->lang->line("setting_school_phone")?>
                            &nbsp;<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="Set organization phone number here"></i>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="phone" name="phone" value="<?=set_value('phone', $setting->phone)?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('phone'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('email'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="email" class="col-sm-2 control-label">
                            <?=$this->lang->line("setting_school_email")?>
                            &nbsp;<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="Set organization email address here"></i>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="email" name="email" value="<?=set_value('email', $setting->email)?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('email'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('currency_code'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="currency_code" class="col-sm-2 control-label">
                            <?=$this->lang->line("setting_school_currency_code")?>
                            &nbsp;<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Set organization currency code like USD or GBP"></i>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="currency_code" name="currency_code" value="<?=set_value('currency_code', $setting->currency_code)?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('currency_code'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('currency_symbol'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="currency_symbol" class="col-sm-2 control-label">
                            <?=$this->lang->line("setting_school_currency_symbol")?>
                            &nbsp;<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Set organization currency system here like $ or £"></i>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="currency_symbol" name="currency_symbol" value="<?=set_value('currency_symbol', $setting->currency_symbol)?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('currency_symbol'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('footer'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="footer" class="col-sm-2 control-label">
                            <?=$this->lang->line("setting_school_footer")?>
                            &nbsp;<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="Set site footer text here"></i>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="footer" name="footer" value="<?=set_value('footer', $setting->footer)?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('footer'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('address'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="address" class="col-sm-2 control-label">
                            <?=$this->lang->line("setting_school_address")?>
                            &nbsp;<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="Set organization address here"></i>
                        </label>
                        <div class="col-sm-6">
                            <textarea class="form-control" style="resize:none;" id="address" name="address"><?=set_value('address', $setting->address)?></textarea>
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('address'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('lang'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="lang" class="col-sm-2 control-label">
                            <?=$this->lang->line("setting_school_lang")?>
                            &nbsp;<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Select organization default language here"></i>
                        </label>
                        <div class="col-sm-6">
                            <?php
                                echo form_dropdown("language", array("english" => $this->lang->line("setting_english"),
                                "bengali" => $this->lang->line("setting_bengali"),
                                "arabic" => $this->lang->line("setting_arabic"),
                                "chinese" => $this->lang->line("setting_chinese"),
                                "french" => $this->lang->line("setting_french"),
                                "german" => $this->lang->line("setting_german"),
                                "hindi" => $this->lang->line("setting_hindi"),
                                "indonesian" => $this->lang->line("setting_indonesian"),
                                "italian" => $this->lang->line("setting_italian"),
                                "portuguese" => $this->lang->line("setting_portuguese"),
                                "romanian" => $this->lang->line("setting_romanian"),
                                "russian" => $this->lang->line("setting_russian"),
                                "spanish" => $this->lang->line("setting_spanish"),
                                "thai" => $this->lang->line("setting_thai"),
                                "turkish" => $this->lang->line("setting_turkish"),
                                ),
                                set_value("lang", $setting->language), "id='lang' class='form-control select2'");
                            ?>
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('lang'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('note'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="note" class="col-sm-2 control-label">
                            <?=$this->lang->line("setting_school_note")?>
                            &nbsp;<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="Enable/Disable module helper note"></i>
                        </label>
                        <div class="col-sm-6">
                            <?php
                                $noteArray[0] = $this->lang->line('setting_school_no');
                                $noteArray[1] = $this->lang->line('setting_school_yes');
                                echo form_dropdown("note", $noteArray, set_value("note",$setting->note), "id='note' class='form-control select2'");
                            ?>
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('note'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('google_analytics'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="google_analytics" class="col-sm-2 control-label">
                            <?=$this->lang->line("setting_school_google_analytics")?>
                            &nbsp;<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="Set site google_analytics code"></i>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="google_analytics" name="google_analytics" value="<?=set_value('google_analytics', $setting->google_analytics)?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('google_analytics'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('photo'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group' >";
                    ?>
                        <label for="photo" class="col-sm-2 control-label">
                            <?=$this->lang->line("setting_school_photo")?>
                            &nbsp;<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="Set organization logo here"></i>
                        </label>
                        <div class="col-sm-6">
                            <div class="input-group image-preview">
                                <input type="text" class="form-control image-preview-filename" disabled="disabled">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="fa fa-remove"></span>
                                        <?=$this->lang->line('setting_clear')?>
                                    </button>
                                    <div class="btn btn-success image-preview-input">
                                        <span class="fa fa-repeat"></span>
                                        <span class="image-preview-input-title">
                                        <?=$this->lang->line('setting_file_browse')?></span>
                                        <input type="file" accept="image/png, image/jpeg, image/gif" name="photo"/>
                                    </div>
                                </span>
                            </div>
                        </div>

                        <span class="col-sm-4">
                            <?php echo form_error('photo'); ?>
                        </span>
                    </div>


                    <div class="form-group <?php if(form_error('captcha_status')) { echo 'has-error'; } ?>">
                        <label class="col-sm-2 control-label">
                            <?=$this->lang->line("setting_school_disable_captcha")?>&nbsp; <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="bottom" title="Check for disable captcha in login"></i>
                        </label>
                        <div class="col-sm-6">
                            <input type="checkbox" <?php if(!isset($setting->captcha_status)){ $setting->captcha_status = 1;} if($setting->captcha_status == 1) { echo 'checked'; } else { echo ''; } ?>  
                            id="captcha_status" value="1" name="captcha_status"> 

                            <!-- form_checkbox( ); -->
                        </div>
                        <span class="col-sm-4">
                            <?php echo form_error('captcha_status'); ?>
                        </span>
                    </div>

                    

                    <div class="form-group <?php if(form_error('recaptcha_site_key')) { echo 'has-error'; } ?>" id="recaptcha_site_key_id" >
                        <label for="recaptcha_site_key" class="col-sm-2 control-label">
                            <?=$this->lang->line("setting_school_recaptcha_site_key")?>
                            &nbsp;<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="bottom" title="Set recaptcha site key. Becareful If it's invalid then you cann't login."></i>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="recaptcha_site_key" name="recaptcha_site_key" value="<?=set_value('recaptcha_site_key', $setting->recaptcha_site_key)?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('recaptcha_site_key'); ?>
                        </span>
                    </div>

                    <div class="form-group <?php if(form_error('recaptcha_secret_key')) { echo 'has-error'; } ?>" id="recaptcha_secret_key_id" >
                        <label for="recaptcha_secret_key" class="col-sm-2 control-label">
                            <?=$this->lang->line("setting_school_recaptcha_secret_key")?>
                            &nbsp;<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="bottom" title="Set recaptcha secret key. Becareful If it's invalid then you cann't login."></i>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="recaptcha_secret_key" name="recaptcha_secret_key" value="<?=set_value('recaptcha_secret_key', $setting->recaptcha_secret_key)?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('recaptcha_secret_key'); ?>
                        </span>
                    </div>


                    <div class="form-group <?php if(form_error('language_status')) { echo 'has-error'; } ?>">
                        <label class="col-sm-2 control-label">
                            <?=$this->lang->line("setting_school_disable_language")?>&nbsp; <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="bottom" title="Check for disable language in top section"></i>
                        </label>
                        <div class="col-sm-6">
                            <input type="checkbox" <?php if(!isset($setting->language_status)){ $setting->language_status = 1;} if($setting->language_status == 1) { echo 'checked'; } else { echo ''; } ?>  
                            id="language_status" value="1" name="language_status"> 

                            <!-- form_checkbox( ); -->
                        </div>
                        <span class="col-sm-4">
                            <?php echo form_error('language_status'); ?>
                        </span>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <input type="submit" class="btn btn-success" value="<?=$this->lang->line("update_setting")?>" >
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<div class="box" style="margin-bottom: 40px" >
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-th-large"></i> <?=$this->lang->line('backend_theme_setting')?></h3>

    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
                
                <ul class="list-unstyled clearfix">
                    <?php 
                        if(count($themes)) {
                            foreach ($themes as $theme) {
                    ?>
                    
                    <li class="backendThemeMainWidht" style="float:left; padding: 5px;">
                        <a id="<?=$theme->themesID?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?=$theme->themename?>"

                         data-skin="skin-green-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4); cursor: pointer;" class="clearfix full-opacity-hover backendThemeEvent">
                            <div>
                                <span class="backendThemeHeadHeight" style="display:block; width: 20%; float: left; background-color: <?=$theme->topcolor?>" >
                                    
                                </span>

                                <span class="backendThemeHeadHeight" style="display:block; width: 80%; float: left; background-color: <?=$theme->topcolor?>">
                                </span>
                            </div>

                            <div>
                                <span class="backendThemeBodyHeight" style="display:block; width: 20%; float: left; background-color: <?=$theme->leftcolor?>">
                                </span>
                                <span class="backendThemeBodyHeight" style="display:block; width: 80%; float: left; background: #f4f5f7" id="themeBodyContent-<?=strtolower(str_replace(' ', '', $theme->themename))?>">
                                <?php  ?>
                                        <?php if($setting->backend_theme == strtolower(str_replace(' ', '', $theme->themename)))  {?>
                                        <center class="backendThemeBodyMargin">
                                            <button type="button" class="btn btn-danger">
                                                <i  class="fa fa-check-circle"></i>
                                            </button>
                                        </center>
                                        <?php } ?>
                                </span>
                            </div>
                        </a>
                        <p class="text-center no-margin" style="font-size: 12px">
                            <?=$theme->themename?>
                        </p>
                    </li>


                    <?php            
                            }
                        }
                    ?>
                </ul>

            </div>
        </div>
    </div>
</div>

<?php if(form_error('recaptcha_site_key') || form_error('recaptcha_secret_key')) { dump('in'); ?>
<script type="text/javascript">
    $('#recaptcha_site_key_id').show(); 
    $('#recaptcha_secret_key_id').show();  
</script>
<?php } ?>

<script type="text/javascript">
    $(document).ready(function() {
        $('.backendThemeEvent').click(function() {
            var id = $(this).attr('id');
            if(id) {
                $.ajax({
                    type: 'POST',
                    // dataType: "json",
                    url: "<?=base_url('setting/backendtheme')?>",
                    data: "id=" + id,
                    dataType: "html",
                    success: function(data) {
                        $('#headStyleCSSLink').attr('href', "<?=base_url('assets/inilabs/themes/')?>"+data+"/style.css");
                        $('#headInilabsCSSLink').attr('href', "<?=base_url('assets/inilabs/themes/')?>"+data+"/inilabs.css");
                        
                        $html = '<center class="backendThemeBodyMargin"><button type="button" class="btn btn-danger"><i  class="fa fa-check-circle"></i></button></center>';
                        $('.backendThemeBodyMargin').hide();
                        $('#themeBodyContent-'+data).html($html);
                        if(data) {
                            toastr["success"]("<?=$this->lang->line('menu_success');?>")
                            toastr.options = {
                                "closeButton": true,
                                "debug": false,
                                "newestOnTop": false,
                                "progressBar": false,
                                "positionClass": "toast-top-right",
                                "preventDuplicates": false,
                                "onclick": null,
                                "showDuration": "500",
                                "hideDuration": "500",
                                "timeOut": "5000",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                            }
                        }
                    }
                });
            }
        });
    });

    $(document).ready(function() {
        checkedStatus();
    });

    function checkedStatus(checkedStatus = "<?=$setting->captcha_status?>") {
        if(checkedStatus == false) {
            $(this).prop("checked", true);
            $('#recaptcha_site_key_id').show(300); 
            $('#recaptcha_secret_key_id').show(300);  
        } else {
            $(this).prop("checked", false);
            $('#recaptcha_site_key_id').hide(300); 
            $('#recaptcha_secret_key_id').hide(300); 
        }
    }

    $('#captcha_status').click(function() {
        if($(this).prop('checked')) {
            checkedStatus($(this).prop('checked'));  
        } else {
            checkedStatus($(this).prop('checked'));
            $(this).prop("checked", false);
        }
    });


    $(document).on('click', '#close-preview', function(){ 
        $('.image-preview').popover('hide');
        // Hover befor close the preview
        $('.image-preview').hover(
            function () {
               $('.image-preview').popover('show');
               $('.content').css('padding-bottom', '120px');
            }, 
             function () {
               $('.image-preview').popover('hide');
               $('.content').css('padding-bottom', '20px');
            }
        );    
    });

    $(function() {
        // Create the close button
        var closebtn = $('<button/>', {
            type:"button",
            text: 'x',
            id: 'close-preview',
            style: 'font-size: initial;',
        });
        closebtn.attr("class","close pull-right");
        // Set the popover default content
        $('.image-preview').popover({
            trigger:'manual',
            html:true,
            title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
            content: "There's no image",
            placement:'bottom'
        });
        // Clear event
        $('.image-preview-clear').click(function(){
            $('.image-preview').attr("data-content","").popover('hide');
            $('.image-preview-filename').val("");
            $('.image-preview-clear').hide();
            $('.image-preview-input input:file').val("");
            $(".image-preview-input-title").text("<?=$this->lang->line('setting_file_browse')?>"); 
        }); 
        // Create the preview image
        $(".image-preview-input input:file").change(function (){     
            var img = $('<img/>', {
                id: 'dynamic',
                width:250,
                height:200,
                overflow:'hidden'
            });      
            var file = this.files[0];
            var reader = new FileReader();
            // Set preview image into the popover data-content
            reader.onload = function (e) {
                $(".image-preview-input-title").text("<?=$this->lang->line('setting_clear')?>");
                $(".image-preview-clear").show();
                $(".image-preview-filename").val(file.name);            
                img.attr('src', e.target.result);
                $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
                $('.content').css('padding-bottom', '120px');
            }        
            reader.readAsDataURL(file);
        });  
    });

    $( ".select2" ).select2( { placeholder: "", maximumSelectionSize: 6 } );
</script>