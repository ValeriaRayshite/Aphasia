

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<script>
function showInputNamedEducation() {
    var other = document.getElementById("other");
    if (other.checked) {
       document.getElementById("hidden").style.display='block';
   } else {
       document.getElementById("hidden").style.display='none';
   } 
}

function showInputNamedSpeech() {
    var other = document.getElementById("other1");
    if (other.checked) {
       document.getElementById("hidden1").style.display='block';
   } else {
       document.getElementById("hidden1").style.display='none';
   } 
}

function showInputNamedReaction1() {
       document.getElementById("hidden2").style.display='block';
}

function showInputNamedReaction2() {
	document.getElementById("hidden2").style.display='none';
}
</script>


<form action="/survey" method="post">
	
	<label for="name">Имя</label><br>
	<input type="text" name="name"><br>

	<label for="you">Вы являетесь</label><br>
	<input type="text" name="you"><br>

	<label for="email">Email</label><br>
	<input type="text" name="email"><br>

	<label for="age">Возраст пациента</label><br>
	<input type="text" name="age"><br>

	<label for="diagnosis">Диагноз</label><br>
	<input type="text" name="diagnosis"><br>
     
    <label for="handedness">Ведущая рука</label><br>
	<input type="radio" name="handedness" value="right-handed"> Правша<br>
	<input type="radio" name="handedness" value="lefthander"> Левша<br>
	<input type="radio" name="handedness" value="ambidexterity"> Амбидекстр (способен одинаково действовать обеими руками)<br>

	<label for="education">Образование</label><br>
	<input type="checkbox" name="education" value="high-school"> Среднее<br>
	<input type="checkbox" name="education" value="vocational"> Начальное профессиональное |  Средне-специальное<br>
	<input type="checkbox" name="education" value="undegraduate"> Высшее<br>
	<input type="checkbox" name="education" value="graduate"> Кандидатская или докторская степень<br>
	<input type="checkbox" name="education" value="other" id="other" onclick="showInputNamedEducation()"> Другое<br>
	<input type="text" name="education" id="hidden" style="display: none"><br>

	<label for="profession">Профессия</label><br>
	<input type="text" name="profession"><br>
	
	<label for="native language">Родной язык</label><br>
	<input type="text" name="native language"><br>
	
	<label for="ability of speaking foreign languages">Знание других языков</label><br>
	<input type="text" name="ability of speaking foreign languages"><br>

	<label for="speech disorders">Страдал ли другими нарушениями речи?</label><br>
	<input type="checkbox" name="speech disorders" value="stuttering"> Заикание<br>
	<input type="checkbox" name="speech disorders" value="Disorder of pronunciation"> Нарушения произношения («косноязычие», «картавость», нечеткое произношение и т.д.)<br>
	<input type="checkbox" name="speech disorders" value="other" id="other1" onclick="showInputNamedSpeech()"> Другое<br>
	<input type="text" name="speech disorders" id="hidden1" style="display: none"><br>

	<label for="сomorbidities">Сопутствующие заболевания (диабет, эпилепсия, глухота, психические заболевания, другие заболевания, которыми человек страдал до заболевания, приведшего к нарушению речи)</label><br>
	<input type="text" name="сomorbidities"><br>

	<label for="behavior">Общее поведение человека</label><br>
	<input type="radio" name="behavior" value="right-handed"> Большую часть времени лежит и спит<br>
	<input type="radio" name="behavior" value="right-handed"> Большую часть времени проводит в постели, смотрит телевизор, читает, делает что-либо<br>
	<input type="radio" name="behavior" value="right-handed"> Иногда встает, ходит с посторонней помощью<br>
	<input type="radio" name="behavior" value="right-handed"> Встает, ходит самостоятельно, садится за стол<br>
	<input type="radio" name="behavior" value="right-handed"> Ведет обычный образ жизни, ходит на работу, в магазин и т.д.<br>
	<input type="text" name="behavior"> Дополнительные сведения <br>

	<label for="understanding">Понимает ли человек обращенную к нему простую инструкцию или вопрос («Дай  руку», «Что делаешь?»)</label><br>
	<input type="radio" name="understanding" value="right-handed"> Понимает с первого раза <br>
	<input type="radio" name="understanding" value="lefthander"> Понимает частично и/или не с первого раза, требуется подсказка<br>
	<input type="radio" name="understanding" value="ambidexterity"> Не понимает<br>

	<label for="understanding by others">Понятна ли речь человека окружающим? </label><br>
	<input type="radio" name="understanding-by-others" value="right-handed"> Понятна полностью или почти полностью<br>
	<input type="radio" name="understanding-by-others" value="lefthander"> Понятна частично<br>
	<input type="radio" name="understanding-by-others" value="ambidexterity"> Почти полностью непонятна<br>
	<input type="radio" name="understanding-by-others" value="lefthander"> Совсем непонятна<br>
	<input type="radio" name="understanding-by-others" value="ambidexterity"> Человек молчит<br>

	<label for="reading">Может ли человек читать?</label><br>
	<input type="radio" name="reading" value="right-handed"> Да, понимает всё или почти всё<br>
	<input type="radio" name="reading" value="lefthander"> Да, но со значительным трудом<br>
	<input type="radio" name="reading" value="ambidexterity"> Нет<br>

	<label for="writing">Может ли человек писать?</label><br>
	<input type="radio" name="writing" value="right-handed"> Да<br>
	<input type="radio" name="writing" value="lefthander"> Да, но со значительными трудностями, ошибками<br>
	<input type="radio" name="writing" value="ambidexterity"> Пишет, но ничего непонятно<br>
	<input type="radio" name="writing" value="ambidexterity"> Нет<br>

