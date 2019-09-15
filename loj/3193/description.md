
# 题目描述

**本题译自 [eJOI2019](http://ejoi2019.si/) Problem A「[XORanges](https://www.ejoi2019.si/static/media/uploads/tasks/xoranges-isc(1).pdf)」**

Janez 喜欢橙子！他制造了一个橙子扫描仪，但是这个扫描仪对于扫描的每个橙子的图像只能输出一个 $32$ 位整数。

他一共扫描了 $n$ 个橙子，但有时他也会重新扫描一个橙子，导致这个橙子的 $32$ 位整数发生更新。

Janez 想要分析这些橙子，他觉得异或操作非常有趣，他每次选取一个区间从 $l$ 至 $u(l\le u)$，他想要得到这个区间内所有子区间的异或和的异或和。

例如 $l = 2, u = 4$ 的情况，记橙子序列 $A$ 中第 $i$ 个橙子的整数是 $a_i$，那么他要求的就是 $a_2 \oplus a_3 \oplus a_4 \oplus (a_2 \oplus a_3) \oplus (a_3 \oplus a_4) \oplus (a_2 \oplus a_3 \oplus a_4)$。


# 输入格式

第一行输入两个正整数 $n, q$，表示橙子数量和操作次数。

接下来一行 $n$ 个非负整数，表示每个橙子扫描得到的数值 $a_i$，从 $1$ 开始编号。

接下来 $q$ 行，每行三个数：
- 如果第一个数是 $1$，接下来输入一个正整数 $i$ 与非负整数 $j$，表示将第 $i$ 个橙子的扫描值 $a_i$ 修改为 $j$。
- 如果第一个数是 $2$，接下来输入两个正整数 $l, u$ 表示询问这个区间的答案。


# 输出格式

对于每组询问，输出一行一个非负整数，表示所求的总异或和。


# 样例

#### 样例输入 1

```plain
3 3
1 2 3
2 1 3
1 1 3
2 1 3
```

#### 样例输出 1

```plain
2
0
```

#### 样例解释 1

最初，$A = [1, 2, 3]$，询问的结果是 $1 \oplus 2 \oplus 3 \oplus (1 \oplus 2) \oplus (2 \oplus 3) \oplus (1 \oplus 2 \oplus 3) = 2$。

修改后，第一个位置被修改为 $3$，询问的结果是 $3 \oplus 2 \oplus 3 \oplus (3 \oplus 2) \oplus (2 \oplus 3) \oplus (3 \oplus 2 \oplus 3) = 0$。

#### 样例输入 2

```plain
5 6
1 2 3 4 5
2 1 3
1 1 3
2 1 5
2 4 4
1 1 1
2 4 4
```

#### 样例输出 2

```plain
2
5
4
4
```


# 数据范围与提示

对于 $100\%$ 的数据，保证 $0\le a_i \le 10^9, 1\le n, q\le 2\times 10^5$。

| 子任务编号 |          $n, q$ | 特殊限制 | 分值 |
| :--------: | :-----------------: | :---: | :--: |
|    $1$     |     $\le 100$       | | $12$  |
|    $2$     |     $\le 500$       | 不存在修改操作 | $18$  |
|    $3$     |    $\le 5000$    | | $25$  |
|    $4$     |   $\le 2\times 10^5$   | 不存在修改操作 | $20$  |
|    $5$     |   $\le 2\times 10^5$    | | $25$  |

