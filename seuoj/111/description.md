
# 题目描述

军训太热了，丢丢陈和陈丢丢们纷纷热的中暑，丢丢陈选择坐着休息(看上去高度为 $2$)，而陈丢丢则直接躺在了地上(看上去高度为 $1$)，有趣的是他们的位置构成了一条从左往右的直线。但是坐着的丢丢陈和躺着的陈丢丢们的看上去还是不太和谐，从左往右看时看到的效果是波浪形。作为一名教官，你可以反转某一段的陈丢丢和丢丢陈们，使得在丢丢陈和陈丢丢们构成的高度序列的最长单调不降子序列最长。

不能反转大于一次，不然丢丢陈和陈丢丢会很生气。

# 输入格式

第一行为数据组数 $T(1\leq T\leq 15)$。

接下来 $T$ 组数据，对于每组数据：

第一行为一个整数 $n(1\leq n\leq 10^6)$，表示丢丢陈和陈丢丢的个数。

接下来一行 $n$ 个整数 $1$ 或 $2$，从左往右描述直线上的丢丢陈和陈丢丢们，$1$ 表示躺着的陈丢丢，$2$ 表示坐着的丢丢陈。

# 输出格式

对于每组数据，输出一行，即最长单调不降的长度。


# 样例

#### 样例输入

```plain
2
4
1 2 1 2
10
1 1 2 2 2 1 1 2 2 1
```

#### 样例输出

```plain
4
9
```

#### 样例解释

对于第一组数据，翻转区间 $[2,\ 3]$ 后变为 $1,\ 1,\ 2,\ 2$,答案为 $4$；

对于第二组数据，翻转区间 $[3,\ 7]$ 后变为 $1,\ 1,\ 1,\ 1,\ 2,\ 2,\ 2,\ 2,\ 2,\ 1$，答案为 $9$。

# 数据范围与提示


