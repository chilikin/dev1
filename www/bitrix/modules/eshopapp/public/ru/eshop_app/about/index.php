<?
require($_SERVER["DOCUMENT_ROOT"]."#SITE_DIR#eshop_app/headers.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("BodyClass", "page");
?>
<div class="about_item_description">
	<h1><?=htmlspecialcharsbx(COption::GetOptionString("main", "site_name", ""))?></h1>
</div>
<div class="about_item_description">
<h3>� ��������</h3>
	
<div class="ordering_container"> 
	<p class="p_small">�� ���� �������������� ��� �� ����� ����� ��������.</p>
	
	<p class="p_small">���� �������� ���� �������� � 1993 ����, � ��� ��������-������� ���� ����� �� ������ ���������, �������������� on-line ������� ����� � ���� � �������. �������� ���������������� �� ������� � ��������� ������� ������ ��� ��� ����, ��� � ��� ����� � ���������������� ���������, � ����� ��������� ��������� ���������.</p>
	
	<p class="p_small">�� ������ ������ �� ������������ ����� ������� ��������, ��������� ��������&ndash;��������� � ������� � ����� ���� ������ call-�����, ������� ���������� ��� ������������ ��������, ����� ������, ������ ��������, ������� ���� ����������������� ���������, ����������� ����� c ���������� �������� ������������ ������ �������.</p>
	
	<p class="p_small">�� ��� ����� � ��� ��������� ����������� ��������� � �������� ���������������, ����������� ���������� ������������������ ��������� �� ������������������� �����.</p>
	
	<p class="p_small">�� ����� ��������� ���, ��� � ��� ���� �� ����� ������� ������������� ������ � ������ � �������. </p>
	
	<p class="p_small"><b>�� ����� ����� � ����� �������:</b></p>
	
	<ul> 
		<li>�������� � ������������������� ����;</li>
		
		<li>����������� ������� ����� � ����;</li>
		
		<li>������������ �������� � ����������� �������;</li>
		
		<li>����� ������� � ��������;</li>
		
		<li>������� �������� �����;</li>
		
		<li>��� ������������ ������������ ������ ����������������� � ������ ��������;</li>
		
		<li>������� ����� � ����, �� ������ �� ���� ��� �����;</li>
		
		<li>������� ������������ ������ � �������� ��� ������������� ������;</li>
	</ul>
	
	<p class="p_small">�� ������ ���� ������� � ������ ���������. ���� � ��� ���� �����-���� ���������, �����������, ���������, ���������� ������ ������ ��������-�������� - ������ ���, � �� � �������������� ������ ���� ������ �� ��������:</p>
	
	<p class="p_small"><b>����������� �����</b>: <a href="mailto:sale@mobeshop" >sale@mobeshop</a></p>
</div>
</div>
<script>
	app.setPageTitle({"title" : "� ��������"});
</script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>