<?php
/**
 *Template Name: Top Page
 */
get_header();
?>
	<div id="news1" class="news">
		<div class="article">
			<a href="javascript:btmOpen('fig05','../?p=24')">
				<H4>お知らせ</H4>
					<dl><dt>2014年6月25日</dt>
					<dd>島主コラムを更新しました。</dd></dl>
						<img id="arrow1" src="<?php bloginfo('template_url'); ?>/images/images/tmp_arrow-a.png">
			</a>
		</div>
	</div>
	<div id="news2" class="news">
		<div class="article">
			<a href="javascript:btmOpen('news','../?p=61')">
				<H4>お知らせ</H4>
					<dl><dt>2014年10月8日</dt>
					<dd>カオハガン・ハウス求人　2014年12月末まで</dd></dl>
						<img id="arrow2" src="<?php bloginfo('template_url'); ?>/images/images/tmp_arrow-a.png">
			</a>
		</div>
	</div>
	
	<div id="idx-cont_fig01" style="height: 1019px;">
		<article>
		<div class="idx-figCont">
			<div class="figImg"><img src="<?php bloginfo('template_url'); ?>/images/images/idx_ti_fig01.png" width="36" height="14" alt="fig01"></div>
				<div class="figTi">
					<H2>
					<?php 
						$post_id = 217;
						$queried_post = get_post($post_id);
						echo $queried_post->post_title;
					?>
					</H2>
				</div>
			<div class="figCopy"><?php echo category_description( get_cat_ID('fig01') ); ?> </div>
			<div class="figTxt">
			<?php
				$post_id = 217;
				$queried_post = get_post($post_id);
				echo $queried_post->post_content;
			?>
			</div>
			<!-- / .figTxt -->
			<div class="brushLine"></div>
			<div class="nav">
				<ul>
					<li><a href="javascript:btmOpen('fig01','../?p=69')">カオハガン島の概要</a></li>
					<li><a href="javascript:btmOpen('fig01','../?p=76')">島の沿革</a></li>
					<li><a href="javascript:btmOpen('fig01','../?p=84')" class="cnt">カオハガン2050</a></li>
					<li><a href="javascript:btmOpen('fig01','../?p=94')" class="cnt">NGO南の島から</a></li>
					<li><a href="javascript:btmOpen('fig01','../?p=98')" class="cnt">熱帯珊瑚礁保護区</a></li>
					<li><a href="javascript:btmOpen('fig01','../?p=105')" class="cnt">島主紹介</a></li>
				</ul>
			</div>
		</div>
		<!-- / .idx-figCont -->
		</article>
		<div class="idx-bkTop"><img src="<?php bloginfo('template_url'); ?>/images/images/idx_cnt_fig01_bk_t.png" width="339" height="443"></div>
		<div class="idx-bkMid" style="height: 287px;"></div>
		<div class="idx-bkBtm"><img src="<?php bloginfo('template_url'); ?>/images/images/idx_cnt_fig01_bk_b.png" width="339" height="325"></div>
	</div>
		<!-- / #idx-cont_fig01 -->
	
	<div id="idx-cont_fig02">
		<article>
		<div class="idx-figCont">
		<div class="figImg"><img src="<?php bloginfo('template_url'); ?>/images/images/idx_ti_fig02.png" width="38" height="14" alt="fig01"></div>
		<div class="figTi">
		<H2>
		<?php 
			$post_id = 223;
			$queried_post = get_post($post_id);
			echo $queried_post->post_title;
		?>
		</H2>
		</div>
		<div class="figCopy" id="figCopy2"><?php echo category_description( get_cat_ID('fig02') ); ?></div>
		<div class="figTxt fig02-figTxt">
		<?php
			$post_id = 223;
			$queried_post = get_post($post_id);
			echo $queried_post->post_content;
		?>
		</div>
		<!-- / .figTxt -->
		<div class="brushLine"></div>
		<div class="nav fig02-nav">
		<ul>
		             <li><a href="javascript:btmOpen('fig02','../?p=113')">島民のくらし</a></li>
		             <li><a href="javascript:btmOpen('fig02','../?p=116')">アクティビティ</a></li>
		             <li><a href="javascript:btmOpen('fig02','../?p=124')">カオハガンクラフト</a></li>
		           </ul>
		</div>
		</div>
		<!-- / .idx-figCont -->
		</article>
		<div class="idx-bkTop"><img src="<?php bloginfo('template_url'); ?>/images/images/idx_cnt_fig02_bk_t.png" width="513" height="246"></div>
		<script>
			if(window.matchMedia('(min-device-width: 320px) and (max-device-width: 480px)').matches){
				$("#idx-cont_fig02").append('<div class="idx-bkMid" style="height:65px;"></div>');
				$("#idx-cont_fig02").append('<div class="idx-bkMid" style="height:65px;"></div>');
				$("#idx-cont_fig02").append('<div class="idx-bkMid" style="height:65px;"></div>');
				$("#idx-cont_fig02").append('<div class="idx-bkMid" style="height:65px;"></div>');
			}
		</script>
		
		<div class="idx-bkMid fig02-idx-bkMid" style="height:65px;"></div>
		<div class="idx-bkBtm"><img src="<?php bloginfo('template_url'); ?>/images/images/idx_cnt_fig02_bk_b.png" width="513" height="300"></div>
	</div>
