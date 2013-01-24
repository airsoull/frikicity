<meta charset="utf-8">
<table id="Tabla_01" width="100%" border="0" cellpadding="0" cellspacing="0" height="100%">
	<tr height="148">
		<td colspan="2" height="148">
			<img src="<?PHP echo Yii::app()->request->getBaseUrl(true).'/emailer/';?>Sin-titulo-1_01.gif" width="143" height="148" alt=""></td>
		<td colspan="4" background="<?PHP echo Yii::app()->request->getBaseUrl(true).'/emailer/';?>Sin-titulo-1_02.gif" height="148" width="100%">&nbsp;</td>
	</tr>
	<tr>
		<td width="142" height="100%">&nbsp;</td>
		<td colspan="4" height="100%" valign="top"><?PHP echo ucwords($nombre); ?><br><br><?PHP echo $mensaje; ?></td>
		<td width="57" height="100%">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="3" background="<?PHP echo Yii::app()->request->getBaseUrl(true).'/emailer/';?>Sin-titulo-1_06.gif" height="111">&nbsp;</td>
		<td width="83" height="111" background="<?PHP echo Yii::app()->request->getBaseUrl(true).'/emailer/';?>Sin-titulo-1_06.gif" valign="top"><a href="<?PHP echo Yii::app()->request->getBaseUrl(true).'/anuncio/actualizar/'.$id_mail; ?>">Click aquí si no quieres recibir más anuncios</a></td>
		<td colspan="2" height="111" background="<?PHP echo Yii::app()->request->getBaseUrl(true).'/emailer/';?>Sin-titulo-1_08.gif">&nbsp;</td>
	</tr>
</table>