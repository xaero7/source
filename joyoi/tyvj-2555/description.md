# 

 
 # 题目描述 
<p>
为了跟踪所有的牛,农夫JOHN在农场上装了一套自动系统. 他给了每一个头牛一个电子牌号 

 
 # 输入格式 
<p>
* 第一行: 两个用空格分开的数, N 和 M. 

 
 # 输出格式 
<p>

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
<tr><td>

3 4
abcb
a 1000 1100
b 350 700
c 200 800
输入解释:
名字是 "abcb", 操作费用如下:

    添加   删除
a  1000   1100
b   350    700
c   200    800

</td><td>

900
输出解释:
在尾部添加"a"得到"abcba"的费用为1000. 删除头上的"a",得到"bcb"的费用为1100.在头上添加"bcb"可以得到最小费用,350+200+350=900.