<!-- / #idx-cont_fig02 -->

	<div id="idx-cont_fig03">
		<article>
		<div class="idx-figCont">
		<div class="figImg"><img src="<?php bloginfo('template_url'); ?>/images/images/idx_ti_fig03.png" width="38" height="14" alt="fig01"></div>
		<div class="figTi">
		<H2>
		<?php 
			$post_id = 225;
			$queried_post = get_post($post_id);
			echo $queried_post->post_title;
		?>
		</H2>
		</div>
		<div class="figCopy" id="figCopy3"><?php echo category_description( get_cat_ID('fig03') ); ?></div>
		<div class="figTxt fig03-figTxt">
		<?php
			$post_id = 225;
			$queried_post = get_post($post_id);
			echo $queried_post->post_content;
		?>
		</div>
		<!-- / .figTxt -->
		<div class="brushLine"></div>
		<div class="nav fig03-nav">
		<ul>
		             <li><a href="javascript:btmOpen('fig03','../?p=127')">カオハガン・ハウス</a></li>
		             <li><a href="javascript:btmOpen('fig03','../?p=130')">島までのアクセス</a></li>
		             <li><a href="javascript:btmOpen('fig03','../?p=135')">宿泊費用</a></li>
		             <li><a href="javascript:btmOpen('fig03','../?p=139')">宿泊予約</a></li>
		             <li><a href="javascript:btmOpen('fig03','../?p=143')">一日体験ツアー</a></li>
		             <li><a href="javascript:btmOpen('fig03','../?p=147')">Q&amp;A</a></li>
		           </ul>
		</div>
		</div>
		<!-- / .idx-figCont -->
		</article>
		<div class="idx-bkTop"><img src="<?php bloginfo('template_url'); ?>/images/images/idx_cnt_fig03_bk_t.png" width="396" height="273"></div>
		<script>
			if(window.matchMedia('(min-device-width: 320px) and (max-device-width: 480px)').matches){
				$("#idx-cont_fig03").append('<div class="idx-bkMid" style="height:90px;"></div>');
			}
		</script>		
		<div class="idx-bkMid" style="height: 174px;"></div>
		<div class="idx-bkBtm"><img src="<?php bloginfo('template_url'); ?>/images/images/idx_cnt_fig03_bk_b.png" width="396" height="180"></div>
	</div>
	<!-- / #idx-cont_fig03 -->
	
	<div id="idx-cont_fig04">
		<article>
		<div class="idx-figCont fig04-idx-figCont">
		<div class="figImg"><img src="<?php bloginfo('template_url'); ?>/images/images/idx_ti_fig04.png" width="38" height="14" alt="fig01"></div>
		<div class="figTi">
		<H2>
		<?php 
			$post_id = 229;
			$queried_post = get_post($post_id);
			echo $queried_post->post_title;
		?>
		</H2>
		</div>
		<div class="figCopy" id="figCopy4"><?php echo category_description( get_cat_ID('fig04') ); ?></div>
		<div class="figTxt fig04-figTxt">
		<?php
			$post_id = 229;
			$queried_post = get_post($post_id);
			echo $queried_post->post_content;
		?>
		</div>
		<!-- / .figTxt -->
		<div class="brushLine"></div>
		<div class="nav fig04-nav">
		<ul>
		             <li><a href="javascript:btmOpen('fig04','../?p=153')">カオハガンキルトについて</a></li>
		             <li><a href="javascript:btmOpen('fig04','../?p=160')">カオハガンキルトギャラリー</a></li>
		             <li><a href="javascript:btmOpen('fig04','../?p=165')">CaohaganQuilt+Garden</a></li>
		           </ul>
		</div>
		</div>
		<!-- / .idx-figCont -->
		</article>
		<div class="idx-bkTop"><img src="<?php bloginfo('template_url'); ?>/images/images/idx_cnt_fig04_bk_t.png" width="545" height="247"></div>
		<script>
			if(window.matchMedia('(min-device-width: 320px) and (max-device-width: 480px)').matches){
				$("#idx-cont_fig04").append('<div class="idx-bkMid" style="height:147px;"></div>');
			}
		</script>	
		<div class="idx-bkMid" style="height: 180px;"></div>
		<div class="idx-bkBtm"><img src="<?php bloginfo('template_url'); ?>/images/images/idx_cnt_fig04_bk_b.png" width="545" height="241"></div>
	</div>
	<!-- / #idx-cont_fig04 -->
	
	<div id="idx-cont_fig05">
		<article>
		<div class="idx-figCont">
		<div class="figImg"><img src="<?php bloginfo('template_url'); ?>/images/images/idx_ti_fig05.png" width="38" height="14" alt="fig01"></div>
		<div class="figTi">
		<H2>
		<?php 
			$post_id = 231;
			$queried_post = get_post($post_id);
			echo $queried_post->post_title;
		?>
		</H2>
		</div>
		<div class="figDate">
		<?php 
			$post_id = 231;
			$queried_post = get_post($post_id);
			$month = date("m", strtotime($queried_post->post_date));
			$day = date("j", strtotime($queried_post->post_date));
			$year = date("Y", strtotime($queried_post->post_date));
			
			echo $year."年".$month."月".$day."日";
		?>
		</div>
		<div class="figTitle"><?php echo category_description( get_cat_ID('fig05') ); ?></div>
		<div class="figTxt fig05-figTxt">
		<?php 
			global $more; $more = FALSE;
			the_content('...');	
		
			$post_id = 231;
			$queried_post = get_post($post_id);
			echo $queried_post->post_content;
		?>
		</div>
		<!-- / .figTxt -->
		<div class="nav">
		<ul>
		             <li><a href="javascript:btmOpen('fig05','../?p=24')">続きを読む</a></li>
		           </ul>
		</div>
		</div>
		<!-- / .idx-figCont -->
		</article>
		<div class="idx-bkTop"><img src="<?php bloginfo('template_url'); ?>/images/images/idx_cnt_fig05_bk_t.png" width="395" height="280"></div>
		<script>
			if(window.matchMedia('(min-device-width: 320px) and (max-device-width: 480px)').matches){
				$("#idx-cont_fig05").append('<div class="idx-bkMid" style="height:35px;"></div>');
			}
		</script>	
		<div class="idx-bkMid" style="height: 102px;"></div>
		<div class="idx-bkBtm"><img src="<?php bloginfo('template_url'); ?>/images/images/idx_cnt_fig05_bk_b.png" width="395" height="280"></div>
	</div>
<!-- / #idx-cont_fig05 -->

<?php get_footer(); ?>