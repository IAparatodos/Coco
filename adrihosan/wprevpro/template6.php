<?php
//via text
if ( $review->type == "Manual" ) {
    $viatext = "<span class='wppro_viatext'> - eTrusted</span>";
}
?>
<div class="<?php echo $tempmasonrydiv; ?> outerrevdiv">
	<div class="wpproslider_t6_DIV_1a">
		<div class="indrevdiv wpproslider_t6_DIV_2 wprev_preview_bg1_T<?php echo $currentform[0]->style; ?><?php if($iswidget){echo "_widget";} ?> wprev_preview_bradius_T<?php echo $currentform[0]->style; ?><?php if($iswidget){echo "_widget";} ?>">
			<div class="wpproslider_t6_DIV_2_top">
				<div class="wpproslider_t6_DIV_3L" <?php echo $tempuserpicnone; ?>><?php echo $userpichtml; ?></div>
				<div class="wpproslider_t6_DIV_3">
					<div class="t6displayname wpproslider_t6_STRONG_5 wprev_preview_tcolor2_T<?php echo $currentform[0]->style; ?><?php if($iswidget){echo "_widget";} ?>"><?php echo $tempreviewername; ?><?php echo $companyhtml;?></div>
					<div class="wpproslider_t6_star_DIV"><span class="wprevpro_star_imgs_T<?php echo $currentform[0]->style; ?><?php if($iswidget){echo "_widget";} ?>"><?php echo $starhtml; ?><?php echo $verifiedstarhtmlarray[0]; ?></span></div>
					<div class="wpproslider_t6_SPAN_6 wprev_preview_tcolor2_T<?php echo $currentform[0]->style; ?><?php if($iswidget){echo "_widget";} ?>"><span class="wprev_showdate_T<?php echo $currentform[0]->style; ?><?php if($iswidget){echo "_widget";} ?>"><?php echo $datestring.$viatext; ?></span></div>
				</div>
			</div>
			<div class=" wpproslider_t6_DIV_4">
				<div class="wpproslider_t6_P_4 wprev_preview_tcolor1_T<?php echo $currentform[0]->style; ?><?php if($iswidget){echo "_widget";} ?>"> <?php echo $title; ?><?php echo stripslashes($reviewtext); ?><?php echo $verifiedstarhtmlarray[1]; ?> </div>
				<?php echo $media; ?> <?php echo $miscpichtml; ?> <?php echo $sourcepagenamehtml; ?> </div>
			<div class="wpproslider_t6_DIV_3_logo"><?php echo $logo; ?></div>
		</div>
	</div>
</div>
