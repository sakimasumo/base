<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>孫の手本舗|確認画面</title>
</head>
<body>
  <?php
2
$name = $_POST['name'];
3
$furigana = $_POST['furigana'];
4
$address = $_POST['address'];
5
$tel = $_POST['tel'];
6
$otoiawase = $_POST['content'];
7
?>

  <style type="text/css">
02
input[readonly] {
03
    background-color: #CCC;
04
}
05

06
.gray_bg {
07
    background-color: #CCC;
08
}
09
</style>
10
<form action="submit.php" method="post" name="myform">
11
<table width="100%">
12
<tbody><tr>
13
    <td>お名前</td>
14
    <td><input type="text" name="name" readonly="readonly" value=""></td>
15
</tr>
16
<tr>
17
    <td>フリガナ</td>
18
    <td><input type="text" name="furigana" readonly="readonly" value=""></td>
19
</tr>
20
<tr>
21
    <td>メールアドレス</td>
22
    <td><input type="text" name="address" readonly="readonly" value=""></td>
23
</tr>
24
<tr>
25
    <td>電話番号</td>
26
    <td><input type="text" name="tel" readonly="readonly" value=""></td>
27
</tr>
28
<tr>
29
    <td>お問い合わせ内容</td>
30
    <td><textarea name="otoiawase" class="gray_bg" readonly=""></textarea></td>
31
</tr>
32
</tbody></table>
33
<input type="submit" value="送信する">
34
</form>

</body>
</html>
