<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewssearch`;");
E_C("CREATE TABLE `phome_enewssearch` (
  `searchid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keyboard` varchar(255) NOT NULL DEFAULT '',
  `searchtime` int(10) unsigned NOT NULL DEFAULT '0',
  `searchclass` varchar(255) NOT NULL DEFAULT '',
  `result_num` int(10) unsigned NOT NULL DEFAULT '0',
  `searchip` varchar(20) NOT NULL DEFAULT '',
  `classid` varchar(255) NOT NULL DEFAULT '',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `orderby` varchar(30) NOT NULL DEFAULT '0',
  `myorder` tinyint(1) NOT NULL DEFAULT '0',
  `checkpass` varchar(32) NOT NULL DEFAULT '',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `iskey` tinyint(1) NOT NULL DEFAULT '0',
  `andsql` text NOT NULL,
  `trueclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`),
  KEY `checkpass` (`checkpass`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewssearch` values('1',0xe79a84,'1481527238',0x7469746c65,'12',0x3139322e3136382e312e31,'','7',0x6e65777374696d65,'0',0x6466386366633434373438376462333661393833333632616635353361333435,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e79a8425272929,'0');");
E_D("replace into `phome_enewssearch` values('2',0xe5a4a7e59ca3,'1474441230',0x7469746c65,'4',0x34322e3233302e31362e313634,'','2',0x6e65777374696d65,'0',0x6161336564353539626539353935633036646631633265396337343066643738,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e5a4a7e59ca325272929,'0');");
E_D("replace into `phome_enewssearch` values('3',0x707364,'1456849608',0x7469746c65,'1',0x3131362e32342e3137392e313533,'','1',0x6e65777374696d65,'0',0x3561376231626332646264336466373662363537383931316531333262653938,0x6e657773,'1','0',0x20616e642028287469746c65204c494b4520272570736425272929,'0');");
E_D("replace into `phome_enewssearch` values('4',0xe8b4ade4b9b0,'1457733808',0x7469746c65,'2',0x31342e3133352e3231342e3131,'','2',0x6e65777374696d65,'0',0x3565393932373739373139363736313034636666626534326664323732643235,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e8b4ade4b9b025272929,'0');");
E_D("replace into `phome_enewssearch` values('5',0x5649e8aebee8aea1,'1457158262',0x7469746c65,'1',0x33392e37382e3133352e313231,'','1',0x6e65777374696d65,'0',0x3733313633653035396431623437326232303337323364356166646661623231,0x6e657773,'1','0',0x20616e642028287469746c65204c494b452027255649e8aebee8aea125272929,'0');");
E_D("replace into `phome_enewssearch` values('6',0xe5908de789874c4f474f,'1457237896',0x7469746c65,'1',0x3131392e3131372e3131342e313438,'','1',0x6e65777374696d65,'0',0x3534353135333234613532323365326239346635343231323763303864373763,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e5908de789874c4f474f25272929,'0');");
E_D("replace into `phome_enewssearch` values('7',0xe9a284e5918a,'1457508224',0x7469746c65,'3',0x3132342e3139332e3132352e313632,'','1',0x6e65777374696d65,'0',0x6362326462383938336364366532373863376335633966396337346639653733,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e9a284e5918a25272929,'0');");
E_D("replace into `phome_enewssearch` values('8',0xe58699e5ae9e,'1458070523',0x7469746c65,'1',0x36312e3135342e3230352e313738,'','1',0x6e65777374696d65,'0',0x3464353162386538396133333536666162383861386134643431333036393039,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e58699e5ae9e25272929,'0');");
E_D("replace into `phome_enewssearch` values('9',0xe8aebee8aea1,'1494949760',0x7469746c65,'7',0x32372e3135302e3130332e313530,'','4',0x6e65777374696d65,'0',0x3662623634623439643362333565333139366639643438616136366530616636,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e8aebee8aea125272929,'0');");
E_D("replace into `phome_enewssearch` values('10',0xe7bd91e9a1b5,'1460459152',0x7469746c65,'1',0x32372e3135302e3130332e313530,'','1',0x6e65777374696d65,'0',0x3064633066343539653535356264343664333433386130363863643735333638,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e7bd91e9a1b525272929,'0');");
E_D("replace into `phome_enewssearch` values('11',0xe5b89de59bbd,'1487216101',0x7469746c65,'2',0x32372e3135302e3130332e313530,'','3',0x6e65777374696d65,'0',0x6330663937386435663130386336313335383936353139303864303862653631,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e5b89de59bbd25272929,'0');");
E_D("replace into `phome_enewssearch` values('12',0xe6b58be8af95,'1460973699',0x7469746c65,'2',0x3232322e38332e3139322e313037,'','2',0x6e65777374696d65,'0',0x6133393066636265346334343135306135313364653130633032353564336361,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e6b58be8af9525272929,'0');");
E_D("replace into `phome_enewssearch` values('13',0x32303136,'1486268532',0x7469746c65,'2',0x34392e3131392e32382e323337,'','3',0x6e65777374696d65,'0',0x3066303334303135356365353539666536376366623666343831306365366230,0x6e657773,'1','0',0x20616e642028287469746c65204c494b452027253230313625272929,'0');");
E_D("replace into `phome_enewssearch` values('14',0xe5bfabe4b990,'1463068823',0x7469746c65,'1',0x3131382e3138322e3131362e3534,'','1',0x6e65777374696d65,'0',0x3534306561346438323164363130373861313030383261356432306162643463,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e5bfabe4b99025272929,'0');");
E_D("replace into `phome_enewssearch` values('15',0xe6ba90e7a081,'1463405025',0x7469746c65,'2',0x34392e38372e3137382e313936,'','1',0x6e65777374696d65,'0',0x3932616333643331663538653736643632633062646636663931616339343631,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e6ba90e7a08125272929,'0');");
E_D("replace into `phome_enewssearch` values('16',0xe587bae997a8,'1463405062',0x7469746c65,'1',0x34392e38372e3137382e313936,'','1',0x6e65777374696d65,'0',0x6264643537353632376661323362633161356237343438373034353331383466,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e587bae997a825272929,'0');");
E_D("replace into `phome_enewssearch` values('17',0xe8b4ade4b9b0e69cace5b89de59bbd,'1467165222',0x7469746c65,'2',0x36302e372e3130352e323338,'','1',0x6e65777374696d65,'0',0x6162366565653866373033623766386136643139626236393733343663373261,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e8b4ade4b9b0e69cace5b89de59bbd25272929,'0');");
E_D("replace into `phome_enewssearch` values('18',0xe698af,'1467462782',0x7469746c65,'1',0x3131362e332e3134392e313735,'','1',0x6e65777374696d65,'0',0x6538376561653463396361393335666561323837326566306362363432303631,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e698af25272929,'0');");
E_D("replace into `phome_enewssearch` values('19',0xe9a696e5b094,'1481553208',0x7469746c65,'1',0x33362e36332e3132322e323238,'','2',0x6e65777374696d65,'0',0x3031306562376663613461643332313638613532373637633430353733656332,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e9a696e5b09425272929,'0');");
E_D("replace into `phome_enewssearch` values('20',0x3230,'1486268638',0x7469746c65,'2',0x3132302e36382e34392e313231,'','1',0x6e65777374696d65,'0',0x6139643432643364303362313762386438323537396662336236363565306130,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725323025272929,'0');");
E_D("replace into `phome_enewssearch` values('21',0xe4b88be8bdbd,'1494594387',0x7469746c65,'4',0x3138302e3132312e3132382e3730,'','1',0x6e65777374696d65,'0',0x3034356237643732353732376431303038646632633237623165323062353261,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e4b88be8bdbd25272929,'0');");
E_D("replace into `phome_enewssearch` values('22',0xe58aa8e6bcab,'1494949822',0x7469746c65,'1',0x3131352e3233362e3138302e3736,'','1',0x6e65777374696d65,'0',0x6165343664383562396665336364373831653536363562386231626164376631,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e58aa8e6bcab25272929,'0');");
E_D("replace into `phome_enewssearch` values('23',0x5549,'1494950353',0x7469746c65,'1',0x3131352e3233362e3138302e3736,'','1',0x6e65777374696d65,'0',0x3135653365653963383032306562333333626431373032653066613138623439,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725554925272929,'0');");

@include("../../inc/footer.php");
?>