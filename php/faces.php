<?php
function smiley($quote) {

$code = array();
$code[0] = "/:act/";
$code[1] = "/:awesome/";
$code[2] = "/:ay/";
$code[3] = "/:baby/";
$code[4] = "/:badpoker/";
$code[5] = "/:baww/";
$code[6] = "/:grin/";
$code[7] = "/:cereal/";
$code[8] = "/:spit/";
$code[9] = "/:ca/";
$code[10] = "/:ce/";
$code[11] = "/:cochran/";
$code[12] = "/:dance/";
$code[13] = "/:datash/";
$code[14] = "/:derp/";
$code[15] = "/:determined/";
$code[16] = "/:disgust/";
$code[17] = "/:down/";
$code[18] = "/:dude/";
$code[19] = "/:ewbte/";
$code[20] = "/:et/";
$code[21] = "/:fal/";
$code[22] = "/:fap/";
$code[23] = "/:fg/";
$code[24] = "/:fuuu/";
$code[25] = "/:fa/";
$code[26] = "/:friends/";
$code[27] = "/:rich/";
$code[28] = "/:fyea/";
$code[29] = "/:fff/";
$code[30] = "/:fum/";
$code[31] = "/:gasp/";
$code[32] = "/:gay/";
$code[33] = "/:gtfo/";
$code[34] = "/:happy/";
$code[35] = "/:hehehe/";
$code[36] = "/:herp/";
$code[37] = "/:high/";
$code[38] = "/:he/";
$code[39] = "/:disappoint/";
$code[40] = "/:notok/";
$code[41] = "/:jc/";
$code[42] = "/:kidding/";
$code[43] = "/:lie/";
$code[44] = "/:lod/";
$code[45] = "/:lol/";
$code[46] = "/:mad/";
$code[47] = "/:mg/";
$code[48] = "/:m/";
$code[49] = "/:milk/";
$code[50] = "/:mouthopen/";
$code[51] = "/:np/";
$code[52] = "/:newstear/";
$code[53] = "/:no/";
$code[54] = "/:notbad/";
$code[55] = "/:ohno/";
$code[56] = "/:ok/";
$code[57] = "/:openmouth/";
$code[58] = "/:pff/";
$code[59] = "/:pickle/";
$code[60] = "/:poker/";
$code[61] = "/:t/";
$code[62] = "/:racket/";
$code[63] = "/:rage/";
$code[64] = "/:redeyes/";
$code[65] = "/:sadm/";
$code[66] = "/:st/";
$code[67] = "/:sh/";
$code[68] = "/:side/";
$code[69] = "/:smirk/";
$code[70] = "/:win/";
$code[71] = "/:sd/";
$code[72] = "/:steve/";
$code[73] = "/:stfi/";
$code[74] = "/:susp/";
$code[75] = "/:tdadjump/";
$code[76] = "/:th/";
$code[77] = "/:tongue/";
$code[78] = "/:tdad/";
$code[79] = "/:ts/";
$code[80] = "/:ub/";
$code[81] = "/:up/";
$code[82] = "/:wasted/";
$code[83] = "/:water/";
$code[84] = "/:what/";
$code[85] = "/:why/";
$code[86] = "/:wut/";
$code[87] = "/:yam/";
$code[88] = "/:yao/";
$code[89] = "/:yuno/";
$code[90] = "/:all/";
$code[91] = "/:flip/";
$code[92] = "/:god/";
$code[93] = "/:impossibru/";
$code[94] = "/:badass/";
$code[95] = "/:picard/";
$code[96] = "/:ogw/";
$code[97] = "/:aliens/";
$code[98] = "/sad.png					:sad/";
$code[99] = "/wat.jpg					:wat/";

$img = array();
$img[0] = "<img src=\"troll/actually.png\" alt=\"!act\" />";
$img[1] = "<img src=\"troll/awesome.png\" alt=\"!awesome\" />";
$img[2] = "<img src=\"troll/awyeah.png\" alt=\"!ay\" />";
$img[3] = "<img src=\"troll/babytroll.png\" alt=\"!baby\" />";
$img[4] = "<img src=\"troll/badpokerface.png\" alt=\"!badpoker\" />";
$img[5] = "<img src=\"troll/baww.png\" alt=\"!baww\" />";
$img[6] = "<img src=\"troll/biggrin.png\" alt=\"!grin\" />";
$img[7] = "<img src=\"troll/cereal.png\" alt=\"!cereal\" />";
$img[8] = "<img src=\"troll/cerealspitting.png\" alt=\"!spit\" />";
$img[9] = "<img src=\"troll/challengeaccepted.png\" alt=\"!ca\" />";
$img[10] = "<img src=\"troll/closeenough.png\" alt=\"!ce\" />";
$img[11] = "<img src=\"troll/cochran.gif\" alt=\"!cochran\" />";
$img[12] = "<img src=\"troll/dance.gif\" alt=\"!dance\" />";
$img[13] = "<img src=\"troll/datash.jpg\" alt=\"!datash\" />";
$img[14] = "<img src=\"troll/derp.png\" alt=\"!derp\" />";
$img[15] = "<img src=\"troll/determined.png\" alt=\"!determined\" />";
$img[16] = "<img src=\"troll/disgusted.png\" alt=\"!disgust\" />";
$img[17] = "<img src=\"troll/down.png\" alt=\"!down\" />";
$img[18] = "<img src=\"troll/dudecomeon.png\" alt=\"!dude\" />";
$img[19] = "<img src=\"troll/ewbte.png\" alt=\"!ewbte\" />";
$img[20] = "<img src=\"troll/excitedtroll.png\" alt=\"!et\" />";
$img[21] = "<img src=\"troll/falbulous.gif\" alt=\"!fal\" />";
$img[22] = "<img src=\"troll/fapfap.png\" alt=\"!fap\" />";
$img[23] = "<img src=\"troll/feelsgood.png\" alt=\"!fg\" />";
$img[24] = "<img src=\"troll/fffuuu.png\" alt=\"!fuuu\" />";
$img[25] = "<img src=\"troll/foreveralone.png\" alt=\"!fa\" />";
$img[26] = "<img src=\"troll/friends.png\" alt=\"!friends\" />";
$img[27] = "<img src=\"troll/fu.png\" alt=\"!rich\" />";
$img[28] = "<img src=\"troll/fuckyea.png\" alt=\"!fyea\" />";
$img[29] = "<img src=\"troll/fullpanel.png\" alt=\"!fff\" />";
$img[30] = "<img src=\"troll/fumanchu.jpg\" alt=\"!fum\" />";
$img[31] = "<img src=\"troll/gasp.png\" alt=\"!gasp\" />";
$img[32] = "<img src=\"troll/gaytroll.png\" alt=\"!gay\" />";
$img[33] = "<img src=\"troll/gtfo.png\" alt=\"!gtfo\" />";
$img[34] = "<img src=\"troll/happy.png\" alt=\"!happy\" />";
$img[35] = "<img src=\"troll/hehehe.png\" alt=\"!hehehe\" />";
$img[36] = "<img src=\"troll/herpderp.png\" alt=\"!herp\" />";
$img[37] = "<img src=\"troll/high.png\" alt=\"!high\" />";
$img[38] = "<img src=\"troll/highexpectations.jpg\" alt=\"!he\" />";
$img[39] = "<img src=\"troll/iamdisappointed.png\" alt=\"!disappoint\" />";
$img[40] = "<img src=\"troll/itsnotokay.png\" alt=\"!notok\" />";
$img[41] = "<img src=\"troll/jackiechan.jpg\" alt=\"!jc\" />";
$img[42] = "<img src=\"troll/kidding.png\" alt=\"!kidding\" />";
$img[43] = "<img src=\"troll/lied.png\" alt=\"!lie\" />";
$img[44] = "<img src=\"troll/lod.jpg\" alt=\"!lod\" />";
$img[45] = "<img src=\"troll/lolnotext.png\" alt=\"!lol\" />";
$img[46] = "<img src=\"troll/mad.png\" alt=\"!mad\" />";
$img[47] = "<img src=\"troll/megusta.png\" alt=\"!mg\" />";
$img[48] = "<img src=\"troll/melvin.png\" alt=\"!m\" />";
$img[49] = "<img src=\"troll/milk.png\" alt=\"!milk\" />";
$img[50] = "<img src=\"troll/mouthopen.png\" alt=\"!mouthopen\" />";
$img[51] = "<img src=\"troll/newspaperguy.png\" alt=\"!np\" />";
$img[52] = "<img src=\"troll/newspaperguytear.png\" alt=\"!newstear\" />";
$img[53] = "<img src=\"troll/no.png\" alt=\"!no\" />";
$img[54] = "<img src=\"troll/notbad.jpg\" alt=\"!notbad\" />";
$img[55] = "<img src=\"troll/ohno.png\" alt=\"!ohno\" />";
$img[56] = "<img src=\"troll/okay.png\" alt=\"!ok\" />";
$img[57] = "<img src=\"troll/openmouth.png\" alt=\"!openmouth\" />";
$img[58] = "<img src=\"troll/pffftcchchchhfffttt.png\" alt=\"!pff\" />";
$img[59] = "<img src=\"troll/pickle.png\" alt=\"!pickle\" />";
$img[60] = "<img src=\"troll/pokerface.png\" alt=\"!poker\" />";
$img[61] = "<img src=\"troll/problem.png\" alt=\"!t\" />";
$img[62] = "<img src=\"troll/racket.jpg\" alt=\"!racket\" />";
$img[63] = "<img src=\"troll/rage2.png\" alt=\"!rage\" />";
$img[64] = "<img src=\"troll/redeyes.png\" alt=\"!redeyes\" />";
$img[65] = "<img src=\"troll/sadmelvin.png\" alt=\"!sadm\" />";
$img[66] = "<img src=\"troll/sadtroll.png\" alt=\"!st\" />";
$img[67] = "<img src=\"troll/shocked.png\" alt=\"!sh\" />";
$img[68] = "<img src=\"troll/sidemouth.png\" alt=\"!side\" />";
$img[69] = "<img src=\"troll/smirk.jpg\" alt=\"!smirk\" />";
$img[70] = "<img src=\"troll/somuchwin.png\" alt=\"!win\" />";
$img[71] = "<img src=\"troll/staredad.png\" alt=\"!sd\" />";
$img[72] = "<img src=\"troll/steve.jpg\" alt=\"!steve\" />";
$img[73] = "<img src=\"troll/stfi.jpg\" alt=\"!stfi\" />";
$img[74] = "<img src=\"troll/suspicious.png\" alt=\"!susp\" />";
$img[75] = "<img src=\"troll/tdadjump.png\" alt=\"!tdadjump\" />";
$img[76] = "<img src=\"troll/thoughtful.png\" alt=\"!th\" />";
$img[77] = "<img src=\"troll/tongue.png\" alt=\"!tongue\" />";
$img[78] = "<img src=\"troll/trolldad.png\" alt=\"!tdad\" />";
$img[79] = "<img src=\"troll/truestory.png\" alt=\"!ts\" />";
$img[80] = "<img src=\"troll/underbite.png\" alt=\"!ub\" />";
$img[81] = "<img src=\"troll/upvote.png\" alt=\"!up\" />";
$img[82] = "<img src=\"troll/wasted.png\" alt=\"!wasted\" />";
$img[83] = "<img src=\"troll/waterbottle.jpg\" alt=\"!water\" />";
$img[84] = "<img src=\"troll/what.png\" alt=\"!what\" />";
$img[85] = "<img src=\"troll/whywithhands.png\" alt=\"!why\" />";
$img[86] = "<img src=\"troll/wut.png\" alt=\"!wut\" />";
$img[87] = "<img src=\"troll/yam.png\" alt=\"!yam\" />";
$img[88] = "<img src=\"troll/yaoming.png\" alt=\"!yao\" />";
$img[89] = "<img src=\"troll/yuno.png\" alt=\"!yuno\" />";
$img[90] = "<img src=\"troll/all.png\" alt=\"!all\" />";
$img[91] = "<img src=\"troll/flip.png\" alt=\"!flip\" />";
$img[92] = "<img src=\"troll/god.png\" alt=\"!god\" />";
$img[93] = "<img src=\"troll/impossibru.png\" alt=\"!impossibru\" />";
$img[94] = "<img src=\"troll/badass.png\" alt=\"!badass\" />";
$img[95] = "<img src=\"troll/picard.png\" alt=\"!picard\" />";
$img[96] = "<img src=\"troll/ogw.png\" alt=\"!ogw\" />";
$img[97] = "<img src=\"troll/aliens.jpg\" alt=\"!aliens\" />";
$img[98] = "<img src=\"troll/sad.png					:sad\" alt=\"!sad.png					sad\" />";
$img[99] = "<img src=\"troll/wat.jpg					:wat\" alt=\"!wat.jpg					wat\" />";


  return preg_replace($code, $img, $quote);

}
?>
