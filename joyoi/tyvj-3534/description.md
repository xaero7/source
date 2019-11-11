# 

 
 # 题目描述 
<p>
我们常常会说这样的话：“X年是自Y年以来降雨量最多的”。它的含义是X年的降雨量不超过Y年，且对于任意Y＜Z＜X，Z年的降雨量严格小于X年。例如2002，2003，2004和2005年的降雨量分别为4920，5901，2832和3890，则可以说“2005年是自2003年以来最多的”，但不能说“2005年是自2002年以来最多的”由于有些年份的降雨量未知，有的说法是可能正确也可以不正确的。

 
 # 输入格式 
<p>
输入仅一行包含一个正整数n，为已知的数据。以下n行每行两个整数yi和ri，为年份和降雨量，按照年份从小到大排列，即yi＜yi+1。下一行包含一个正整数m，为询问的次数。以下m行每行包含两个数Y和X，即询问“X年是自Y年以来降雨量最多的。”这句话是必真、必假还是“有可能”。

 
 # 输出格式 
<p>
对于每一个询问，输出true，false或者maybe。

 
 # 提示 
<p>
100%的数据满足：1<=n<=50000, 1<=m<=10000, -10^9<=yi<=10^9, 1<=ri<=10^9 
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
<tr><td>6
2002 4920
2003 5901
2004 2832
2005 3890
2007 5609
2008 3024
5
2002 2005
2003 2005
2002 2007
2003 2007
2005 2008
</td><td>false
true
false
maybe
false