# 

 
 # 题目描述 
<p>
The 2*N (3 <= N <= 1,000) cows have assembled the Bovine Accordion

 
 # 输入格式 
<p>
* Line 1: A single integer: N

 
 # 输出格式 
<p>
* Line 1: A single integer that represents the maximum amount of cash
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
1
1
5
5
1
1

INPUT DETAILS:

There are 6 cows: 3 accordionists and 3 banjoists. The accordionists have
talent levels (1, 1, 5), and the banjoists have talent levels (5, 1, 1).

</td><td>17

OUTPUT DETAILS:

FJ pairs accordionist 3 with banjoist 1 to get earn A_3 * B_1 = 5 * 5 = 25
in profit.  He loses a total of (1 + 1)^2 + (1 + 1)^2 = 8 dollars due to
the cost of soda for his remaining cows. Thus his final (net) profit is 25
- 8 = 17.