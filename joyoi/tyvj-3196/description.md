# 

 
 # 题目描述 
<p>
破坏行动（destroy.pas/c/cpp）

 
 # 输入格式 
<p>
    第一行包含四个整数n m s t ,表示有n个节点(编号为1,2,…,n), m 条管道，s t 分别是A地和B地的编号。2<=n <=130,0<= m <=n*(n-1)/2,1<=s,t <=n .

 
 # 输出格式 
<p>
   第一行输出抗压指数减少1就必定爆炸的管道的条数K。
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
<tr><td>4 4 1 4
2 4 100
1 2 1
3 1 100
4 3 1
</td><td>2
2
4