!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	<label for="reaction">Есть ли странности в поведении (неадекватный смех, плач, неадекватные реакции и т.д.)?</label><br>
	<input type="radio" name="reaction" value="right-handed" onclick="name=showInputNamedReaction2()"> Нет<br>
	<input type="radio" name="reaction" value="other" id="other2" onclick="name=showInputNamedReaction1()"> Дa<br>
	<input type="text" name="reaction" value="other"  id="hidden2" style="display: none"><br>

	<label for="information">Дополнительные сведения</label><br>
	<textarea name="information" rows="10" cols="30"></textarea>

	<input type="submit" value="Submit">
</form>

















<form action="http://localhost/send" method="post">
	
	<label for="name">Name</label><br>
	<input type="text" name="name"><br>

	<label for="you">You are</label><br>
	<input type="text" name="you"><br>

	<label for="email">Email</label><br>
	<input type="text" name="email"><br>

	<label for="age">Age of patient</label><br>
	<input type="text" name="age"><br>

	<label for="diagnosis">Diagnosis</label><br>
	<input type="text" name="diagnosis"><br>
     
    <label for="handedness">Dominant hand</label><br>
	<input type="radio" name="handedness" value="right"> Right<br>
	<input type="radio" name="handedness" value="left"> Left<br>
	<input type="radio" name="handedness" value="ambidexterity"> Ambidexterity (able to use both hands)<br>

	<label for="education">Education</label><br>
	<input type="checkbox" name="education" value="high-school"> High-school<br>
	<input type="checkbox" name="education" value="vocational"> Trade | vocational | further<br>
	<input type="checkbox" name="education" value="undegraduate"> Undegraduate<br>
	<input type="checkbox" name="education" value="graduate"> Graduate<br>
	<input type="checkbox" name="education" value="other" id="other" onclick="selected()"> Other<br>
	<input type="text" name="education" id="hidden" style="display: none"><br>
	
	<label for="profession">Profession</label><br>
	<input type="text" name="profession"><br>
	
	<label for="diagnosis">Native language</label><br>
	<input type="text" name="native-language"><br>
	
	<label for="ability of speaking foreign languages">Ability of speaking foreign languages</label><br>
	<input type="text" name="ability of speaking foreign languages"><br>

	<label for="speech disorders">Does person suffer from any other speech or language disorders?</label><br>
	<input type="checkbox" name="speech disorders" value="stuttering"> Stuttering<br>
	<input type="checkbox" name="speech disorders" value="Disorder of pronunciation"> Disorder of pronunciation (speech sound disorders, articulation problems)<br>
	<input type="text" name="speech disorders"> Other<br>

	<label for="сomorbidities">Concomitant diseases (diabetes, epilepsy, deafness, mental illness, other disorders that predated to the disease leading to speech impairment)</label><br>
	<input type="text" name="сomorbidities"><br>

	<label for="behavior">Behavior in general</label><br>
	<input type="radio" name="behavior" value="right-handed"> Most of the time lying and sleeping <br>
	<input type="radio" name="behavior" value="right-handed"> Most of the time spending in the bed, watching TV, read, doing something<br>
	<input type="radio" name="behavior" value="right-handed"> Sometimes stands up, walks with help<br>
	<input type="radio" name="behavior" value="right-handed"> Gets up, walks without help, sits at the table<br>
	<input type="radio" name="behavior" value="right-handed"> Leads a normal life, goes to work, to shop, etc<br>
	<input type="text" name="behavior"> More information<br>

	<label for="understanding">Does the person understands simple request or question («Give me your hand», «What are you doing?»)</label><br>
	<input type="radio" name="understanding" value="right-handed"> Understands the first time<br>
	<input type="radio" name="understanding" value="lefthander"> Understands partially and/or does not understand the first time, a hint is needed<br>
	<input type="radio" name="understanding" value="ambidexterity"> Does not understand<br>

	<label for="understanding by others"> Do other can understand speech of person?</label><br>
	<input type="radio" name="understanding-by-others" value="right-handed"> Сompletely or almost completely understand<br>
	<input type="radio" name="understanding-by-others" value="lefthander"> Partially understand<br>
	<input type="radio" name="understanding-by-others" value="ambidexterity"> Almost completely do not understand<br>
	<input type="radio" name="understanding-by-others" value="lefthander"> Fully do not understand<br>
	<input type="radio" name="understanding-by-others" value="ambidexterity"> The person is silent<br>

	<label for="reading">Does the person can read? </label><br>
	<input type="radio" name="reading" value="right-handed"> Yes, uderstands all or almost all<br>
	<input type="radio" name="reading" value="lefthander"> Yes, but with considerable difficulty<br>
	<input type="radio" name="reading" value="ambidexterity"> No<br>

	<label for="writing">Does the person can write? </label><br>
	<input type="radio" name="writing" value="right-handed"> Yes<br>
	<input type="radio" name="writing" value="lefthander"> Yes, but with considerable difficulty, mistakes<br>
	<input type="radio" name="writing" value="ambidexterity"> Writes, but anything is unclear<br>
	<input type="radio" name="writing" value="ambidexterity"> No<br>

	<label for="reaction">Is there strange thing in behavior (inappropriate laughter, crying, inappropriate reactions, etc.)?</label><br>
	<input type="radio" name="reaction" value="right-handed"> No<br>
	<input type="text" name="reaction"> Yes<br>

	<label for="information">More information</label><br>
	<textarea name="information" rows="10" cols="30"></textarea>

	<input type="submit" value="Submit">
</form>





</body>
</html>


	

    
