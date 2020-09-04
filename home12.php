<?php
$arr = [
	'ru'=>[1=>'ПН', 'ВТ', 'СР','ЧТ','ПТ','СБ','НД'],
	'en'=>[1=>'MON', 'TUES', 'WED','THURS','FRI','SAT','SUN']
];
echo $arr['ru'][4].':'.$arr['en'][4];