<?php
/* 
 * @var $options array contains all the options the current block we're ediging contains
 * @var $controls NewsletterControls 
 */

$default_options = array(
    'block_background'=>'#ffffff',
    
);

$options = array_merge($default_options, $options);
?>

<style>
    .CodeMirror {
        height: 400px;
    }
</style>

<script>
    var templateEditor;
    jQuery(function () {
        templateEditor = CodeMirror.fromTextArea(document.getElementById("options-html"), {
            lineNumbers: true,
            mode: 'htmlmixed',
            lineWrapping: true,
            //extraKeys: {"Ctrl-Space": "autocomplete"}
        });
    });
</script>

<table class="form-table">
    <tr>
        <td>
            <?php $controls->textarea('html') ?>
        </td>
    </tr>
</table>


<?php $fields->block_commons() ?>
