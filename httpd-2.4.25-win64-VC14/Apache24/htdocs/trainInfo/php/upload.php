<?php
#echo $_FILES['inputFile']['name'];
#echo $_FILES['inputFile']['tmp_name'];//アップロードしたファイルのサーバ一時置き場（php.iniで指定されているはず「upload_tmp_dir」）

$xml = $_FILES['inputFile']['tmp_name'];//ファイルを指定
$xmlData = simplexml_load_file($xml);//xmlファイルを読み込む

$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/trainInfo/uploadDir/';
$uploadfile = $uploaddir . $_FILES['inputFile']['name'];

if (move_uploaded_file($_FILES['inputFile']['tmp_name'], $uploadfile)) {
    echo "アップロード完了しました。(" . $_FILES['inputFile']['name'] .")\n";
} else {
    echo "アップロードに失敗しました。\n";
}

?>
<table border="1">
	<thead>
		<tr>
		 <th bgcolor="#EE0000"><font color="#FFFFFF"></font>company_id</th>
		 <th bgcolor="#EE0000" width="150"><font color="#FFFFFF">company_nm</font></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($xmlData->m_company as $m_company) { ?>
		<tr>
			<td><?php echo $m_company->company_id; ?></td>
			<td><?php echo $m_company->company_nm; ?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<p>登録します。よろしいですか？<?php echo $uploadfile; ?></p>
<form action="/trainInfo/php/insertData2.php" method="post" enctype="multipart/form-data" >
	<input type="hidden" name="filename" value="<?php echo $uploadfile; ?>"/>
	<input type="submit" name="登録" value""/>
</form>
