
# 题目描述

可爱的小雅米学姐在绿洲游玩时，不小心被老板 ddc 抓去当契约工。现在 ddc 老板对于怎么快速安排这些契约工非常苦恼。

一共有 $n$ 个契约地，每个契约地都是一个圆，由于各地任务不一样，所以需要有人从一个契约地走到另一个契约地。如果两个契约地的圆存在至少一个公共点，我们称这两个契约地相邻。为了方便起见，每个人只能走到与其相邻的契约地或者呆在原地。ddc 会给出今天每个契约地的人数，以及明天每个契约地的人数，小雅米学姐需要给出 ddc 一种人员调动方案，如果小雅米学姐能解决这个问题，那么 ddc 就会释放掉小雅米学姐。现在你能帮小雅米学姐解决这个问题吗？

<span style="color: red;">**如果存在多种调配方案，请输出任意一组。**</span>

# 输入格式

第一行输入一个整数$n(1\leq n\leq 500)$。

接下来n行，每行三个整数$x,y,r(-1000\leq x,y\leq 1000,\ 1\leq r\leq 1000)$，分别表示圆心坐标 $(x,\ y)$ 与半径 $r$。

接下来一行 $n$ 个数 $a_i(1\leq a_i\leq 10^6)$，表示第一天每个契约地的人数。

接下来一行 $n$ 个数 $b_i(1\leq b_i\leq 10^6)$，表示第二天每个契约地的人数。

# 输出格式

如果存在一种调配方案，第一行输出 `"YES"`（不含引号），否则输出 `"NO"`（不含引号）。

如果存在调配方案，接下来 $n$ 行，每行输出 $n$ 个整数，第 $i$ 行第 $j$ 个整数表示需要由 $a_{i,j}$ 个人从第 $i$ 个契约地走到第 $j$ 个契约地。


# 样例

#### 样例输入

```plain
4
0 0 1
2 0 1
4 0 1
3 0 1
1 2 6 3
3 5 3 1
```

#### 样例输出

```plain
YES
1 0 0 0
2 0 0 0
0 4 1 1
0 1 2 0
```

#### 提示

不同契约地之间可能存在各种位置关系，请仔细考虑！

# 数据范围与提示


