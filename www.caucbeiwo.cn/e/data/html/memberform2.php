<?php
if(!defined('InEmpireCMS'))
{exit();}
?><table width='100%' align='center' cellpadding=3 cellspacing=1 bgcolor='#DBEAF5'><tr><td width='16%' height=25 bgcolor='ffffff'>组织名称*</td><td bgcolor='ffffff'><input name="company" type="text" id="company" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($addr[company]))?>" size="38">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>联系人*</td><td bgcolor='ffffff'>
<input name="truename" type="text" id="truename" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($addr[truename]))?>">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>联系电话*</td><td bgcolor='ffffff'><input name="mycall" type="text" id="mycall" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($addr[mycall]))?>">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>传真</td><td bgcolor='ffffff'>
<input name="fax" type="text" id="fax" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($addr[fax]))?>">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>手机</td><td bgcolor='ffffff'><input name="phone" type="text" id="phone" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($addr[phone]))?>">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>QQ号码</td><td bgcolor='ffffff'><input name="oicq" type="text" id="oicq" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($addr[oicq]))?>">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>微信</td><td bgcolor='ffffff'><input name="msn" type="text" id="msn" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($addr[msn]))?>">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>网址</td><td bgcolor='ffffff'>
<input name="homepage" type="text" id="homepage" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($addr[homepage]))?>">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>组织头像*</td><td bgcolor='ffffff'><input type="file" name="userpicfile">&nbsp;&nbsp;
<?=empty($addr[userpic])?"":"<img src='".htmlspecialchars(stripSlashes($addr[userpic]))."' border=0>"?></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>联系地址</td><td bgcolor='ffffff'><input name="address" type="text" id="address" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($addr[address]))?>" size="50">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>邮编</td><td bgcolor='ffffff'><input name="zip" type="text" id="zip" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($addr[zip]))?>" size="8">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>组织介绍</td><td bgcolor='ffffff'><textarea name="saytext" cols="65" rows="10" id="saytext"><?=$ecmsfirstpost==1?"":stripSlashes($addr[saytext])?></textarea>
</td></tr></table>