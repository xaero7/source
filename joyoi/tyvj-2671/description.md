# 

 
 # 题目描述 
<p>
小H最近沉迷于一个魔兽rpg对战地图Defense of the Ancients。他对dota的字幕提示非常感兴趣，因此想要编写一个程序来实现类似功能。

 
 # 输入格式 
<p>
输入文件的第一行为整场游戏的玩家个数N。

 
 # 输出格式 
<p>
输出文件包含若干行，为要求的dota字幕提示。
# 样例数据
<style>
        table,table tr th, table tr td { border:1px solid #0094ff; }
        table { width: 200px; min-height: 25px; line-height: 25px; text-align: center; border-collapse: collapse;}   
    </style>
<table>
	<tr>
		<td>输入样例</td>
		<td>输出样例</td>
	</tr>
<tr><td>3
YourLittleSiste 0
Ehero 0
Tra 1
21
01:00 Ehero is killed by Tra
02:00 Ehero is killed by Tra
03:00 Ehero is killed by Tra
04:00 Ehero is killed by Tra
04:05 Tra is killed by Roshan
12:00 Tra is killed by Dragon
15:00 Tra is killed by Tra
20:00 Tra is killed by YourLittleSiste
20:01 Tra is killed by YourLittleSiste
20:02 Tra is killed by YourLittleSiste
20:03 Tra is killed by YourLittleSiste
20:04 Tra is killed by YourLittleSiste
25:00 Tra is killed by YourLittleSiste
26:00 Tra is killed by YourLittleSiste
27:00 Tra is killed by YourLittleSiste
28:00 Tra is killed by YourLittleSiste
29:00 Tra is killed by YourLittleSiste
32:00 YourLittleSiste is killed by YourLittleSiste
34:59 YourLittleSiste is killed by Tra
34:59 Tra is killed by YourLittleSiste
35:09 Ehero is killed by Tra


</td><td>Tra pawned Ehero's head.
Tra just drew first blood.
Tra pawned Ehero's head.
Tra pawned Ehero's head.
Tra is on a killing spree!
Tra pawned Ehero's head.
Tra is dominating!
Tra has been killed by Roshan.
Tra has been killed by Dragon.
Tra has killed himself.
YourLittleSiste has just ended Tra's dominating.
YourLittleSiste pawned Tra's head.
YourLittleSiste just got a Double Kill!
YourLittleSiste pawned Tra's head.
YourLittleSiste is on a killing spree!
YourLittleSiste just got a Triple Kill!
YourLittleSiste pawned Tra's head.
YourLittleSiste is dominating!
YourLittleSiste just got a Triple Kill!
YourLittleSiste pawned Tra's head.
YourLittleSiste has a mega kill!
YourLittleSiste just got a Triple Kill!
The Sentinel is OWNING!
YourLittleSiste pawned Tra's head.
YourLittleSiste is unstoppable!
The Sentinel is OWNING!
YourLittleSiste pawned Tra's head.
YourLittleSiste is wicked sick!
The Sentinel is OWNING!
YourLittleSiste pawned Tra's head.
YourLittleSiste has a monster kill!
The Sentinel is OWNING!
YourLittleSiste pawned Tra's head.
YourLittleSiste is godlike!
The Sentinel is OWNING!
YourLittleSiste pawned Tra's head.
YourLittleSiste is beyond godlike. someone kill him!
The Sentinel is OWNING!
YourLittleSiste has killed himself.
Tra has just ended YourLittleSiste's beyond godlike.
YourLittleSiste pawned Tra's head.
Tra pawned Ehero's head.
Tra just got a Double Kill!

对于100%的数据，N ≤ 20 000，M ≤ 500 00。
   为方便处理，本题中的字幕提示系统与真实dota略有不同，分歧处以题面为准。
   对于同一秒发生的击杀，以在输入文件中先出现的击杀为先发生。
   严格注意题目叙述中大小写的区别，注意输出文件行末不要有空格。