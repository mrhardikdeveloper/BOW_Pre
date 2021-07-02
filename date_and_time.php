<?php

// date(format,timestamp)
// d - Represents the day of the month (01 to 31)
// m - Represents a month (01 to 12)
// Y - Represents a year (in four digits)
// l (lowercase 'L') - Represents the day of the week
// H - 24-hour format of an hour (00 to 23)
// h - 12-hour format of an hour with leading zeros (01 to 12)
// i - Minutes with leading zeros (00 to 59)
// s - Seconds with leading zeros (00 to 59)
// a - Lowercase Ante meridiem and Post meridiem (am or pm)

// date_default_timezone_set("America/New_York");

date_default_timezone_set("Asia/Calcutta");
echo "Date = ". date("d/m/y")."<br>";
echo "Day = ". date("D")."<br>";
echo "Day Full = ". date("l")."<br>";
echo "Month = ". date("M")."<br>";
echo "Year Full = ". date("Y")."<br>";
echo "Hours 24 = ". date("H"). "<br>";
echo "Hour 12 = ". date("h")."<br>";
echo "Minute = ". date("i")."<br>";
echo "Second = ". date("s")."<br>";
echo "AM / PM = ". date("A")."<br><br>";


//mktime(hour, minute, second, month, day, year)

$a = mktime(10,22,13,11,20,2021);
echo "MKTIME = ".date("h-i-s A /// d-m-y")."<br><br>";


//strtotime(time, now)

$b = strtotime("10:30am April 12 2021");
echo "StrToTime = ".date("d-m-Y /// h-i-s A")."<br><br>";

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Sunday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

?>