# 

 
 # 题目描述 
<p>
罗小松认为自己很强，于是在10月33号那天的实战演练中找高手挑星际。本来高手可以轻松取胜，但是众所周知，罗小松很俗。他给高手规定了一种很特别的星际规则：

 
 # 输入格式 
<p>
第一行一个N(1<=N<=50)，表示克制的方案数。第2行到第n+1行每行两个字符，表示第一个字符代表的兵克制第二个字符代表的兵（大写的是罗小松的兵，小写的是高手的兵）。然后n+2行和n+3行两个字符串，第一个全是大写表示罗小松的序列，第二个全是小写表示高手的序列（序列最大长度不超过400）。</p> 

 
 # 输出格式 
<p>
共一行，这一行有2个数，表示罗小松克制高手的最大战役数和高手克制罗小松的最大战役数。</p> 

 
 # 提示 
<p>
对于30%的数据，序列长度不超过100。
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
<tr><td>4
d D
a E
C d
E a
CDEDD
adad
</td><td>2 3</td></tr></table>