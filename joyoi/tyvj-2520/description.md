# 

 
 # 题目描述 
<p>
One of the most popular attractions at the county fair is the

 
 # 输入格式 
<p>
* Line 1: Two space-separated integers, H and F.

 
 # 输出格式 
<p>
* Line 1: A single integer that is the smallest number of hoof-holds
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
<tr><td>3000 5
600 800
1600 1800
100 1300
300 2100
1600 2300

INPUT DETAILS:

The wall is three meters high with 5 hoof-holds.
</td><td>3

OUTPUT DETAILS:

Bessie can start on the ground, move to the hoof-hold at (600,800), move
from there to (100,1300), move from there to (300,2100), and from that high
height can hop onto the platform. This trip requires three hoof-holds. 
There is no shorter path that Bessie can take.</td></tr></table>