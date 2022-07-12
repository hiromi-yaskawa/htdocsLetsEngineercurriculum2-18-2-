<link rel="stylesheet" href="answer.css" type="text/css">

<div id="style">
	<?php
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

?>
	<p> <?php
$my_name=$_POST['text'];
?>
		<!--POST通信で送られてきた名前を表示--><?php echo $my_name;?>さんの結果は・・・？
	</p>

	<span>
		<p>①の答え</p>
		<!--作成した関数を呼び出して結果を表示-->
		<?php

$question1=$_POST['question1'];
$answer1 =$_POST['answer1'];

if($question1==$answer1){
$result1="正解！";
}else{
$result1="残念・・・";
}
?>
		<?php echo $result1;?>

		<p>②の答え</p>
		<!--作成した関数を呼び出して結果を表示-->
		<?php
$question2 =$_POST['question2'];
$answer2 =$_POST['answer2'];

if($question2 == $answer2){
$result2 ="正解！";
}else {
$result2 ="残念・・・";
}
?>

		<?php echo $result2;?>
		<p>③の答え</p>
		<!--作成した関数を呼び出して結果を表示-->
		<?php
$question3 =$_POST['question3'];
$answer3 =$_POST['answer3'];

if($question3 == $answer3) {
$result3 ="正解！";
} else {
$result3 ="残念・・・";
}
?>

		<?php echo $result3;?>
</div>
</span>
