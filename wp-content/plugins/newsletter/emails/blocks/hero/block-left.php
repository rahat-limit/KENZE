<style>
    /* Styles which will be removed and injected in the replacing the matching "inline-class" attribute */
    .title {
        font-family: <?php echo $title_style->font_family ?>;
        font-size: <?php echo $title_style->font_size ?>px;
        font-weight: <?php echo $title_style->font_weight ?>;
        color: <?php echo $title_style->font_color ?>;
        margin: 0;
        text-align: center;
        line-height: normal;
        padding: 10px 0;
    }
    .text {
        font-family: <?php echo $text_style->font_family ?>;
        font-size: <?php echo $text_style->font_size ?>px;
        font-weight: <?php echo $text_style->font_weight ?>;
        color: <?php echo $text_style->font_color ?>;
        padding: 10px 0;
        line-height: 1.5em;
        margin: 0;
        text-align: center;
    }

    .button {
        padding: 10px 0;
    }
</style>

<table width="<?php echo $td_width ?>" align="left" class="responsive" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td align="center" valign="top">
            <?php echo TNP_Composer::image($media); ?>
        </td>
    </tr>
</table>

<table width="<?php echo $td_width ?>" align="right" class="responsive" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td inline-class="title">
            <?php echo $options['title'] ?>
        </td>
    </tr>
    <tr>
        <td inline-class="text">
            <?php echo $options['text'] ?>
        </td>
    </tr>

    <tr>
        <td align="center" inline-class="button">
            <?php echo TNP_Composer::button($button_options) ?>
        </td>
    </tr>

</table>
